<!doctype html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../assets/css/images.css">
    <link rel="stylesheet" href="../../../assets/css/login-and-sing-up.css">
    <link rel="stylesheet" href="../../../assets/bootstrap-4.6.2-dist/css/bootstrap.css">
    <script src="../../../assets/bootstrap-4.6.2-dist/js/bootstrap.js"></script>
    <title>DASHBOARD | List</title>
</head>

<body class="text-center">
    <header>
        <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="ml-auto collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../../pages/auth/sign-up-admin.php">Administrator</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="../../pages/auth/sign-up-user.php">Normal User</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <table class='table table-sm'>
        <thead>
            <tr>
                <th scope='col'>ID</th>
                <th scope='col'>Name</th>
                <th scope='col'>B.I.</th>
                <th scope='col'>Status</th>
                <th scope='col'>Created At</th>
                <th scope='col'>Edit</th>
            </tr>
        </thead>


        <tbody>
            <?php
            include("../../actions/connection.php");
            $search = mysqli_query($connection, "SELECT * FROM user");

            while ($result = mysqli_fetch_array($search)) {
            ?>
                <tr>
                    <?php if($result['status'] == 'Esperando'){ ?>
                    <th scope="row"><?php echo ($result['id']); ?></th>
                    <td><?php echo ($result['name']); ?></td>
                    <td><?php echo ($result['bi']); ?></td>
                    <td><?php echo ($result['status']); ?></td>
                    <td><?php echo ($result['created_at']); ?></td>
                    <td>
                        <button type="button" class="btn btn-primary pad m-1" data-toggle="modal" data-target="<?php echo ('#modalGestor' . $result['id']); ?>" data-whatever="@mdo">
                            Edit
                        </button>
                    </td>
                    <?php } ?>
                </tr>

                <div class="modal fade" id="<?php echo ('modalGestor' . $result['id']); ?>" tabindex="-1" role="dialog" aria-labelledby="modalGestorLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalGestorLabel">Editar status de um usuário</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="../../actions/edit/edit-status.php" method="POST">
                                    <div class="form-group">
                                        <input type="hidden" name="id" id="inputid" class="form-control" placeholder="" value="<?php echo ($result['id']); ?>" required autofocus>
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-3 select">
                                            <select name="status" id="format">
                                                <!-- <option selected disabled><?php echo ($result['status']); ?></option> -->
                                                <option value="Esperando" <?php if ($result['status'] == 'Esperando') {
                                                                                    echo ('selected');
                                                                                } ?> >Esperando</option>
                                                <option value="Desistiu" <?php if ($result['status'] == 'Desistiu') {
                                                                                echo ('selected');
                                                                            } ?> >Desistiu</option>
                                                <option value="Atendido" <?php if ($result['status'] == 'Atendido') {
                                                                                echo ('selected');
                                                                            } ?> >Atendido</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-secondary" data-dismiss="modal">Exit</button>
                                        <button type="submit" class="btn btn-primary" name="edit">Editar Dados</button>
                                    </div>
                        </div>
                                </form>
                            </div>
                            
                    </div>
                </div>
        </tbody>
    <?php } ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>


</body>

</html>