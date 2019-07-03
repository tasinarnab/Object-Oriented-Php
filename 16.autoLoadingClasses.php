<?php include "include/header.php"; ?>


<hr>
   -------------------  (Part-16) AutoLoading Classes   -----------------
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

    $ruby = new Ruby;
    $java = new Java;
    $php = new Php;


?>













<?php include "include/footer.php"; ?>