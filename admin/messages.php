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
                <h2><i class="fa fa-envelope"></i> Messages</h2>
                <div class="row">
    <?php $messages = new ContactUs(); ?>
    <?php if ($messages->getmessages()) : ?>
        <?php foreach ($messages->getmessages() as $message) : ?>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title"><?= $message['Name']; ?></h3>
                        <p class="card-text"><?= $message['Message']; ?></p>
                        <h3 class="card-subtitle text-muted text-right">Email: <?= $message['Email']; ?></h3>

                        <a href="../post.process.php?id=<?=$message['Id'];?>?&action=del-Message" class="btn btn-danger">Delete</a>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    <?php else : ?>
        <div class='alert alert-danger'>No Messages </div>
    <?php endif; ?>
</div>
            </div>
        </div>
    </div>
    <!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->



<?php
include('footer.php');
?>

