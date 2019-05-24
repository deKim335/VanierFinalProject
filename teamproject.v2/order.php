<?php
    session_start();
    include("config.php");
    include("header.php");

    if(!isset($_SESSION['user_id'])){
      header("Location: login_user.php");
    }

    $user = User::getUserById($_SESSION['user_id']);
?>

<form method="post" action="report.php">
  <div class=container style="text-align:center;">
      <h1 style="color:white;text-transform:uppercase;"><?php echo $user->getFirstName();?>!! HERE'S OUR MENU!!</h1>
        <fieldset id="Mon">
                      <?php
                              $STH = $DBH->query('SELECT * FROM foods where day="Mon"');
                              # setting the fetch mode
                              $STH->setFetchMode(PDO::FETCH_ASSOC);

                              while($row = $STH->fetch()) {
                      ?>
                        <div class="col-sm-6 col-md-4 col-lg-3" style="text-align:center;">
                          <div class="thumbnail">
                              <?php echo $row['day'];?> - <?php echo $row['food_name'];?>  <input type="radio" name="<?php echo $row['day'];?>" value="<?php echo $row['food_id'];?>">
                              <img src="<?php echo $row['img'];?>" />
                          </div>
                        </div>
                      <?php
                          }
                      ?>
            </fieldset>


           <fieldset id="Tue">
                       <?php
                               $STH = $DBH->query('SELECT * FROM foods where day="Tue"');
                               # setting the fetch mode
                               $STH->setFetchMode(PDO::FETCH_ASSOC);

                               while($row = $STH->fetch()) {
                       ?>
                       <div class="col-sm-6 col-md-4 col-lg-3" style="text-align:center;">
                           <div class="thumbnail">
                               <?php echo $row['day'];?> - <?php echo $row['food_name'];?>  <input type="radio" name="<?php echo $row['day'];?>" value="<?php echo $row['food_id'];?>">
                               <img src="<?php echo $row['img'];?>" />
                           </div>
                         </div>

                       <?php
                           }
                       ?>
             </fieldset>

            <fieldset id="Wed">
                        <?php
                                $STH = $DBH->query('SELECT * FROM foods where day="Wed"');
                                # setting the fetch mode
                                $STH->setFetchMode(PDO::FETCH_ASSOC);

                                while($row = $STH->fetch()) {
                        ?>
                        <div class="col-sm-6 col-md-4 col-lg-3" style="text-align:center;">
                           <div class="thumbnail">
                                <?php echo $row['day'];?> - <?php echo $row['food_name'];?>  <input type="radio" name="<?php echo $row['day'];?>" value="<?php echo $row['food_id'];?>">
                                <img src="<?php echo $row['img'];?>" />
                            </div>
                          </div>

                        <?php
                            }
                        ?>
              </fieldset>

             <fieldset id="Thu">
                         <?php
                                 $STH = $DBH->query('SELECT * FROM foods where day="Thu"');
                                 # setting the fetch mode
                                 $STH->setFetchMode(PDO::FETCH_ASSOC);

                                 while($row = $STH->fetch()) {
                         ?>
                         <div class="col-sm-6 col-md-4 col-lg-3" style="text-align:center;">
                             <div class="thumbnail">
                                 <?php echo $row['day'];?> - <?php echo $row['food_name'];?>  <input type="radio" name="<?php echo $row['day'];?>" value="<?php echo $row['food_id'];?>">
                                 <img src="<?php echo $row['img'];?>" />
                             </div>
                           </div>

                         <?php
                             }
                         ?>
               </fieldset>

              <fieldset id="Fri">
                          <?php
                                  $STH = $DBH->query('SELECT * FROM foods where day="Fri"');
                                  # setting the fetch mode
                                  $STH->setFetchMode(PDO::FETCH_ASSOC);

                                  while($row = $STH->fetch()) {
                          ?>
                          <div class="col-sm-6 col-md-4 col-lg-3" style="text-align:center;">
                              <div class="thumbnail">
                                  <?php echo $row['day'];?> - <?php echo $row['food_name'];?>  <input type="radio" name="<?php echo $row['day'];?>" value="<?php echo $row['food_id'];?>">
                                  <img src="<?php echo $row['img'];?>" />
                              </div>
                            </div>

                          <?php
                              }
                          ?>
                </fieldset>

                <input type="submit" name="submit" value="Submit">

            </div>

</form>


  <?php
      include("footer.php");
  ?>
