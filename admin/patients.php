<?php
include('header.php');
include('../includes/class.autoload.inc.php');
include('../classes/posts.class.php');

?>
<!-- /. NAV SIDE  -->
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <?php $patient = new Patient(); ?>
            <?php if ($patient->getPatient()) : ?>
                <?php foreach ($patient->getPatient() as $patient) : ?>
                    <div class="col-md-12">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-users"></i> Patients
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="odd gradeX">
                                                <td><?= $patient["Pa_Name"]; ?></td>
                                                <td><?= $patient["Pa_Email"]; ?></td>
                                                <td><?= $patient["Pa_Phone"]; ?></td>
                                                <td><a href="../post.process.php?id=<?= $patient['Pa_Id']; ?>?&action=del-Patient" class="btn btn-danger">Delete</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                <?php else : ?>
                    <div class='alert alert-danger'>No Patients </div>
                <?php endif; ?>
                <!--End Advanced Tables -->
                    </div>
                    <!-- /. ROW  -->
                    </div>
    <!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->

        

<?php
include('footer.php');
?>