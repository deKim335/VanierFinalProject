<?php
require("config.php");

class User {
    function __construct($id='',$login='',$first_name='',$last_name='',$password_hash=''){
        $this->id = $id;
        $this->login = $login;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->password_hash = $password_hash;
    }

    function setLogin($login){
        $this->login = $login;
    }

    function getLogin(){
        return $this->login;
    }

    function setId($id){
        $this->id = $id;
    }

    function getId(){
        return $this->id;
    }

    function getFirstName(){
        return $this->first_name;
    }

    function getLastName(){
        return $this->last_name;
    }

    function setPassword($hash){
        $this->password_hash = $hash;
    }
    function getPassword(){
        return $this->password_hash;
    }

    function checkPassword($password){
        echo "Checking...";
        echo "pass:".$password;
        echo "hash:".$this->password_hash;
        return (password_verify($password,$this->password_hash));
    }

    function saveUser(){
        try {
            global $DBH;
            echo "<br />OBJ";
            print_r((array)$this);

            // Insert to the database
            $stmt = $DBH->prepare('INSERT INTO Users (id, login, first_name, last_name, password_hash) VALUES (:id, :login, :first_name, :last_name, :password_hash)');
            $stmt->execute((array)$this);

           // Alternatively, filling an associative array (still with named placeholders)
           // $stmt = $DBH->prepare('INSERT INTO Users (id, login, first_name, last_name, password_hash) VALUES (:id, :login, :first_name, :last_name, :password_hash)');
           // $stmt->execute(['id' => $this->id, 'login' => $this->login, 'first_name' => $this->first_name, 'last_name' => $this->last_name, 'password_hash' => $this->password_hash]);

           // Alternatively, using unnamed placeholders
           // $stmt = $DBH->prepare('INSERT INTO Users (id, login, first_name, last_name, password_hash) VALUES (?,?,?,?,?)');
           // $stmt->execute([$this->id,$this->login,$this->first_name,$this->last_name,$this->password_hash]);

            // After saving the user to the database, fill in the user object id
            $user_from_db = $this->getUserByLogin($this->login);
            $this->id = $user_from_db->id;

        } catch (PDOException $e) {
            echo "ERROR: ";
            echo $e->getMessage();
        }
    }

    public static function getUserByLogin($login){
        try {
            global $DBH;
            $stmt = $DBH->prepare("SELECT * FROM Users WHERE login=:login");
            $stmt->bindParam(':login',$login);
            $stmt->execute();
            // Fetch the result into a user object
            $stmt->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,"User");
            $user = $stmt->fetch();
            // Alternative method, fetching into an associative array
            //$stmt->setFetchMode(PDO::FETCH_ASSOC);
            //$row = $stmt->fetch();
            //$user = new User($row['id'],$row['login'],$row['first_name'],$row['last_name'],$row['password_hash']);
            return $user;
        } catch (PDOException $e) {
            echo "ERROR: ";
            echo $e->getMessage();
	    return -1;
        }
    }

    public static function getUserById($id){
        try {
            global $DBH;
            $stmt = $DBH->prepare('SELECT * FROM Users WHERE id=:id');
            $stmt->bindParam(':id',$id);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,"User");
	    $user = $stmt->fetch();
	    //print_r($user);
	    //echo var_dump($user);
            return $user;
        } catch (PDOException $e) {
            echo "ERROR: ";
	    echo $e->getMessage();
	    return -1;
        }
    }

}

?>
