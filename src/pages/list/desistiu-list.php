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
    <title>DASHBOARD | List</title>
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
                        <a class="nav-link" href="../../pages/auth/sign-up-admin.php">Administrator</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="../../pages/auth/sign-up-user.php">Normal User</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <table class='table table-sm'>
        <thead>
            <tr>
                <th scope='col'>ID</th>
                <th scope='col'>Name</th>
                <th scope='col'>B.I.</th>
                <th scope='col'>Status</th>
                <th scope='col'>Created At</th>
            </tr>
        </thead>


        <tbody>
            <?php
            include("../../actions/connection.php");
            $search = mysqli_query($connection, "SELECT * FROM user");

            while ($result = mysqli_fetch_array($search)) {
            ?>
                <tr>
                    <?php if($result['status'] == 'Desistiu'){ ?>
                    <th scope="row"><?php echo ($result['id']); ?></th>
                    <td><?php echo ($result['name']); ?></td>
                    <td><?php echo ($result['bi']); ?></td>
                    <td><?php echo ($result['status']); ?></td>
                    <td><?php echo ($result['created_at']); ?></td>
                    <?php } ?>
                </tr>
        </tbody>
    <?php } ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>


</body>

</html>