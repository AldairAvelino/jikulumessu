
    <table class='table table-sm'>
        <thead>
            <tr>
                <th scope='col'>id</th>
                <th scope='col'>Name</th>
                <th scope='col'>B.I.</th>
                <th scope='col'>Status</th>
                <th scope='col'>Created at</th>
                <th scope='col'>Option</th>
            </tr>
        </thead>

    <?php
        include("../actions/connection.php");
        $search = mysqli_query($connection, "SELECT * FROM user order by status asc");

        while($result = mysqli_fetch_array($search)){
            ?>

            <tbody>
                <tr>
                    <th scope="row"><?php echo($result['id']); ?></th>
                    <td><?php echo($result['name']); ?></td>
                    <td><?php echo($result['bi']); ?></td>
                    <td><?php echo($result['status']); ?></td>
                    <td><?php echo($result['created_at']); ?></td>
                    <td>
                    <?php if($result['status']=='Esperando'){ ?>
                        <button type="button" class="btn btn-primary pad m-1" data-toggle="modal" data-target="<?php echo ('#modalGestor' . $result['id']); ?>" data-whatever="@mdo">
                            Edit
                        </button>
                        <?php } ?>
                    </td>
                </tr> <div class="modal fade" id="<?php echo ('modalGestor' . $result['id']); ?>" tabindex="-1" role="dialog" aria-labelledby="modalGestorLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalGestorLabel">Editar status de um usuário</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="../actions/edit/edit-status.php" method="POST">
                                    <div class="form-group">
                                        <input type="hidden" name="id" id="inputid" class="form-control" placeholder="" value="<?php echo ($result['id']); ?>" required autofocus>
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-3 select">
                                            <select name="status" id="format">
                                                <!-- <option selected disabled><?php echo ($result['status']); ?></option> -->
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