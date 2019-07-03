<?php include "include/header.php"; ?>


<hr>
   -------------------  (Part-27)  Object Serialization  -----------------
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
    
   
    class Programming{
        public $html;
        public $css;
        private $php;
        protected $java;

        function __construct(){
            $this->html = "i know HTML.";
            $this->css = "i love css.";
            $this->php = "i am PHP coder.";
            $this->java = "i am java coder.";
        }
    }




    //index.php -----> te thakbe nich theke ok
    /*
    spl_autoload_register(function($class_name){
        include "classes/".$class_name.".php";
    });
    */



    $pro = new Programming();
    $ser = serialize($pro);
    /*
    file_put_contents("programming.txt",$ser);
    echo $ser;
    */
    $getcont = file_get_contents("programming.txt");
    $unser = unserialize($getcont);
    echo"<pre>";
    print_r($unser);
    echo"</pre>";
    
    

?>













<?php include "include/footer.php"; ?>