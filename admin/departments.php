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
                <h2><i class="fa fa-tasks"></i> Departments</h2>
            </div>
        </div>
        <!-- /. ROW  -->
        <hr />
        <div class="row">
            <div class="col-md-8">
                <!-- Form Elements -->

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-plus-circle"></i> Add New Department
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form role="form" action="../post.process.php" method="post">
                                    <div class="form-group">
                                        <label>Department Name</label>
                                        <input type="text" placeholder="Please Enter Department Name " class="form-control" name="dept-name" />
                                    </div>
                                    <div style="float:right;">
                                        <button type="submit" name="submit-dept" class="btn btn-primary">Add Department</button>
                                        <button type="reset" class="btn btn-danger">Cancel</button>
                                    </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr />
        <div class="row">
            <?php $Dept = new Deptartment(); ?>
            <?php if ($Dept->getdept()) : ?>
                <?php foreach ($Dept->getdept() as $dept) : ?>
                    <div class="col-md-12">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-tasks"></i> Departments
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover " id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="odd gradeX">
                                                <td><?= $dept['Dept_Name'] ?></td>
                                                <td>
                                                    <a href="editdept.php?id=<?=$dept['Dept_Id']?>" class='btn btn-success'>Edit</a>
                                                    <a href="../post.process.php?id=<?=$dept['Dept_Id'];?>?&action=del-dept" class='btn btn-danger'>Delete</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                <?php else : ?>
                    <div class='alert alert-danger'>No Department </div>
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