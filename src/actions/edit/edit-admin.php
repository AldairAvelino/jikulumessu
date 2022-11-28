<?php
    include("../connection.php");

    $id = mysqli_real_escape_string($connection, $_POST['id']);
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);
    $role = mysqli_real_escape_string($connection, $_POST['role']);
    
    $edit = mysqli_real_escape_string($connection, $_POST['edit']);

    mysqli_query($connection, "UPDATE `admin` SET `name`='$name',`email`='$email',`password`='$password',`role`='$role' WHERE `id` = '$id'");


    if(isset($edit)){       
        header("location: ../../pages/principal.php?acao=user");
    }
