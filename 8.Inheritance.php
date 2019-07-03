<?php include "include/header.php"; ?>


<hr>
-------------------  (Part-08) Inheritance   -----------------
<hr>


<?php

    class UserData3{
        public $user;
        public $userId;


        public function __construct($userName,$userId){
            $this->user = $userName;
            $this->userId = $userId;
  
        }

        public function display(){
            echo "User name is {$this->user} and User ID is {$this->userId}";
        }

        
    }

    class Admin extends UserData3{
        public $level;

        public function display(){
            echo "User name is {$this->user} and User ID is {$this->userId} and User Level is: {$this->level}";
        }
    }

    $user = "Arnab";
    $id = "26";
        
    $ur = new UserData3($user,$id);
    echo "<br/>";
    $ur->display();
    echo "<br/>";

    $user = "Admin";
    $id = "1";

    $ad = new Admin($user,$id);
    $ad->level = "Administrator";
    $ad->display();
    

?>


<hr>
-------------------  Part-09 (Preventing from Extending & Overriding)   -----------------
<hr>


<?php
        // final class er agey add korle ar inherit kora jabe na or sub-class kajkorbe na
        class UserData4{
        public $user;
        public $userId;


        public function __construct($userName,$userId){
            $this->user = $userName;
            $this->userId = $userId;

            
        }
        // final function er agey add korle ar overide kora jabe na
        public function display(){
            echo "User name is {$this->user} and User ID is {$this->userId}";
        }

        
    }

    class Admin2 extends UserData4{
        public $level;

        public function display(){
            echo "User name is {$this->user} and User ID is {$this->userId} and User Level is: {$this->level}";
        }
    }

    $user = "Arnab";
    $id = "26";
        
    $ur = new UserData4($user,$id);
    echo "<br/>";
    $ur->display();
    echo "<br/>";

    $user = "Admin";
    $id = "1";

    $ad = new Admin2($user,$id);
    $ad->level = "Administrator";
    $ad->display();
    

?>











<?php include "include/footer.php"; ?>