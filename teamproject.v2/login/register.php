<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
  	<h2>Register</h2>
    <p>Please fill this form to create an account.</p>

    <form method="post" action="register.php">
  	<?php include('errors.php'); ?>

    <div class="form-group">
        <label>Username</label>
        <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
        <span class="help-block"></span>
    </div>

    <div class="form-group" >
        <label>Email</label>
        <input type="email" name="email" class="form-control" value="<?php echo $email; ?>">
        <span class="help-block"></span>
    </div>

    <div class="form-group">
        <label>Password</label>
        <input type="password" name="password_1" class="form-control" value="<?php echo $password; ?>">
        <span class="help-block"></span>
    </div>

    <div class="form-group">
        <label>Confirm Password</label>
        <input type="password" name="password_2" class="form-control">
        <span class="help-block"></span>
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-primary" name="reg_user">Register</button>
  	</div>
    	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</div>
</body>
</html>
