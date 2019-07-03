<?php include "include/header.php"; ?>


<hr>
   -------------------  (Part-21) __CLASS__ and get_class()  -----------------
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
    
    /*
    spl_autoload_register(function($class_name){
        include "classes/".$class_name.".php";
    });

    */

    abstract class Php{

        public function framework(){
            echo "Base Class Constant and Class name ".__CLASS__."<br>";
            echo "Base Class Function and Class name ".get_class($this)."<br>";
        }

    }

    //index.php -----> te thakbe nich theke ok

    class phpChild extends Php{

        public function cms(){
            echo "Child Class Constant and Class name ".__CLASS__."<br>";
            echo "Child Class Function and Class name ".get_class($this)."<br>"; 
        }

        public function ourMethod(){
            parent::framework();
        }
    }

    $php = new phpChild();
    $php->framework();
    echo "<hr/>";
    $php->cms();
    echo "<hr/>";
    $php->ourMethod();
    

    
    

?>













<?php include "include/footer.php"; ?>