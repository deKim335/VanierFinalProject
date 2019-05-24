<?php
    session_start();
    include("header.php");
  
?>

<div class="container">
  <div class="jumbotron">
    <h1 style="text-transform:uppercase;">Goodbye,

    <?php
            if(!isset($_SESSION['user_id'])){
              header("location:index.php");
            }else {
            $user = User::getUserById($_SESSION['user_id']);
            echo $user->getFirstName()." ".$user->getLastName();
            session_destroy();
            header("refresh:2;url=index.php");
          }
    ?>

    </h1>
  </div>
</div>
<?php
    include("footer.php");
?>
