<?php
    include("../connection.php");

    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);
    $role = mysqli_real_escape_string($connection, $_POST['role']);

    mysqli_query($connection, "INSERT INTO `admin`(`name`, `email`, `password`, `role`) VALUES ('$name','$email','$password','$role')");