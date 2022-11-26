<?php
    include("../../actions/connection.php");

    echo("<link rel='stylesheet' href='../../../assets/bootstrap-4.6.2-dist/css/bootstrap.css'>");
    echo("<script src='../../../assets/bootstrap-4.6.2-dist/js/bootstrap.js'></script>");

    $consultar = mysqli_real_escape_string($connection, $_POST['consultar']);
    $bi = mysqli_real_escape_string($connection, $_POST['bi']);
    
    if(isset($bi)){
        $search = mysqli_query($connection, "SELECT `name`, `bi`, `status` FROM `user` WHERE `bi` = '$bi'")
        or die("FALHA AO CONSULTAR");

        $result = mysqli_fetch_array($search);

        if ($search && mysqli_num_rows($search) == 1) {     
            echo("<p>Bilhete de Identidade número: {$bi}</p>");

            echo("<p>Nome do usuário: {$result['name']}</p>");
            
            echo("<p>Status do usuário: {$result['status']}</p>");

            echo "<a href = \"../../pages/auth/status-consult-user.php\" classe=\"text-center\">Consular outro número</a>";

        } else {
            // falhou o login
            echo "<p>Esse dado que inseriste não se encontra na nossa base de dados</p>";
            echo "<a href = \"../../pages/auth/status-consult-user.php\" classe=\"text-center\">Insira corretamente, e tente novamente</a>";
        }
        
    }