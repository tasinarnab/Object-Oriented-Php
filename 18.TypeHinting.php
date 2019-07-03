<?php include "include/header.php"; ?>


<hr>
   -------------------  (Part-18) PHP Type Hinting   -----------------
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

    
    /*
    ------First e eita dekho then nicher ta-----
    $cal = new calhinting;

    $num = array(
        array('Number One',10,10),
        array('Number Two',20,20)
    );

    $cal->getValue2($num)
    */
    

    //$php2 = new phphinting;

    //new javahinting($php2);

    new javahinting(new phphinting);

?>













<?php include "include/footer.php"; ?>