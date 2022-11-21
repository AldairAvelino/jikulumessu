<?php
    // começar ou retomar uma sessão
    session_start();
    include("../connection.php");

    // se vier um pedido para login
    if (!empty($_POST)) {
        $bi = mysqli_real_escape_string($connection, $_POST['bi']);
        $consultar = mysqli_real_escape_string($connection, $_POST['consultar']);

        // verificar o utilizador em questão (pretendemos obter uma única linha de registos)
	    $search = mysqli_query($connection, "SELECT * FROM user WHERE bi ='$bi'")
        or die("FALHA AO CONSULTAR");

        $result = mysqli_fetch_array($search);

        if ($search && mysqli_num_rows($search) == 1) {     
            echo("Consultando bilhete número {$bi}");
            echo("<br>");

            echo("Nome do usuário: {$result['name']}");
            echo("<br>");
            
            echo("Status do usuário: {$result['status']}");
        } else {
            // falhou o login
            echo "<a href = \"../../pages/auth/status-consult-user.php\" classe=\"text-center\">Tente novamente</a>";
        }
        
    }

	

