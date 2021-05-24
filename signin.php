<?php include("header.php") ?>
<?php


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
          <form class="needs-validation"  action="post.process.php" method="post">
            <h1>SIGN UP</h1>
            <div class="form-row">
              <input type="text" class="form-control " name="patient-name" placeholder="Name" required>
            </div>
            <div class="form-row">
              <input type="text" class="form-control" name="patient-username" placeholder="Username" required>
            </div>
            <div class="form-row">
              <input type="text" class="form-control" name="patient-phone" placeholder="Phone" required>
            </div>
            <div class="form-row">
              <input type="email" class="form-control" name="patient-email" placeholder="Email" required>
            </div>
            <div class="form-row">
              <input type="text" class="form-control" name="patient-address" placeholder="Address" required>
            </div>
            <div class="form-row">
              <input type="password" class="form-control" name="patient-password" placeholder="Password" required>
            </div>
            <div class="form-row">
              <input type="password" class="form-control" name="patient-co-password" placeholder="Re-Password" required>
            </div>
            <button type="submit" name="submit-patient"class="btn btn-primary">SIGN UP</button>

          </form>
        </div>
      </div>
    </div>
</body>