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
    <title>Listagens | ADMIN</title>
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
                <th scope='col'>id</th>
                <th scope='col'>Name</th>
                <th scope='col'>E-mail.</th>
                <th scope='col'>Role</th>
                <th scope='col'>Created At</th>
                <th scope='col'>Edit</th>
                <th scope='col'>Delete</th>
            </tr>
        </thead>


        <tbody>
            <?php
            include("../../actions/connection.php");
            $search = mysqli_query($connection, "SELECT * FROM admin");

            while ($result = mysqli_fetch_array($search)) {
            ?>
                <tr>
                    <th scope="row"><?php echo ($result['id']); ?></th>
                    <td><?php echo ($result['name']); ?></td>
                    <td><?php echo ($result['email']); ?></td>
                    <td><?php echo ($result['role']); ?></td>
                    <td><?php echo ($result['created_at']); ?></td>
                    <td>
                        <button type="button" class="btn btn-primary pad m-1" data-toggle="modal" data-target="<?php echo ('#modalGestor' . $result['id']); ?>" data-whatever="@mdo">
                            Edit
                        </button>
                    </td>
                    <td>
                        <form action='../../actions/delete/delete-admin.php' method='POST'>
                            <input type="hidden" name="id" value="<?php echo ($result['id']); ?>">
                            <button type='submit' class='btn btn-danger pad m-1' name='delete' value="DELETE">Delete</button>
                        </form>
                    </td>
                </tr>

                <div class="modal fade" id="<?php echo ('modalGestor' . $result['id']); ?>" tabindex="-1" role="dialog" aria-labelledby="modalGestorLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalGestorLabel">Editar dados de um Gestor</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="../../actions/edit/edit-admin.php" method="POST">
                                    <div class="form-group">
                                        <label for="inputEmail" class="sr-only">Nome do Usuário</label>
                                        <input type="hidden" name="id" id="inputid" class="form-control" placeholder="" value="<?php echo ($result['id']); ?>" required autofocus>
                                        <input type="text" name="name" id="inputEmail" class="form-control" placeholder="Nome do Usuário" value="<?php echo ($result['name']); ?>" required autofocus>
                                        <label for="inputEmail" class="sr-only">Endereço de Email</label>
                                        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Endereço de Email" value="<?php echo ($result['email']); ?>" required>
                                        <label for="inputPassword" class="sr-only">Palavra passe</label>
                                        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Palavra passe" value="<?php echo ($result['password']); ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-3 select">
                                            <select name="role" id="format">
                                                <!-- <option selected disabled><?php echo ($result['role']); ?></option> -->
                                                <option value="Administrator" <?php if ($result['role'] == 'Administrator') {
                                                                                    echo ('selected');
                                                                                } ?> >Administrator</option>
                                                <option value="Moderator" <?php if ($result['role'] == 'Moderator') {
                                                                                echo ('selected');
                                                                            } ?> >Moderator</option>
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