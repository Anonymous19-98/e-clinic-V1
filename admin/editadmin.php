<?php
include('header.php');
include('../includes/class.autoload.inc.php');
include('../classes/posts.class.php');


$admin = new Admin();
$admin = $admin->editadmin($_GET['id']);

$id = $admin['User_Id'];
$name = $admin['Name'];
$username = $admin['Username'];
$email = $admin['Email'];
$PWD = $admin['Password'];
?>

<!-- /. NAV SIDE  -->
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2><i class="fa fa-users"></i> Modify Users</h2>


            </div>
        </div>
        <!-- /. ROW  -->
        <hr />
        <div class="row">
            <div class="col-md-8">
                <!-- Form Elements -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-plus-circle"></i> Edit Admin
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form role="form" action="../post.process.php?id=<?= $id; ?>" method="post">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="admin-name" value="<?= $name; ?>" class="form-control" required />
                                    </div>
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" name="admin-username" value="<?= $username; ?>" class="form-control" required />
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="admin-email" class="form-control" value="<?= $email; ?>" required />
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="admin-PWD" class="form-control" value="<?= $PWD; ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Confirm Password</label>
                                        <input type="password" name="admin-co-PWD" class="form-control" value="<?= $PWD; ?> " required>
                                    </div>
                                    <div class="form-group">
                                        <label>User Type</label>
                                        <select class="form-control">
                                            <option>Administrator</option>
                                            <option>User</option>
                                        </select>
                                    </div>
                                    <div style="float:right;">
                                        <button type="submit" name="update-admin" class="btn btn-primary">Update Admin</button>
                                        <button type="reset" class="btn btn-danger">Cancel</button>
                                    </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>