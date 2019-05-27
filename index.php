<?php 
require_once 'controllers/authController.php';
if (!isset($_SESSION['id'])){
  header('location:login.php');
  exit();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <!-- BOOTSTRAP 4 CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

  <link rel="stylesheet" href="style.css">

  <title>Homepage</title>
</head>

<body>

  <div class="container">
    <div class="row">
      <div class="col-md-4 offset-md-4 form-div login">

        <div class ="alert <?php echo $_SESSION['alert-class'];?>">
        <?php if(isset($_SESSION['message'])): ?>
          <div class "alert <?php echo $_SESSION['alert-class'];?>">
            <?php
              echo $_SESSION['message'];
              unset($_SESSION['message']);
              unset($_SESSION['alert-class']);
            ?>
        </div>
      <?php endif;?>

        <h3>welcome ,<?php echo $_SESSION['username'];?></h3>

        <a href="index.php?logout=1" class="logout">logout</a>

        <?php if(!$_SESSION['verified']):?>
          <div class="alert alert-warning">
            you need to verify your account.
            sign in to your Email account and click on the
            verifition link we just emailed you at
            <strong><?php echo $_SESSION['email'];?> </strong>
          </div>
        <?php endif;?>
        <?php if ($_SESSION['verified']):?>
          <button class="btn btn-block btn-lg btn-primary"> I am verified!</button>
        <?php endif;?>


      </div>
    </div>
  </div>


</body>
</html>>