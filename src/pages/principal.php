<!doctype html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/images.css">
    <link rel="stylesheet" href="../../assets/css/login-and-sing-up.css">
    <link rel="stylesheet" href="../../assets/bootstrap-4.6.2-dist/css/bootstrap.css">
    <script src="../../assets/bootstrap-4.6.2-dist/js/bootstrap.js"></script>
    <title>Listagens | USERS</title>
</head>
<body class="text-center">
  <?php require_once "../includes/menu.php";   
    $acao = 'user';

    if(isset($_GET["acao"])){
        $acao = $_GET["acao"];
    }

    switch($acao){
        case 'home': require_once"../includes/home.php";
            break;
        case 'fila': require_once"../includes/fila.php";
            break;
        default: require_once"../includes/home.php";
    }
  ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>

</html>