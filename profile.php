<?php include("header.php");


if (isset($_GET['action'], $_GET['id'])) {

  $id = $_GET['id'];
  $con = new Dbh();
  $stm = $con->connect()->prepare("SELECT * FROM patients where Pa_Id = ?");
  $stm->execute(array($id));
  if ($stm->rowCount()) {
    
    foreach ($stm->fetchAll() as $patient) {
      $id = $patient["Pa_Id"];
      $name = $patient["Pa_Name"];
      $address = $patient["Pa_Address"];
      $phone = $patient["Pa_Phone"];
      $email = $patient["Pa_Email"];
      $password = $patient["Password"];
      $username = $patient["Username"];
    }
  }

?>
  <style>
    body {
      background-image: url("assets/img/3.png");
      background-repeat: no-repeat;
      background-size: cover;
    }

    h1 {
      text-align: center;
      margin: 27px;
      color: #537197;
      opacity: 1;
    }
  </style>

  <body>
    <div class="container-fluid">
      <div class="container">
        <div class="row">
          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 signup_section">
            <form class="needs-validation" action="post.process.php" method="post">
              <h1>Edit Profile</h1>
              <div class="form-row">
                <input type="text" class="form-control " name="patient-name" value="<?= $name; ?>" placeholder="Name" required>
                <input type="hidden" class="form-control " name="patient-id" value="<?= $id; ?>" placeholder="Name" required>
              </div>
              <div class="form-row">
                <input type="text" class="form-control" name="patient-username" value="<?= $username ?>" placeholder="Username" required>
              </div>
              <div class="form-row">
                <input type="text" class="form-control" name="patient-phone" value="<?= $phone ?>" placeholder="Phone" required>
              </div>
              <div class="form-row">
                <input type="email" class="form-control" name="patient-email" value="<?= $email ?>" placeholder="Email" required>
              </div>
              <div class="form-row">
                <input type="text" class="form-control" name="patient-address" value="<?= $address ?>" placeholder="Address" required>
              </div>
              <div class="form-row">
                <input type="password" class="form-control" name="patient-password" value="<?= $password ?>" placeholder="Password" required>
              </div>
              <div class="form-row">
                <input type="password" class="form-control" name="patient-co-password" placeholder="Re-Password" required>
              </div>
              <button type="submit" name="update-patient" class="btn btn-primary">Edit Profile</button>
            </form>
          </div>
        </div>
      </div>
    <?php
  }
    ?>
  </body>