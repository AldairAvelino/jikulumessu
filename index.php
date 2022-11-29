<?php include_once"src/actions/connection.php";
session_start();
 ?>
<html>

<head>
  <meta charset="utf-8">
  <title>Jikulumessu</title>
  <base target="_self">
  <meta name="description" content="A Bootstrap 4 admin dashboard theme that will get you started. The sidebar toggles off-canvas on smaller screens. This example also include large stat blocks, modal and cards. The top navbar is controlled by a separate hamburger toggle button."
  />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="google" value="notranslate">
  <!--stylesheets / link tags loaded here-->
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" />
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />
  <style type="text/css">
    body,
    html {
      height: 100%;
    }
    /* workaround modal-open padding issue */
    
    body.modal-open {
      padding-right: 0 !important;
    }
    
    #sidebar {
      padding-left: 0;
    }
    /*
 * Off Canvas at medium breakpoint
 * --------------------------------------------------
 */
    
    @media screen and (max-width: 48em) {
      .row-offcanvas {
        position: relative;
        -webkit-transition: all 0.25s ease-out;
        -moz-transition: all 0.25s ease-out;
        transition: all 0.25s ease-out;
      }
      .row-offcanvas-left .sidebar-offcanvas {
        left: -33%;
      }
      .row-offcanvas-left.active {
        left: 33%;
        margin-left: -6px;
      }
      .sidebar-offcanvas {
        position: absolute;
        top: 0;
        width: 33%;
        height: 100%;
      }
    }
    /*
 * Off Canvas wider at sm breakpoint
 * --------------------------------------------------
 */
    
    @media screen and (max-width: 34em) {
      .row-offcanvas-left .sidebar-offcanvas {
        left: -45%;
      }
      .row-offcanvas-left.active {
        left: 45%;
        margin-left: -6px;
      }
      .sidebar-offcanvas {
        width: 45%;
      }
    }
    
    .card {
      overflow: hidden;
    }
    
    .card-block .rotate {
      z-index: 8;
      float: right;
      height: 100%;
    }
    
    .card-block .rotate i {
      color: rgba(20, 20, 20, 0.15);
      position: absolute;
      left: 0;
      left: auto;
      right: -10px;
      bottom: 0;
      display: block;
      -webkit-transform: rotate(-44deg);
      -moz-transform: rotate(-44deg);
      -o-transform: rotate(-44deg);
      -ms-transform: rotate(-44deg);
      transform: rotate(-44deg);
    }
  </style>

</head>

<body>
  
  <div class="container" id="main">
    <div class="row row-offcanvas row-offcanvas-left">

      <div class="col-md-9 col-lg-10 main">
        <h1 class="jumbotron">Fila de Espera - Jikulumessu</h1>
        <?php
           
            $atendido = 0;
            $esperando = 0;
            $desistente = 0;
            
            //Quantidade de atendido
            $searchAtentido = mysqli_query($connection, "SELECT COUNT(*) as atentido FROM `user` WHERE status = 'Atendido'")
            or die("FALHA AO BUSCAR");

            while($resultAtendido = mysqli_fetch_array($searchAtentido)){
                $atendido = $resultAtendido['atentido'];
            }

            //Quantidade de esperando
            $searchEsperando = mysqli_query($connection, "SELECT COUNT(*) as esperando FROM `user` WHERE status = 'Esperando'")
            or die("FALHA AO BUSCAR");

            while($resultEsperando = mysqli_fetch_array($searchEsperando)){
                $esperando = $resultEsperando['esperando'];
            }

            //Quantidade de Desistente
            $searchDesistente = mysqli_query($connection, "SELECT COUNT(*) as desistente FROM `user` WHERE status = 'Desistiu'")
            or die("FALHA AO BUSCAR");

            while($resultDesistente = mysqli_fetch_array($searchDesistente)){
                $desistente = $resultDesistente['desistente'];
            }

                
            
        ?>
        <div class="row mb-3">
          <div class="col-xl-3 col-lg-6">
            <div class="card card-inverse card-success">
              <div class="card-block bg-success">
                <h6 class="text-uppercase">Pessoas atendidas</h6>
                <h1 class="display-1"><?php echo($atendido); ?></h1>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6">
            <div class="card card-inverse card-danger">
              <div class="card-block bg-danger">
                <h6 class="text-uppercase">Desistentes</h6>
                <h1 class="display-1"><?php echo($desistente); ?></h1>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6">
            <div class="card card-inverse card-info">
              <div class="card-block bg-info">
                <h6 class="text-uppercase">Pessoas em Espera</h6>
                <h1 class="display-1"><?php echo($esperando); ?></h1>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6">
            <div class="card card-inverse card-warning">
              <div class="card-block bg-warning">
                <h6 class="text-uppercase">Total</h6>
                <h1 class="display-1"><?php echo($esperando + $desistente + $atendido); ?></h1>
              </div>
            </div>
          </div>
        </div>
        <!--/row-->
        <div class="row mb-3"><a class="btn btn-primary btn-block" href="src/pages/auth/sign-up-user.php">Adicionar na Fila</a></div>
      </div>
      <!--/main col-->
    </div>
  </div>

  <script>
    // sandbox disable popups
    if (window.self !== window.top && window.name != "view1") {
      window.alert = function() {
        /*disable alert*/
      };
      window.confirm = function() {
        /*disable confirm*/
      };
      window.prompt = function() {
        /*disable prompt*/
      };
      window.open = function() {
        /*disable open*/
      };
    }
    
    // prevent href=# click jump
    document.addEventListener(
      "DOMContentLoaded",
      function() {
        var links = document.getElementsByTagName("A");
        for (var i = 0; i < links.length; i++) {
          if (links[i].href.indexOf("#") != -1) {
            links[i].addEventListener("click", function(e) {
              console.debug("prevent href=# click");
              if (this.hash) {
                if (this.hash == "#") {
                  e.preventDefault();
                  return false;
                } else {
                  /*
                      var el = document.getElementById(this.hash.replace(/#/, ""));
                      if (el) {
                        el.scrollIntoView(true);
                      }
                      */
                }
              }
              return false;
            });
          }
        }
      },
      false
    );
  </script>

  <!--scripts loaded here-->

  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>

  <script>
    $(document).ready(function() {
      $("[data-toggle=offcanvas]").click(function() {
        $(".row-offcanvas").toggleClass("active");
      });
    });
  </script>

</body>

</html>