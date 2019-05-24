<?php
  session_start();
  include("header.php");
  require_once("config.php");
  require_once("utils.php");
  //require_once("User.php");
  $error='';

if (isset($_POST['submit'])){
    $login = safe_input($_POST['login']);
    $password = safe_input($_POST['password']);
    $user = User::getUserByLogin($login);

    if ($user){
        echo "Found user " . $user->getLogin();
        if ($user->checkPassword($password)){
            //echo "Password_match YES "
            $_SESSION['user_id'] = $user->getId();
            header("Location: index.php");
        } else {
            //echo "password_match NO " ;
            $error = "Password did not match, try again.";
        }
    }
    else{
        $error = "User '$login' was not found.";
    }
}


?>

<div class=container>
  <div class="jumbotron">
        <h1>Login</h1>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          <div class="form-group">
            <label for="exampleInputLogin">Login</label>
            <input type="text" name="login" class="form-control" placeholder="Enter login">
          </div>
          <div class="form-group">
            <label for="exampleInputLogin">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-primary" name="submit" value="login">Login</button>
          <?php echo ($error) ? "<span style='color:red'>$error</span>" : "" ?>
        </form>
      </div>
</div>

<?php
    include("footer.php");
?>
