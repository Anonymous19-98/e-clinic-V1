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
                <h2><i class="fa fa-stethoscope"></i> Doctors</h2>


            </div>
        </div>
        <!-- /. ROW  -->
        <hr />
        <div class="row">
            <div class="col-md-8">
                <!-- Form Elements -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-plus-circle"></i> Add New Doctor
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form role="form" action="../post.process.php" method="post">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="dr-name" placeholder="Please Enter your Name " class="form-control" required />
                                    </div>
                                    <div class="form-group">
                                        <label>Date of Birth</label>
                                        <input type="date" name="dr-age" placeholder="Please Enter your Name " class="form-control" required />
                                    </div>
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="tel" name="dr-phone" class="form-control" placeholder="PLease Enter Phone" required />
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="dr-email" class="form-control" placeholder="Please Enter Email" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Addresss</label>
                                        <input type="text" name="dr-address" class="form-control" placeholder="Please Enter Address" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" name="Username" class="form-control" placeholder="Please Enter Username" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="Password" class="form-control" placeholder="Please Enter Password" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Re-Password</label>
                                        <input type="password" name="co-Password" class="form-control" placeholder="Please Re-Enter Password" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Deptartments</label>
                                        <select class="form-control">
                                            <?php $dept = new Deptartment(); ?>
                                            <?php if ($dept->getdept()) : ?>
                                                <?php foreach ($dept->getdeptname() as $dept) : ?>
                                                    <option><?=$dept["Dept_Name"]?></option>
                                                   
                                                <?php endforeach ?>
                                            <?php else : ?>
                                                <option>No Doctor</option>
                                                <div class='alert alert-danger'>No Doctors </div>
                                            <?php endif; ?>
                                        </select>
                                    </div>
                                    <div style="float:right;">
                                        <button type="submit" name="submit-dr" class="btn btn-primary">Add Doctor</button>
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
            <?php $doctors = new doctor(); ?>
            <?php if ($doctors->getdoctors()) : ?>
                <?php foreach ($doctors->getdoctors() as $doctor) : ?>
                    <div class="col-md-12">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-users"></i> Doctors
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <!-- <th>Role</th> -->
                                                <th>action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="odd gradeX">
                                                <td><?= $doctor["Dr_Name"]; ?></td>
                                                <td><?= $doctor["Dr_Phone"]; ?></td>
                                                <td><?= $doctor["Dr_Email"]; ?></td>
                                                <!-- <td class="center">4</td> -->

                                                <td>
                                                    <a href="editdoctor.php?id=<?= $doctor['Dr_Id']; ?>" class="btn btn-success">Edit</a>
                                                    <a href="../post.process.php?id=<?= $doctor['Dr_Id']; ?>&action=del-dr" class="btn btn-danger">Delete</a>

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
                    <div class='alert alert-danger'>No Doctors </div>
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