<?php
include('header.php');
include('../includes/class.autoload.inc.php');
include('../classes/posts.class.php');

?>
<!-- /. NAV SIDE  -->
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2><i class="fa fa-users"></i> Users</h2>

            </div>
        </div>
        <!-- /. ROW  -->
        <hr />
        <div class="row">
            <div class="col-md-8">
                <!-- Form Elements -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-plus-circle"></i> Add New User
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form role="form" action="../post.process.php" method="post">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="admin-name" placeholder="Please Enter your Name " class="form-control" required />
                                    </div>
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" name="admin-username" placeholder="Please Enter your Name " class="form-control" required />
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="admin-email" class="form-control" placeholder="PLease Enter Eamil" required />
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="admin-PWD" class="form-control" placeholder="Please Enter password" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Confirm Password</label>
                                        <input type="password" name="admin-co-PWD" class="form-control" placeholder="Please Enter confirm password" required>
                                    </div>
                                    <div class="form-group">
                                        <label>User Type</label>
                                        <select class="form-control">
                                            <option>Administrator</option>
                                            <option>User</option>
                                        </select>
                                    </div>
                                    <div style="float:right;">
                                        <button type="submit" name="submit-admin" class="btn btn-primary">Add Admin</button>
                                        <button type="reset" class="btn btn-danger">Cancel</button>
                                    </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <?php $admin = new Admin(); ?>
            <?php if ($admin->getadmin()) : ?>
                <?php foreach ($admin->getadmin() as $admin) : ?>
                    <div class="col-md-12">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-users"></i> Admins
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Username</th>
                                                <!-- <th>Role</th> -->
                                                <th>action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="odd gradeX">
                                                <td><?= $admin["Name"]; ?></td>
                                                <td><?= $admin["Email"]; ?></td>
                                                <td><?= $admin["Username"]; ?></td>
                                                <!-- <td class="center">4</td> -->

                                                <td>
                                                    <a href="editadmin.php?id=<?= $admin['User_Id']; ?>" class="btn btn-success">Edit</a>
                                                    <a href="../post.process.php?id=<?= $admin['User_Id']; ?>?&action=del-admin" class="btn btn-danger">Delete</a>

                                                    </form>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                <?php else : ?>
                    <div class='alert alert-danger'>No Admin </div>
                <?php endif; ?>
                <!--End Advanced Tables -->
                    </div>
                    <!-- /. ROW  -->
        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
</div>
</div>

<?php
include('footer.php');
?>