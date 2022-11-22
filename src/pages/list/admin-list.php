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
    
    <?php
        echo "<table class='table table-sm'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th scope='col'>id</th>";
        echo "<th scope='col'>Name</th>";
        echo "<th scope='col'>E-mail</th>";
        echo "<th scope='col'>Role</th>";
        echo "<th scope='col'>Created at</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        
        include("../../actions/connection.php");
        $search = mysqli_query($connection, "SELECT * FROM admin");
        
        while($result = mysqli_fetch_array($search)){
            echo "<tr>";
            echo "<th scope='row'>" .$result['id']. "</th>";
            echo "<td>" .$result['name']. "</td>";            
            echo "<td>" .$result['email']. "</td>";            
            echo "<td>" .$result['role']. "</td>";            
            echo "<td>" .$result['created_at']. "</td>";
        }



        echo "</tbody>";
        echo "</table>";
    ?>
    
</body>
</html>
