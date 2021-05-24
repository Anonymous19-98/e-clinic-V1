<?php
include('classes/posts.class.php');
include('header.php');
$consulting = new Consulting();
?>
<style>
    body{
        background-image:url("assets/img/4.png"); 
        background-repeat: no-repeat;
        background-size:cover;
    }
    h1
    {
        text-align:center;
        margin:27px;
        color:#537197;
        opacity:1;
    }
</style>

<div class="container">
    <div class="text-left my-6">
        <h3></h3>
    </div>
    <div class="row">
        <div class="col-md-12 mx-auto">
            <form action="post.process.php?id=<?= $id; ?>" method="post">
                <div class="form-group">
                    <label><h4>History</h4> </label>
                    <input type="text" name="post-title" value="" class="form-control" Required>
                </div>
                <div class="form-group">
                    <label><h4>Case</h4></label>
                    <input type="text" name="post-title" value="" class="form-control" Required>
                </div>
                <div class="form-group">
                    <label><h4>Note:</h4></label>
                    <input type="text" name="post-title" value="" class="form-control" Required>
                </div>
                <div class="form-group">
                    <label><h4>Doctor:</h4></label>
                    <select class="form-control">
                        <?php $doctor = new Doctor(); ?>
                        <?php if ($doctor->getdoctors()) : ?>
                            <?php foreach ($doctor->getdoctors() as $doctor) : ?>
                                <option><?=$doctor["Dr_Name"]?></option>
                            <?php endforeach ?>
                        <?php else : ?>
                            <li>No Department</li>
                            <!-- <div class='alert alert-danger'>No Doctors </div> -->
                        <?php endif; ?>
                    </select>
                </div>
                
                
                <a href="index.php" type="button" class="btn btn-secondary">Consult</a>

            </form>
        </div>
    </div>
</div>

<?php

//require_once("footer.php");
?>