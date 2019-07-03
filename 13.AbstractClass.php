<?php include "include/header.php"; ?>


<hr>
   -------------------  (Part-13) Abstract Class   -----------------
<hr>


<?php

    abstract class Student{

        public $name;
        public $age;

        public function details(){
            echo $this->name. " is ". $this->age . " years old <br/>";
        }

        abstract public function School();

    }

    class Boy extends Student{

        public function describe(){
            return parent::details(). "And I am a varsity Student.<br/>";
        }

        public function School(){
            return "I like to do code";
        }

    }


    $s = new Boy();
    $s->name="Arnab";
    $s->age="25";
    echo $s->describe();
    echo $s->School();



?>













<?php include "include/footer.php"; ?>