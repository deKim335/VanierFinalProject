<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>

<body>
    <div class="wrapper">
        <h2>Login</h2>
        <p>Please fill in your credentials to login.</p>
        <form method="post" action="login.php">
  	    <?php include('errors.php'); ?>

  	    <div class="form-group">
  		   <label>Username</label>
  		  <input type="text" name="username" class="form-control" >
    	  </div>

  	     <div class="form-group">
  		   <label>Password</label>
  		   <input type="password" name="password" class="form-control">
  	     </div>

  	     <div class="form-group">
  		   <button type="submit" class="btn btn-primary" name="login_user">Login</button>
      	</div>
  	    <p>
  	    	Not yet a member? <a href="register.php">Sign up</a>
  	    </p>
    </form>
  </div>
</body>
</html>
