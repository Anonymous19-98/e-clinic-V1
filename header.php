<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <nav>
        <div>E-Clinic</div>
        <ul>
            <li class="item"><a href="home.php">Home</a></li>
            <li class="item"><a href="signin.php">sign in</a></li>
            <li class="item"><a href="login.php">log in</a></li>


            <li class="item"><a href="department.php">Departments</a>
                <ul>
                    <?php include_once('classes/posts.class.php'); ?>
                    <?php $dept = new Deptartment(); ?>
                    <?php if ($dept->getdept()) : ?>
                        <?php foreach ($dept->getdeptname() as $dept) : ?>
                            <li class="ci"><a href="#"><?= $dept["Dept_Name"] ?></a></li>

                        <?php endforeach ?>
                    <?php else : ?>
                        <li>No Department</li>
                        <!-- <div class='alert alert-danger'>No Doctors </div> -->
                    <?php endif; ?>

                    <!-- <li class="ci"><a href="#">Video </a>
                        <ul>

                            <li class="ci"><a href="#">Video </a></li>
                            <li class="ci"><a href="#">Video </a></li>
                            <li class="ci"><a href="#">Video </a></li>

                        </ul>

                    </li> -->

                </ul>
            </li>

            <li class="item"><a href="contactus.php">contuct us</a></li>
            <?php
            if (isset($_SESSION["username-patient"])) {
            ?>
                <li class="item"><a href="consultings.php">Consulting</a></li>
                <li class="item"><a href="profile.php?action=update-profile&&id=<?= $_SESSION['username-patient']['id'] ?>">Profile</a></li>
                <li class="item"><a href="logout.php">log out</a></li>
            <?php
            }
            ?>
        </ul>
    </nav>