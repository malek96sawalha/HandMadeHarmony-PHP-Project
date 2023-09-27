<?php include('inc/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    User Lists
                    <a href="users-create.php" class="btn btn-secondary float-end">Add Users</a>
                </h4>
            </div>
            <div class="card-body">
                <?= alertMessage(); ?>
                <div class="table-responsive">
                    <table class="table table-borderd table-striped align-middle text-center">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Role</th>
                                <th>Is Ban</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $users = getAll('users');
                                if(mysqli_num_rows($users) > 0) {
                                    foreach($users as $userItem) {
                                        ?>
                                        <tr>
                                            <td><?= $userItem['user_id'] ?></td>
                                            <td><?= $userItem['username'] ?></td>
                                            <td><?= $userItem['user_email'] ?></td>
                                            <td><?= $userItem['user_phone'] ?></td>
                                            <td><?= $userItem['role'] ?></td>
                                            <td><?= $userItem['is_ban'] == 1 ? 'Banned':'Active';?></td>
                                            <td>
                                                <a href="users-edit.php?user_id=<?= $userItem['user_id'] ?>" class="btn btn-success btn-sm">Edit</a>
                                                <a href="users-delete.php?user_id=<?= $userItem['user_id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this data?')">Delete</a>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                } else {
                                    ?>
                                    <tr>
                                        <td colspan="7">No Record Found</td>
                                    </tr>
                                    <?php 
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('inc/footer.php'); ?>
