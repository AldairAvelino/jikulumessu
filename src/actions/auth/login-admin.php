<?php
include("../connection.php");

$email = mysqli_real_escape_string($connection, $_POST['email']);
$password = mysqli_real_escape_string($connection, $_POST['password']);
$login = mysqli_real_escape_string($connection, $_POST['login']);

if (isset($login)) {
    $search = mysqli_query($connection, "SELECT * FROM admin WHERE email ='$email' AND password = '$password'")
        or die("FALHA AO BUSCAR");

    if (mysqli_num_rows($search) <= 0) {
        header("Location: ../../pages/error-login.php");
        die();
    } else {
        session_start();

        while ($linha = mysqli_fetch_array($search)) {
            $_SESSION["email"] = $linha['email'];
            $_SESSION["role"] = $linha['role'];
        }

        header("Location: ../../pages/principal.php");
    }
}
