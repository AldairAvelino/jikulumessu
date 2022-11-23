<?php
    include("../connection.php");

    $id = mysqli_real_escape_string($connection, $_POST['edit']);
    $name = mysqli_real_escape_string($connection, $_POST['edit']);
    $email = mysqli_real_escape_string($connection, $_POST['edit']);
    $password = mysqli_real_escape_string($connection, $_POST['edit']);
    $role = mysqli_real_escape_string($connection, $_POST['edit']);

    mysqli_query($connection, "UPDATE `admin` SET `name`='[value-2]',`email`='[value-3]',`password`='[value-4]',`role`='[value-5]' WHERE 1 `id` = '$ide'");

    $edit = mysqli_real_escape_string($connection, $_POST['edit']);