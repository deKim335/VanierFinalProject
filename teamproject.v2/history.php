<?php
session_start();
require("config.php");
require("Food.php");
include("header.php");

if(!isset($_SESSION['user_id'])){
  header("Location: login_user.php");
}
?>

<?php
$user = User::getUserById($_SESSION['user_id']);
$userId = $_SESSION['user_id'];

if (isset($_POST['submit'])){
      if(isset($_POST['food_history'])){
          foreach($_POST['food_history'] as $value){
            $STH = $DBH->prepare("DELETE FROM orders WHERE order_no=$value");
            $STH->EXECUTE();
          }
      }
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <div class=container style="text-align:center;">
    <div class=container style="text-align:center;">
      <h1 style="color:white;text-transform:uppercase;"><?php echo $user->getFirstName();?>!! HERE'S YOUR ORDER HISTORY!</h1>

                    <?php
                              $STH = $DBH->query("SELECT * FROM orders where user_no=$userId");
                              # setting the fetch mode
                              $STH->setFetchMode(PDO::FETCH_ASSOC);

                              while($row = $STH->fetch()) {
                      ?>
                        <div class="col-sm-6 col-md-4 col-lg-3" style="text-align:center;">
                          <div class="thumbnail">
                              <?php
                               $food_from_db=Food::getFoodByFoodId($row['food_id']);
                               $order_no=$row['order_no'];
                               ?>
                              <input type="checkbox" name="food_history[]" value="<?php echo $order_no."  ";?>"><?php echo $food_from_db->getDay();?> - <?php echo $food_from_db->getFoodName();?>
                              <img src="<?php echo $food_from_db->getImg();?>" />
                          </div>
                        </div>
                      <?php
                              }
                      ?>


  </div>
  <input type="submit" name="submit" value="Cancellation"><?php echo "    ";?>
</div>
</form>

<?php
    include("footer.php");
?>
