<?php
    include("../connection.php");

    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $bi = mysqli_real_escape_string($connection, $_POST['bi']);
    $submit = mysqli_real_escape_string($connection, $_POST['submit']);
    
    mysqli_query($connection, "INSERT INTO `user`(`name`, `bi`) VALUES ('$name','$bi')");

    if(isset($submit)){
        echo "<script language='javascript' type='text/javascript'>
            alert('Lugar reservado com sucesso! Podes consultar a qualquer momento');window.location
            .href='../../pages/auth/status-consult-user.php';</script>";
    }