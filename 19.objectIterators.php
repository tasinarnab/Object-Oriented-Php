<?php include "include/header.php"; ?>


<hr>
   -------------------  (Part-19) Object iterators  -----------------
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

    
    $person = new Person;
    foreach ($person as $key => $value) {
        echo "<pre>";
        echo "$key=>$value";
        echo "</pre>";
    }

    $person->iteratorInner();

?>













<?php include "include/footer.php"; ?>