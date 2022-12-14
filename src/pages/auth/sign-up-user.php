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
    <title>Sign Up</title>
</head>
<body class="text-center">
    <form class="form-signin" action="../../actions/auth/sign-up-user.php" method="POST">
        <img class="logo" src="../../../assets/images/logo/logo.png" alt="logo">
        <h1 class="h3 mb-3 font-weight-normal">Reservar Lugar na Fila</h1>
        <label for="inputEmail" class="sr-only">Nome do Usuário</label>
        <input type="text" name="name" id="inputEmail" class="form-control" placeholder="Nome do Usuário" required autofocus>
        <label for="inputEmail" class="sr-only">Bilhete de Identidade</label>
        <input type="text" name="bi" id="inputEmail" class="form-control" placeholder="Bilhete de Identidade" required>

        <div class="mb-3 text-right">
            <p>Já me cadastrei! <a href="status-consult-user.php">Consultar me Status</a></p>
        </div>

        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Reservar</button>

        <div class="mb-3 text-right">
            <p><a href="login-admin.php">Login</a></p>
        </div>
        
    </form>
</body>
</html>
