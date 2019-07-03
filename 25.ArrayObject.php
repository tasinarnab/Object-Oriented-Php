<?php include "include/header.php"; ?>


<hr>
   -------------------  (Part-25)  Array Object  -----------------
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
    
    for ($i=0; $i < 10; $i++) { 
        
    }


    $arr = array("HTML","CSS","PHP","JAVA");
    $coding = new ArrayObject($arr);
    $coding->append("Java");
    $iterator = $coding->getIterator();
    while ($iterator->valid()) {
        echo $iterator->current()."<br/>";
        $iterator->next();
    }









    //index.php -----> te thakbe nich theke ok

    /*
    spl_autoload_register(function($class_name){
        include "classes/".$class_name.".php";
    });
    */

    
    
    
    

?>













<?php include "include/footer.php"; ?>