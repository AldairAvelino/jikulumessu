<header>
        <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="ml-auto collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="?acao=user">Usuario</a>
                    </li>
                    
                   <?php 
                   session_start();

                   if($_SESSION){
                         if($_SESSION["role"] == 'Administrator'){ ?>
                    <li class="nav-item">
                        <a class="nav-link" href="?acao=fila">Lista/Fila</a>
                    </li>
                   <?php } }else{
                    header("Location: ../auth/login-admin.php");
                   } ?>
                   <li class="nav-item">
                        <a class="nav-link" href="../actions/sair.php">Sair</a>
                    </li>
                    
                </ul>
            </div>
        </nav>
    </header>

   