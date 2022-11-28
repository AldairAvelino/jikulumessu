<?php
session_start();

    if($_SESSION){
        if($_SESSION["role"] == 'Administrator'){
        header("Location: ../../pages/principal.php");
     }
    }
     ?>
<!doctype html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../assets/css/images.css">
    <link rel="stylesheet" href="../../../assets/css/login-and-sing-up.css">
    <link rel="stylesheet" href="../../../assets/bootstrap-4.6.2-dist/css/bootstrap.css">
    <script src="../../../assets/bootstrap-4.6.2-dist/js/bootstrap.js"></script>
    <title>Login | ADMIN</title>
</head>
<body class="text-center">
    <form class="form-signin" action="../../actions/auth/login-admin.php" method="POST">
        <img class="logo" src="../../../assets/images/logo/logo.png" alt="logo">
        <h1 class="h3 mb-3 font-weight-normal">Logar</h1>
        <label for="inputEmail" class="sr-only">Endereço de Email</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Endereço de Email" required autofocus>
        <label for="inputPassword" class="sr-only">Palavra passe</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Palavra passe" required>

        <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Entrar</button>

        <div class="mb-3 text-right">
            <p><a href="../../../index.php">voltar</a></p>
        </div>
    </form>
</body>
</html>
