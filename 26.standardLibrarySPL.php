<?php include "include/header.php"; ?>


<hr>
   -------------------  (Part-26)  Standard Library SPL  -----------------
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
    
   


    $arr = array("HTML","CSS","PHP","JAVA","C++");

    $ai = new ArrayIterator($arr);
    //$limit = new LimitIterator($ai,0,2);
    $ci = new CachingIterator($ai);

    /*
    echo $ai->current()."<br/>";

    $ai->next();
    echo $ai->current();
    */

    foreach ($ci as $value) {
        echo $value;
        if($ci->hasNext()){
            echo ", ";
        }
    }









    //index.php -----> te thakbe nich theke ok

    /*
    spl_autoload_register(function($class_name){
        include "classes/".$class_name.".php";
    });
    */

    
    
    
    

?>













<?php include "include/footer.php"; ?>