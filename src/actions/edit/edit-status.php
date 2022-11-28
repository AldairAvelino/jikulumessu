<?php
include("../connection.php");

$id = mysqli_real_escape_string($connection, $_POST['id']);
$status = mysqli_real_escape_string($connection, $_POST['status']);

$edit = mysqli_real_escape_string($connection, $_POST['edit']);

mysqli_query($connection, "UPDATE `user` SET `status`='$status' WHERE `id` = '$id'");

if (isset($edit)) {
    header("location: ../../pages/principal.php?acao=fila");
}
