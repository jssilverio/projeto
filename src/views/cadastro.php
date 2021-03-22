<main class="content">
    <?php
        include(TEMPLATE_PATH . "/messages.php");
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="card mx-auto">
                <h5 class="card-header">CADASTRO</h5>
                <div class="card-body">
                    <form action="#" id="form" method="post" autocomplete="off">
                        <input type="hidden" name="id" value="<?= $id ?? "" ?>">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="nome">Nome*</label>
                                <input type="text" name="nome" id="nome"
                                    class="form-control <?= isset($errors['nome']) ? 'is-invalid' : ' ' ?>"
                                    placeholder="Nome" value="<?= $nome ?? "" ?>">
                                <div class="invalid-feedback">
                                    <i class="icofont-error"></i>
                                    <?= $errors['nome'] ?>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Sobrenome*</label>
                                <input type="text"
                                    class="form-control <?= isset($errors['sobrenome']) ? 'is-invalid' : ' ' ?>"
                                    name="sobrenome" id="sobrenome" placeholder="Sobrenome"
                                    value="<?= $sobrenome ?? "" ?>">
                                <div class="invalid-feedback">
                                    <i class="icofont-error"></i>
                                    <?= $errors['sobrenome'] ?>
                                </div>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputAddress">Data Nascimento*</label>
                                <input type="text"
                                    class="form-control <?= isset($errors['data_nasc']) ? 'is-invalid' : ' ' ?>"
                                    name="data_nasc" id="data_nasc" placeholder="Data Nascimento"
                                    value="<?= date('dmY', strtotime($data_nasc)) ?? "" ?>">
                                <div class="invalid-feedback">
                                    <i class="icofont-error"></i>
                                    <?= $errors['data_nasc'] ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="inputCPF">CPF*</label>
                                <input type="text"
                                    class="form-control <?= isset($errors['cpf']) ? 'is-invalid' : ' ' ?>" name="cpf"
                                    id="cpf" value="<?= $cpf ?? "" ?>" placeholder="CPF">
                                <div class="invalid-feedback">
                                    <i class="icofont-error"></i>
                                    <?= $errors['cpf'] ?>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputFone" class="control-label">Telefone*</label>
                                <input type="text"
                                    class="form-control <?= isset($errors['telefone']) ? 'is-invalid' : ' ' ?>"
                                    name="telefone" id="telefone" placeholder="Telefone" value="<?= $telefone ?? "" ?>">
                                <div class="invalid-feedback">
                                    <i class="icofont-error"></i>
                                    <?= $errors['telefone'] ?>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Email*</label>
                                <input type="email"
                                    class="form-control <?= isset($errors['email']) ? 'is-invalid' : ' ' ?>"
                                    name="email" id="email" placeholder="Email" value="<?= $email ?? "" ?>">
                                <div class="invalid-feedback">
                                    <i class="icofont-error"></i>
                                    <?= $errors['email'] ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="senha">Senha*</label>
                                <input type="password" name="senha" id="senha" placeholder="Senha"
                                    class="form-control <?= isset($errors['senha']) ? 'is-invalid' : ' ' ?>"
                                    value="<?= $senha ?? "" ?>" >
                                <div class="invalid-feedback">
                                    <i class="icofont-error"></i>
                                    <?= $errors['senha'] ?>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="senha2">Confirmar Senha*</label>
                                <input type="password"
                                    class="form-control <?= isset($errors['senha2']) ? 'is-invalid' : ' ' ?>"
                                    name="senha2" id="senha2" placeholder="Confirmar Senha" value="<?= $senha ?? "" ?>">
                                <div class="invalid-feedback">
                                    <i class="icofont-error"></i>
                                    <?= $errors['senha2'] ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="cep">CEP*</label>
                                <input type="text"
                                    class="form-control <?= isset($errors['cep']) ? 'is-invalid' : ' ' ?>" name="cep"
                                    id="cep" placeholder="CEP..." value="<?= $cep ?? "" ?>">
                                <div class="invalid-feedback">
                                    <i class="icofont-error"></i>
                                    <?= $errors['cep'] ?>
                                </div>
                            </div>
                            <div class="form-group col-md-7">
                                <label for="endereco">Endereço*</label>
                                <input type="text"
                                    class="form-control <?= isset($errors['endereco']) ? 'is-invalid' : ' ' ?>"
                                    name="endereco" id="endereco" placeholder="Rua..." value="<?= $endereco ?? "" ?>">
                                <div class="invalid-feedback">
                                    <i class="icofont-error"></i>
                                    <?= $errors['endereco'] ?>
                                </div>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="numero">Nº*</label>
                                <input type="text"
                                    class="form-control <?= isset($errors['numero']) ? 'is-invalid' : ' ' ?>"
                                    name="numero" id="numero" placeholder="nº..." value="<?= $numero ?? "" ?>">
                                <div class="invalid-feedback">
                                    <i class="icofont-error"></i>
                                    <?= $errors['numero'] ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="complemento">Complemento</label>
                                <input type="text"
                                    class="form-control <?= isset($errors['complemento']) ? 'is-invalid' : ' ' ?>"
                                    name="complemento" id="complemento" placeholder="Apto,casa.."
                                    value="<?= $complemento ?? "" ?>">
                                <div class="invalid-feedback">
                                    <i class="icofont-error"></i>
                                    <?= $errors['complemento'] ?>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="bairro">Bairro*</label>
                                <input type="text"
                                    class="form-control <?= isset($errors['bairro']) ? 'is-invalid' : ' ' ?>"
                                    name="bairro" id="bairro" placeholder="Bairro.." value="<?= $bairro ?? "" ?>">
                                <div class="invalid-feedback">
                                    <i class="icofont-error"></i>
                                    <?= $errors['bairro'] ?>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="cidade">Cidade*</label>
                                <input type="text"
                                    class="form-control <?= isset($errors['cidade']) ? 'is-invalid' : ' ' ?>"
                                    name="cidade" id="cidade" placeholder="Cidade.." value="<?= $cidade ?? "" ?>">
                                <div class="invalid-feedback">
                                    <i class="icofont-error"></i>
                                    <?= $errors['cidade'] ?>
                                </div>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="uf">UF*</label>
                                <input type="text" class="form-control <?= isset($errors['uf']) ? 'is-invalid' : ' ' ?>"
                                    name="uf" id="uf" placeholder="Estado.." value="<?= $uf ?? "" ?>">
                                <div class="invalid-feedback">
                                    <i class="icofont-error"></i>
                                    <?= $errors['uf'] ?>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary">Salvar</button>
                        <?php if (!$_SESSION) { ?>
                        <a href="/public" class="btn btn-primary">Cancelar</a>
                        <?php } ?>
                        <?php if ($_SESSION) { ?>
                        <a href="/public/users.php" class="btn btn-primary">Voltar</a>
                        <?php } ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>