<?php
session_start();
include("header.php");
require("config.php");
require("utils.php");
//require("User.php");
//print_r($_POST);

if (isset($_POST['submit'])){
    $login = safe_input($_POST['login']);
    $first_name = safe_input($_POST['first_name']);
    $last_name = safe_input($_POST['last_name']);
    $password_hash = password_hash(safe_input($_POST['password']),PASSWORD_DEFAULT);
    $user = new User(NULL,$login,$first_name,$last_name,$password_hash);
    $user->saveUser();

    if ($user->getId()){
        $_SESSION['user_id'] = $user->getId();
        header("Location: index.php");
    } else {
        $error = "Error: could not create user";
    }
}



?>
<div class="container">
      <div class="jumbotron">
        <h1>Register new user</h1>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          <div class="form-group">
            <label for="exampleInputLogin">Login</label>
            <input type="text" name="login" class="form-control" placeholder="Enter login">
          </div>
          <div class="form-group">
            <label for="exampleInputFirstName">First name</label>
            <input type="text" name="first_name" class="form-control" placeholder="Enter first name">
          </div>
          <div class="form-group">
            <label for="exampleInputLastName">Last name</label>
            <input type="text" name="last_name" class="form-control" placeholder="Enter last name">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-primary" name="submit" value="register">Register</button>
        </form>
      </div>
    </div>

<?php
    include("footer.php");
?>
