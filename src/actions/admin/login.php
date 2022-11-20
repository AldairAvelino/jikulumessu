<?php
    include("../connection.php");

    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);
    $login = mysqli_real_escape_string($connection, $_POST['login']);
    
    //echo($email);
    //echo($password);

    if(isset($login)){
        $search = mysqli_query($connection, "SELECT * FROM admin WHERE email ='$email' AND password = '$password'")
        or die("FALHA AO BUSCAR");

        $result = mysqli_fetch_array($search);
        
        echo($result['email']);
        echo($result['password']);
        
        if(mysqli_num_rows($search) <= 0){
            echo "<script language='javascript' type='text/javascript'>
            alert('Login e/ou senha incorretos');window.location
            .href='../../pages/admin/login.php';</script>";
            die();
        }else{
            setcookie("login",$login);
            header("Location: ../../pages/index.php");
        }

        
    }