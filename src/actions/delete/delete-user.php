<?php
    include("../connection.php");
    //função apagar dados da lista
    $delete = mysqli_real_escape_string($connection, $_POST['delete']);
    if(isset($_POST['delete'])){
        $id = $_POST['id'];
        
        $request = mysqli_query($connection, "DELETE FROM user WHERE `id` = '$id'");

        if($request){
            echo "<script>alert('Dado Eliminado com sucesso! 🚀');</script>";
            header("location: ../../pages/list/user-list.php");
        }else{
            echo "<script>alert('Erro ao eliminar dado. 😅');</script>";
            header("location: ../../pages/list/user-list.php");
        }
    }