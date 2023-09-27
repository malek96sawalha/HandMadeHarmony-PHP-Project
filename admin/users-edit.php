<?php include('inc/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    Edit User
                    <a href="users.php" class="btn btn-danger float-end">Back</a>
                </h4>
            </div>
            <div class="card-body">

                <?= alertMessage(); ?>

                <form action="user-code.php" method="POST">

                    <?php 
                        $paramResult = chechParamId('user_id');
                        if(!is_numeric($paramResult)) {
                            echo '<h5>'.$paramResult.'</h5>';
                            return false;
                        }

                        $user = getById('users', chechParamId('user_id'), 'user_id');
                        if($user['status'] == 200) {

                            ?>

                            <input type="hidden" name="userId" value="<?= $user['data']['user_id'] ;?>" required>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label>Name</label>
                                        <input type="text" name="name" value="<?= $user['data']['username'] ;?>" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label>Phone No.</label>
                                        <input type="text" name="phone" value="<?= $user['data']['user_phone'] ;?>" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label>Email</label>
                                        <input type="email" name="email" value="<?= $user['data']['user_email'] ;?>" class="form-control" required>                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control" required>
                                        <?=validationREGEX();?>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label>Select Role</label>
                                        <select name="role" class="form-select" required>
                                            <option value="">Select Role</option>
                                            <option value="admin" <?= $user['data']['role'] == 'admin' ? 'selected' : '' ; ?> >Admin</option>
                                            <option value="user" <?= $user['data']['role'] == 'user' ? 'selected' : '' ; ?> >User</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label>Ban this user?</label><br>
                                        <input type="checkbox" name="is_ban" <?= $user['data']['is_ban'] == true ? 'checked' : '' ; ?> style="width: 30px; height:30px;">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 text-end">
                                        <br>
                                        <button type="submit" name="updateUser" class="btn btn-secondary">Update</button>
                                    </div>
                                </div>
                            </div>

                            <?php
                        } else {
                            echo '<h5>'.$user['message'].'</h5>';
                        }
                    ?>

                </form>
            </div>
        </div>
    </div>
</div>

<?php include('inc/footer.php'); ?>