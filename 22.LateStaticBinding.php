<?php include "include/header.php"; ?>


<hr>
   -------------------  (Part-22) Late Static Binding  -----------------
<hr>


<?php
    /*
    include "classes/Ruby.php";
    include "classes/Java.php";
    include "classes/Php.php";
    */

    /* 

    function __autoload($class_name){
        echo "$class_name<br>";
        include "classes/".$class_name.".php";
    }

    */
    
    

    class Php{

        public static function framework(){
            echo "CakePHP is a framework.<br/>";
        }

        public function getFramework(){
            self::framework();
        }

    }

    //index.php -----> te thakbe nich theke ok

    /*
    spl_autoload_register(function($class_name){
        include "classes/".$class_name.".php";
    });

    */


    $php = new Php();
    $php->getFramework();
     
    

?>

<hr>
   ----------  Another Example Plz See this self er jaigai static hobe  -------------
<hr>


<?php
    /*
    include "classes/Ruby.php";
    include "classes/Java.php";
    include "classes/Php.php";
    */

    /* 

    function __autoload($class_name){
        echo "$class_name<br>";
        include "classes/".$class_name.".php";
    }

    */
    
    class Php2{

        public static function framework(){
            echo static::getClass()."<br/>";
        }

        public static function getClass(){
            return __CLASS__;
        }

    }

    //index.php -----> te thakbe nich theke ok

    /*
    spl_autoload_register(function($class_name){
        include "classes/".$class_name.".php";
    });

    */

    
    class phpChild extends Php2{

        public static function getClass(){
            return __CLASS__;
        }

    }
    
    $php = new Php2();
    $php->framework();

    $childphp = new phpChild();
    $childphp->framework();
    

?>













<?php include "include/footer.php"; ?>