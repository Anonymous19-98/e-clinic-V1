<?php
include('header.php');
include('../includes/class.autoload.inc.php');
include('../classes/posts.class.php');


$doctor = new Doctor();
$doctor = $doctor->editdoctor($_GET['id']);

$id = $doctor['Dr_Id'];
$name = $doctor['Dr_Name'];
$age = $doctor['Dr_Age'];
$phone = $doctor['Dr_Phone'];
$email = $doctor['Dr_Email'];
$addrees = $doctor['Dr_Address'];
$username = $doctor['Username'];
$password = $doctor['Password'];
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
                        <i class="fa fa-plus-circle"></i> Modefy Doctor
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form role="form" action="../post.process.php?id=<?= $id; ?>" method="post">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="dr-name" value="<?= $name ?>" class="form-control" required />
                                    </div>
                                    <div class="form-group">
                                        <label>Date of Birth</label>
                                        <input type="date" name="dr-age" value="<?= $age ?>" class="form-control" required />
                                    </div>
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="tel" name="dr-phone" class="form-control" value="<?= $phone ?>" required />
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="dr-email" class="form-control" value="<?= $email ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Addresss</label>
                                        <input type="text" name="dr-address" class="form-control" value="<?= $addrees ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" name="Username" class="form-control" value="<?= $username ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="Password" class="form-control" value="<?= $password ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Deptartments</label>
                                        <select class="form-control">
                                            <?php $dept = new Deptartment(); ?>
                                            <?php if ($dept->getdept()) : ?>
                                                <?php foreach ($dept->getdeptname() as $dept) : ?>
                                                    <option><?= $dept["Dept_Name"] ?></option>

                                                <?php endforeach ?>
                                            <?php else : ?>
                                                <option>No Doctor</option>
                                                <div class='alert alert-danger'>No Doctors </div>
                                            <?php endif; ?>
                                        </select>
                                    </div>
                                    <div style="float:right;">
                                        <button type="submit" name="update-dr" class="btn btn-primary">Edit Doctor</button>
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
<?php
include("footer.php");
?>