<?php require_once 'controllers/authController.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<!-- BOOTSTRAP 4 CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="main.css">

	<title>Register</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-3.2 offset-md-3 form-wrapper">
			<form action="signup.php" method="post">
				<h3 class="text-center">Register</h3>

				<?php if (count($errors) > 0 ):?>
					<div class="alert alert-danger">
						<?php foreach ($errors as $error): ?>
							<li><?php echo $error; ?></li>
						<?php endforeach; ?>
					</div>
				<?php endif; ?>

				<div class="form-group">
					<label for= "username">Username</label><p></p>
					<input type="text" name="username" value="<?php echo $username; ?>" class="from-control form-control-lg">
				</div>

				<div class="form-group">
					<label for= "email">Email </label><p></p>
					<input type="email" name="email" value="<?php echo $email; ?>" class="from-control form-control-lg">
				</div>

				<div class="form-group">
					<label for= "password">Password</label><p></p>
					<input type="password" name="password" class="from-control form-control-lg">
				</div>

				<div class="form-group">
					<label for= "passwordConf">Confirm pssword</label><p></p>
					<input type="password" name="passwordConf" class="from-control form-control-lg">
				</div>
				<div class="form-group">
					<button type="submit" name="signup-btn" class="btn btn-primary btn-block btn-lg">SIGN UP</button>
				</div>
				<P class="text-center">Already member? <a href="login.php">sign in</a></P>
		
			</form>
				
			</div>
		</div>
	</div>


</body>
</html>>
