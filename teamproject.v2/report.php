<?php
  session_start();
  include("config.php");
  include("header.php");
  if(!isset($_SESSION['user_id'])){
    header("Location: login_user.php");
  }

  $mon_order=$tue_order=$wed_order=$thu_order=$fri_order='';
  $user_no=$_SESSION['user_id'];

      if (isset($_POST['submit'])){

            if($_POST['Mon']!=''){
              $mon_order = $_POST['Mon'];
              $STH = $DBH->prepare("INSERT into orders (order_no, user_no, food_id) values (null,$user_no,'$mon_order')");
              $STH->EXECUTE();
            }

            if($_POST['Tue']!=''){
              $tue_order = $_POST['Tue'];
              $STH = $DBH->prepare("INSERT into orders (order_no, user_no, food_id) values (null,$user_no,'$tue_order')");
              $STH->EXECUTE();
            }
            if($_POST['Wed']!=''){
              $wed_order = $_POST['Wed'];
              $STH = $DBH->prepare("INSERT into orders (order_no, user_no, food_id) values (null,$user_no,'$wed_order')");
              $STH->EXECUTE();
            }
            if($_POST['Thu']!=''){
              $thu_order = $_POST['Thu'];
              $STH = $DBH->prepare("INSERT into orders (order_no, user_no, food_id) values (null,$user_no,'$thu_order')");
              $STH->EXECUTE();
            }
            if($_POST['Fri']!=''){
              $fri_order = $_POST['Fri'];
              $STH = $DBH->prepare("INSERT into orders (order_no, user_no, food_id) values (null,$user_no,'$fri_order')");
              $STH->EXECUTE();
            }
        }
?>

<div class=container>
  <h1 style="color:white; text-align:center;">Your Order has been placed!</h1>
     <?php
      $STH = $DBH->query("SELECT * FROM foods where food_id='$mon_order' or food_id='$tue_order' or food_id='$wed_order' or food_id='$thu_order' or food_id='$fri_order'");
      # setting the fetch mode
      $STH->setFetchMode(PDO::FETCH_ASSOC);

      while($row = $STH->fetch()) {
      ?>

        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="thumbnail" style="text-align:center;">
              <?php echo $row['day'];?> - <?php echo $row['food_name'];?>
              <img src="<?php echo $row['img'];?>" />
          </div>
        </div>
      <?php
          }
      ?>
</div>
<div class="container" style="text-align:center;">
  <a href="index.php"><button style="align:middle;">Go back to Homepage</button>
</div>
  <?php
      include("footer.php");
  ?>
