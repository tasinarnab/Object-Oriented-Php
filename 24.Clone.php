<?php include "include/header.php"; ?>


<hr>
   -------------------  (Part-24)  __clone()  -----------------
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
    
    class Language{

        private $category;
        private $framework;

        function setCat($a){
            $this->category = $a;
        }

        function getCat(){
            return $this->category;
        }

        function setFramework($b){
            $this->framework = $b;
        }

        function getFramework(){
            return $this->framework;
        }

        public function __clone(){
            $lang = new Language();
            $lang->setFramework($this->framework);
            return $lang;
        }

    }

    //index.php -----> te thakbe nich theke ok

    /*
    spl_autoload_register(function($class_name){
        include "classes/".$class_name.".php";
    });
    */

    $java = new Language();
    $java->setCat("OOP");
    $java->setFramework("Spring");
    //echo $java->getCat();
    $php = clone $java;
    $php->setCat("Structural");
    $php->setFramework("CodeIgniter");

    echo $java->getCat()."<br/>";
    echo $java->getFramework()."<br/>";

    echo $php->getCat()."<br/>";
    echo $php->getFramework();
    
    
    

?>













<?php include "include/footer.php"; ?>