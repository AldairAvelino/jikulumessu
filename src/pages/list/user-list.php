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
    <title>Listagens | USERS</title>
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
    
    <table class='table table-sm'>
        <thead>
            <tr>
                <th scope='col'>id</th>
                <th scope='col'>Name</th>
                <th scope='col'>B.I.</th>
                <th scope='col'>Status</th>
                <th scope='col'>Created at</th>
                <th scope='col'>Delete</th>
            </tr>
        </thead>


    <?php
        include("../../actions/connection.php");
        $search = mysqli_query($connection, "SELECT * FROM user");

        while($result = mysqli_fetch_array($search)){
            ?>

            <tbody>
                <tr>
                    <th scope="row"><?php echo($result['id']); ?></th>
                    <td><?php echo($result['name']); ?></td>
                    <td><?php echo($result['bi']); ?></td>
                    <td><?php echo($result['status']); ?></td>
                    <td><?php echo($result['created_at']); ?></td>
                    <td>
                        <form action='../../actions/delete/delete-user.php' method='POST'>
                            <input type="hidden" name="id" value="<?php echo($result['id']); ?>">
                            <button type='submit' class='btn btn-danger pad m-1' name='delete' value="DELETE">Delete</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        <?php } ?>
    
</body>
</html>
