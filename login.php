<!DOCTYPE html>
<?php require_once 'controllers/authController.php'; ?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <!-- BOOTSTRAP 4 CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="main.css">
</head>
<body>

  <div class="container">
    <div class="row">
      <div class="col-md-4 offset-md-4 form-wrapper auth login">
        <form action="login.php" method="post">
          <h3 class="text-center">Login</h3>

          <?php if (count($errors) > 0 ):?>
            <div class="alert alert-danger">
              <?php foreach ($errors as $error): ?> 
                <li><?php echo $error; ?></li>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>
          <div class="form-group">
            <label for ="username">Username or Email</label>
            <input type="text" name="username" value="<?php  echo $username;?>" class="form-control form-control-lg" >
          </div>
          <div class="form-group">
            <label for ="Password"> password </label>
            <input type="password" name="password" class="form-control form-control-lg">
          </div>
          <div class="form-group">
            <button type="submit" name="login-btn" class="btn btn-lg btn-block">Login</button>
          </div>
          <p>Not yet a member? <a href="signup.php">Sign Up</a></p>
        </form>
      </div>
    </div>
  </div>
</body>
</html> 