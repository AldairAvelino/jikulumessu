<?php
    include("../connection.php");

    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $bi = mysqli_real_escape_string($connection, $_POST['bi']);
    $cadastrar = mysqli_real_escape_string($connection, $_POST['cadastrar']);
    
    