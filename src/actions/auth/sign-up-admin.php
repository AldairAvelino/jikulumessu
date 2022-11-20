<?php
    include("../connection.php");

    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);
    $role = mysqli_real_escape_string($connection, $_POST['role']);
    $submit = mysqli_real_escape_string($connection, $_POST['submit']);

    mysqli_query($connection, "INSERT INTO `admin`(`name`, `email`, `password`, `role`) VALUES ('$name','$email','$password','$role')");

    if(isset($submit)){
        echo "<script language='javascript' type='text/javascript'>
            alert('Cadastrado com sucesso! Pode efetuar o Login');window.location
            .href='../../pages/auth/login-admin.php';</script>";
    }