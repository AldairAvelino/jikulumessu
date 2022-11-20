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
    <form class="form-signin">
        <img class="logo" src="../../../assets/images/logo/logo.png" alt="logo">
        <h1 class="h3 mb-3 font-weight-normal">Logar</h1>
        <label for="inputEmail" class="sr-only">Endereço de Email ou Nome</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Endereço de Email ou Nome" required autofocus>
        <label for="inputPassword" class="sr-only">Palavra passe</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Palavra passe" required>

        <div class="mb-3 text-right">
            <p>Ainda não tenho uma conta! <a href="sign-up.php">Criar</a></p>
        </div>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
    </form>
</body>
</html>
