<?php
    include("../../actions/connection.php");

    echo("<link rel='stylesheet' href='../../../assets/bootstrap-4.6.2-dist/css/bootstrap.css'>");
    echo("<link rel='stylesheet' href='../../../assets/css/success-consulta.css'>");
    echo("<script src='../../../assets/bootstrap-4.6.2-dist/js/bootstrap.js'></script>");

    $consultar = mysqli_real_escape_string($connection, $_POST['consultar']);
    $bi = mysqli_real_escape_string($connection, $_POST['bi']);
    
    if(isset($bi)){
        $search = mysqli_query($connection, "SELECT `name`, `bi`, `status` FROM `user` WHERE `bi` = '$bi'")
        or die("FALHA AO CONSULTAR");

        $result = mysqli_fetch_array($search);

        if ($search && mysqli_num_rows($search) == 1) {     
            echo("
                <div class='text-center'>
                    <div class='modal-dialog modal-confirm'>
                        <div class='modal-content'>
                            <div class='modal-header'>
                                <div class='icon-box'>
                                    <i class='material-icons'>&checkmark;</i>
                                </div>				
                                <h4 class='modal-title w-100'>Resultado da Consultar</h4>	
                            </div>
                
                            <div class='modal-body'>
                                <p class='text-center'>Nome: {$result['name']}</p>
                                <p class='text-center'>Bilhete de Identidade número: {$bi}</p>
                                <p class='text-center'>Status: {$result['status']}</p>
                            </div>
                            
                            <div class='modal-footer'>
                                <a class='btn btn-block' href='../../pages/auth/status-consult-user.php'>Consultar outro número</a>
                            </div>
                        </div>
                    </div>
                </div>     
            ");

        } else {
            // falhou o login
            header("Location: ../../pages/error-reserve.php");
        }
        
    }