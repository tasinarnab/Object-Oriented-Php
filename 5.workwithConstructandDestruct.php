<?php include "include/header.php"; ?>

<hr>
-------------------  (Part-05) Work with Construct and Destruct  -----------------
<hr>

<?php

    class UserData{
        public $user;
        public $userId;

        public function __construct($userName,$userId){
            $this->user = $userName;
            $this->userId = $userId;

            echo "User name is {$this->user} and User ID is {$this->userId}";
        }

        public function __destruct(){
            unset($this->user);
            unset($this->userId);
        }
    }

    $user = "Arnab";
    $id = "26";
        
    $ur = new UserData($user,$id);

?>

<hr>
-------------------  (Part-06) Class Constants   -----------------
<hr>

<?php

    class UserData2{

        const NAME = "TASIN MONZUR KHAN ARNAB";

        public function display(){
            echo "Full Name is: ".UserData2::NAME;
        }
        
    }

        
    $ur = new UserData2;
    echo "<br/>";
    $ur->display();

?>


<hr>
-------------------  (Part-07) Static properties $ Method   -----------------
<hr>

<?php

    class UserData3{

        const NAME = "TASIN MONZUR KHAN ARNAB";

        public static $age = "30";

        public static function display(){
            echo "Full Name is: ".UserData3::NAME."<br>";
            echo "Age is: ".self::$age;
        }

    }
        
    //$ur = new UserData3;
    //echo "<br/>";
    //$ur->display();
    UserData3::display();

?>











<?php include "include/footer.php"; ?>