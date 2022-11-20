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
    <title>Sign Up | ADMIN</title>
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

    <form class="form-signin" action="../../actions/auth/sign-up-admin.php" method="POST">
        <img class="logo" src="../../../assets/images/logo/logo.png" alt="logo">
        <h1 class="h3 mb-3 font-weight-normal">Cadastrar Admin</h1>
        <label for="inputEmail" class="sr-only">Nome do Usuário</label>
        <input type="text" name="name" id="inputEmail" class="form-control" placeholder="Nome do Usuário" required autofocus>
        <label for="inputEmail" class="sr-only">Endereço de Email</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Endereço de Email" required>
        <label for="inputPassword" class="sr-only">Palavra passe</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Palavra passe" required>

        <div class="mb-3 select">
            <select name="role" id="format">
                <option selected disabled>Escolha o tipo de usuário</option>
                <option value="Administrator">Administrator</option>
                <option value="Moderator">Moderator</option>
            </select>
        </div>

        <div class="mb-3 text-right">
            <p>Já tenho uma conta! <a href="login-admin.php">Logar</a></p>
        </div>

        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Cadastrar</button>
    </form>
</body>
</html>
