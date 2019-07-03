<?php include "include/header.php"; ?>


<hr>
-------------------  (Part-10) Access Modifiers   -----Public--Private--Protected--------
<hr>


<?php

    class UserData3{
        public $user;
        public $userId;
        protected $age = "30";


        public function __construct($userName,$userId){
            $this->user = $userName;
            $this->userId = $userId;
            echo $this->age. "Inside Class";
            echo "<br/>";

            
        }

        public function display(){
            echo "User name is {$this->user} and User ID is {$this->userId}";
            
        }

        
    }

    class Admin extends UserData3{
        public $level;

        public function display(){
            echo "User name is {$this->user} and User ID is {$this->userId} and User Level is: {$this->level}";
            echo "<br/>";
            echo $this->age. "Inside in the sub Class";
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

    echo "<br/>";
    //echo $ad->age;    

?>

<hr>
   -------------------  (Part-11) Polymorphism   -----------------
<hr>


<?php
    /*
        When we start to extend classe, and add funtionality to them which wasn't there previously'
        and even override exiting methods (functions), this is called polymorphism.

        The basis of polymorphism is Inheritance and overridden methods.
    */

    class UserData{
        public $user;
        public $userId;
        protected $age = "30";


        public function __construct($userName,$userId){
            $this->user = $userName;
            $this->userId = $userId;
            echo $this->age. "Inside Class";
            echo "<br/>";

            
        }

        public function display(){
            echo "User name is {$this->user} and User ID is {$this->userId}";
            
        }

        
    }

    class Admin3 extends UserData{
        public $level;

        public function display(){
            echo "User name is {$this->user} and User ID is {$this->userId} and User Level is: {$this->level}";
            echo "<br/>";
            echo $this->age. "Inside in the sub Class";
        }
    }

    $user = "Arnab";
    $id = "26";
        
    $ur = new UserData($user,$id);
    echo "<br/>";
    $ur->display();
    echo "<br/>";

    $user = "Admin";
    $id = "1";

    $ad = new Admin3($user,$id);
    $ad->level = "Administrator";
    $ad->display();
    echo "<br/>";

    if($ad instanceof UserData){
        echo "Inherited.";
    }
    

?>













<?php include "include/footer.php"; ?>