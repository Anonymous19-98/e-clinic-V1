<?php
include('header.php');
include('../includes/class.autoload.inc.php');
include('../classes/posts.class.php');


session_start();
?>

<!-- /. NAV SIDE  -->
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2><i class="fa fa-dashboard "></i> Dashboard</h2>

            </div>
        </div>
        <!-- /. ROW  -->
        <hr />
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-6">
                <div class="panel panel-back noti-box">
                    <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-users"></i>
                    </span>
                    <div class="text-box">
                        <p class="main-text">

                            <?php $admin = new Admin(); ?>
                            <?php $admin->numberofadmin() ?>

                            Admins</p>
                        <br>
                        <br>
                    </div>
                    <a href="admins.php">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6">
                <div class="panel panel-back noti-box">
                    <span class="icon-box bg-color-green set-icon">
                        <i class="fa fa-stethoscope"></i>
                    </span>
                    <div class="text-box">
                        <p class="main-text">


                            <?php $account = new Doctor(); ?>
                            <?php $account->NumberOfDoctors() ?>


                            Doctors</p>
                        <br>
                        <br>

                    </div>
                    <a href="doctors.php">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6">
                <div class="panel panel-back noti-box">
                    <span class="icon-box bg-color-red set-icon">
                        <i class="fa fa-users"></i>
                    </span>
                    <div class="text-box">
                        <p class="main-text">

                            <?php $patient = new Patient(); ?>
                            <?php $patient->NumberOfPatients() ?>

                            Patients</p>
                        <br>
                        <br>
                    </div>
                    <a href="patients.php">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6">
                <div class="panel panel-back noti-box">
                    <span class="icon-box bg-color-blue set-icon">
                        <i class="fa fa-hospital-o"></i>
                    </span>
                    <div class="text-box">
                        <p class="main-text">


                            Consultings</p>
                        <br>
                        <br>
                    </div>
                    <a href="requests.php">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6">
                <div class="panel panel-back noti-box">
                    <span class="icon-box bg-color-blue set-icon">
                        <i class="glyphicon glyphicon-list"></i>
                    </span>
                    <div class="text-box">
                        <p class="main-text">


                            <?php $dept = new Deptartment(); ?>
                            <?php $dept->NumberOfDepts() ?>


                            Departments</p>
                        <br>
                        <br>

                    </div>
                    <a href="departments.php">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6">
                <div class="panel panel-back noti-box">
                    <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-envelope"></i>
                    </span>
                    <div class="text-box">
                        <p class="main-text">

                            <?php $message = new ContactUs(); ?>
                            <?php $message->numberofmessages() ?>

                            Messages</p>
                        <br>
                        <br>
                    </div>
                    <a href="messages.php">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>

        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
</div>
<?php
include('footer.php');
?>