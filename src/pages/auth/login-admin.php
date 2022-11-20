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
    <header>
        <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="ml-auto collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="sign-up-admin.php">Administrator</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="sign-up-user.php">Normal User</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    
    <form class="form-signin" action="../../actions/admin/login.php" method="POST">
        <img class="logo" src="../../../assets/images/logo/logo.png" alt="logo">
        <h1 class="h3 mb-3 font-weight-normal">Logar</h1>
        <label for="inputEmail" class="sr-only">Endereço de Email</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Endereço de Email" required autofocus>
        <label for="inputPassword" class="sr-only">Palavra passe</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Palavra passe" required>

        <div class="mb-3 text-right">
            <p>Ainda não tenho uma conta! <a href="sign-up.php">Criar</a></p>
        </div>

        <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Entrar</button>
    </form>
</body>
</html>
