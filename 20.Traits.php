<?php include "include/header.php"; ?>


<hr>
   -------------------  (Part-20) Traits in PHP  -----------------
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

    trait Java{
        public function JavaCoder(){
            return "I love JAVA. <br/>";
        }
    }

    trait Php{
        public function phpCoder(){
            return "I love PHP. <br/>";
        }
    }

    /*
    trait javaPhp{
        use Java,Php;
    }
    */
    
    class CoderOne{
        use Java,Php;
    }

    class CoderTwo{
        use Java;
    }

    $c1 = new CoderOne;
    echo $c1->JavaCoder();
    echo $c1->phpCoder();

    $c2 = new CoderTwo;
    echo $c2->JavaCoder();

    
    

?>













<?php include "include/footer.php"; ?>