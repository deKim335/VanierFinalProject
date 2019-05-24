<?php
require("config.php");

class Food {
    function __construct($food_id='',$food_name='',$day='',$img=''){
        $this->food_id = $food_id;
        $this->food_name = $food_name;
        $this->day = $day;
        $this->img = $img;
    }

    function setFoodId($food_id){
      $this->food_id = $food_id;
    }

    function getFoodId(){
      return $this->food_id;
    }

    function setFoodName($food_name){
        $this->food_name = $food_name;
    }

    function getFoodName(){
        return $this->food_name;
    }

    function setDay($day){
        $this->day = $day;
    }

    function getDay(){
        return $this->day;
    }

    function setImg($img){
        $this->img=$img;
    }

    function getImg(){
        return $this->img;
    }

    function saveFood(){
        try {
            global $DBH;
            echo "<br />OBJ";
            print_r((array)$this);

            // Insert to the database
            $stmt = $DBH->prepare('INSERT INTO foods (food_id, food_name, day, img) VALUES (:food_id, :food_name, :day, :img)');
            $stmt->execute((array)$this);

           // Alternatively, filling an associative array (still with named placeholders)
           // $stmt = $DBH->prepare('INSERT INTO Users (id, login, first_name, last_name, password_hash) VALUES (:id, :login, :first_name, :last_name, :password_hash)');
           // $stmt->execute(['id' => $this->id, 'login' => $this->login, 'first_name' => $this->first_name, 'last_name' => $this->last_name, 'password_hash' => $this->password_hash]);

           // Alternatively, using unnamed placeholders
           // $stmt = $DBH->prepare('INSERT INTO Users (id, login, first_name, last_name, password_hash) VALUES (?,?,?,?,?)');
           // $stmt->execute([$this->id,$this->login,$this->first_name,$this->last_name,$this->password_hash]);

            // After saving the user to the database, fill in the user object id
            $food_from_db = $this->getFoodByFoodName($this->food_name);
            $this->id = $food_from_db->food_id;

        } catch (PDOException $e) {
            echo "ERROR: ";
            echo $e->getMessage();
        }
    }

    public static function getFoodByFoodName($food_name){
        try {
            global $DBH;
            $stmt = $DBH->prepare("SELECT * FROM foods WHERE food_name=:food_name");
            $stmt->bindParam(':login',$food_name);
            $stmt->execute();
            // Fetch the result into a user object
            $stmt->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,"Food");
            $food = $stmt->fetch();
            // Alternative method, fetching into an associative array
            //$stmt->setFetchMode(PDO::FETCH_ASSOC);
            //$row = $stmt->fetch();
            //$user = new User($row['id'],$row['login'],$row['first_name'],$row['last_name'],$row['password_hash']);
            return $food;
        } catch (PDOException $e) {
            echo "ERROR: ";
            echo $e->getMessage();
	    return -1;
        }
    }

    public static function getFoodByFoodId($food_id){
        try {
            global $DBH;
            $stmt = $DBH->prepare('SELECT * FROM foods WHERE food_id=:food_id');
            $stmt->bindParam(':food_id',$food_id);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,"Food");
	          $food = $stmt->fetch();
	    //print_r($user);
	    //echo var_dump($user);
            return $food;
        } catch (PDOException $e) {
            echo "ERROR: ";
	    echo $e->getMessage();
	    return -1;
        }
    }

}

?>
