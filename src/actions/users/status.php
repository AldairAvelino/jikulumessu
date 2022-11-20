<?php
    include("../connection.php");

    $bi = mysqli_real_escape_string($connection, $_POST['bi']);
    $consult = mysqli_real_escape_string($connection, $_POST['consultar']);
    
    //echo($email);
    //echo($password);

    if(isset($consult)){
        $search = mysqli_query($connection, "SELECT * FROM user WHERE bi ='$bi'")
        or die("FALHA AO BUSCAR");

        $result = mysqli_fetch_array($search);
        
        echo($result['name']);
        echo($result['bi']);
        echo($result['status']);
        
        if(mysqli_num_rows($search) <= 0){
            echo "<script language='javascript' type='text/javascript'>
            alert('Dado incorreto! Tente novamente');window.location
            .href='../../pages/admin/login.php';</script>";
            die();
        }else{
            setcookie("login",$consult);
            header("Location: ../../pages/users/status.php");
        }

        
    }