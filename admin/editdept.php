<?php
include('header.php');
include('../includes/class.autoload.inc.php');
include('../classes/posts.class.php');



$dept = new Deptartment();
$dept = $dept->editdept($_GET['id']);

$id = $dept['Dept_Id'];
$name = $dept['Dept_Name'];

?>


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
                        <i class="fa fa-plus-circle"></i> Modefy Department
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form role="form" action="../post.process.php?id=<?= $id; ?>" method="post">
                                    <div class="form-group">
                                        <label>Department Name</label>
                                        <input type="text" value="<?=$name?>" class="form-control" name="dept-name" />
                                    </div>
                                    <div style="float:right;">
                                        <button type="submit" name="update-dept" class="btn btn-primary">Edit Department</button>
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
        
        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
</div>
</div>

<?php
include('footer.php');
?>