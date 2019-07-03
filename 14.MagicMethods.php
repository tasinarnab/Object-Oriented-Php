<?php include "include/header.php"; ?>


<hr>
   -------------------  (Part-14) Magic Methods   -----------------
<hr>

<hr>
    __get($property) , __set($property,$value) and __call($method,$arg_array)
<hr>

<?php

     /*
        __construct()
        __destruct()
        __get($property)
        __set($property,$value)
        __call($method,$arg_array)
        
    */

    
    class Student{

        public $name;

        public function describe(){
            echo "I am a Coder <br>";
        }

        public function __get($pm){
            echo "$pm does not exist <br>";
        }

        public function __set($pm,$value){
            echo "We set $pm->$value <br>";
        }

        public function __call($pm,$value){
            echo "There is no <b>".$pm. "</b> Method and Arguments: ".implode(',',$value);
        }
    }

    $st = new Student();
    $st->describe();
    $st->Tasin;
    $st->age = 15;

    $st->notExistMethod('2','8','5');


?>













<?php include "include/footer.php"; ?>