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
    <title>Listagens | ADMIN</title>
</head>

<body class="text-center">
    <form class="form-signin" action="../../actions/status/status.php" method="POST">
        <img class="logo" src="../../../assets/images/logo/logo.png" alt="logo">
        <h1 class="h3 mb-3 font-weight-normal">Consultar Meu Lugar</h1>
        <label for="inputEmail" class="sr-only mb-3">Bilhete de Identidade</label>
        <input type="text" name="bi" id="inputEmail" class="form-control mb-3" placeholder="Bilhete de Identidade" required autofocus>

        <div class="mb-3 text-right">
            <p>Não reservei meu lugar ainda! <a href="sign-up-user.php">Reservar</a></p>
        </div>

        <button type="submit" class="btn btn-lg btn-primary btn-block" name="consultar">
            Consultar
        </button>

    </form>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>


</body>

</html>