<main class="content">
    <?php
        include(TEMPLATE_PATH . "/messages.php");
        foreach($_SESSION['user'] as $user):
    ?>
    <?php endforeach?>
    <h5 class="card-header">DADOS CADASTRO</h5>
    <div class="card-group">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped table-bordered table-hover">
                    <tbody>
                        <tr>
                            <th scope="row">NOME</th>
                            <td><?= $user->nome ?></td>
                        </tr>
                        <tr>
                            <th scope="row">SOBRENOME</th>
                            <td><?= $user->sobrenome ?></td>
                        </tr>
                        <tr>
                            <th scope="row">CPF</th>
                            <td><?= $user->cpf ?></td>
                        </tr>
                        <tr>
                            <th scope="row">EMAIL</th>
                            <td><?= $user->email ?></td>
                        </tr>
                        <tr>
                            <th scope="row">TELEFONE</th>
                            <td><?= $user->telefone ?></td>
                        </tr>
                        <tr>
                            <th scope="row">DATA DE NASCIMENTO</th>
                            <td><?= $user->data_nasc ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <table class="table table-striped table-bordered table-hover">
                    <tbody>
                        <tr>
                            <th scope="row">CEP</th>
                            <td><?= $user->cep ?></td>
                        </tr>
                        <tr>
                            <th scope="row">ENDEREÇO</th>
                            <td><?= $user->endereco ?></td>
                        </tr>
                        <tr>
                            <th scope="row">NÚMERO</th>
                            <td><?= $user->numero ?></td>
                        </tr>
                        <tr>
                            <th scope="row">COMPLEMENTO</th>
                            <td><?= $user->complemento ?></td>
                        </tr>
                        <tr>
                            <th scope="row">BAIRRO</th>
                            <td><?= $user->bairro ?></td>
                        </tr>
                        <tr>
                            <th scope="row">CIDADE</th>
                            <td><?= $user->cidade ?></td>
                        </tr>
                        <tr>
                            <th scope="row">ESTADO</th>
                            <td><?= $user->uf ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="card-footer text-muted mx-auto">
        <a class="btn btn-primary" href="cadastro.php" role="button">
            <i class="icofont-ui-edit"></i>Editar Cadastro</a>

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#delete_modal">
            <i class="icofont-delete"></i>Excluir Conta</button>
    </div>

    <div class="modal fade" id="delete_modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">
                        <i class="icofont-warning-alt"></i>ATENÇÃO
                    </h3>
                    <button type="button" class="close" data-dismiss="modal">
                    </button>
                </div>
                <div class="modal-body">
                    <h5>DESEJA REALMENTE DELETAR SEU CADASTRO?</h5>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-primary" href="?delete=<?= $user->id ?>" role="button">Confirma Exclusão</a>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>