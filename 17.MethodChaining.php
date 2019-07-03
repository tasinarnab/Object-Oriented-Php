<?php include "include/header.php"; ?>


<hr>
   -------------------  (Part-17) PHP Method Chaining   -----------------
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
    
    spl_autoload_register(function($class_name){
        include "classes/".$class_name.".php";
    });

    
    $php = new Php;
    $php->framework()->cms();
    

    echo "<br>";

    $cal = new Calculation;
    echo "Result is: ". $cal->getValue(3,5)->getResult();

?>













<?php include "include/footer.php"; ?>