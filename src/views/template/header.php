<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/icofont.min.css">
    <link rel="stylesheet" href="\public\assets\css\template.css">
    <title>Sistema Cadastro</title>
</head>

<body class="hide-sidebar">
    <?php if ($_SESSION) { ?>
    <header class="header">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light">
                <button class="navbar-toggler mr-auto" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="icofont-navigation-menu"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link active" href="inicio.php">
                                <i class="icofont-home mr-2"></i>Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="users.php">
                                <i class="icofont-list mr-2"></i>Perfil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="logout.php">
                                <i class="icofont-logout mr-2"></i>Sair</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <?php } ?>