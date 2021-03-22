<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="\public\assets\css\login.css">
    <title>Login</title>
</head>
<body>
    <main class="content">
        <form class="form-login" action="#" method="post">
            <div class="login-card card">
                <h5 class="card-header">LOGIN</h5>
                <div class="card-body">
                    <?php include(TEMPLATE_PATH . '/messages.php') ?>
                    <div class="form-group m-2">
                        <label for="email">Endereço de email</label>
                        <input type="email" id="email" name="email"
                            class="form-control <?= isset($errors['email']) ? 'is-invalid' : ' ' ?>"
                            id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email"
                            autocomplete="off">
                        <div class="invalid-feedback">
                            <i class="icofont-error"></i>
                            <?= $errors['email'] ?>
                        </div>
                    </div>
                    <div class="form-group m-2">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha"
                            class="form-control <?= isset($errors['senha']) ? 'is-invalid' : ' ' ?>" id="senha"
                            placeholder="Senha">
                        <div class="invalid-feedback">
                            <i class="icofont-error"></i>
                            <?= $errors['senha'] ?>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex flex-column">
                    <button type="submit" class="btn btn-lg btn-primary justify-content-center">Entrar</button>
                    <a href="cadastro.php" class="card-link">Não possui cadastro? Clique aqui</a>
                </div>
            </div>
        </form>
    </main>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
</script>

</html>