<?php include "include/header.php"; ?>


<hr>
   -------------------  (Part-12) Interface   -----------------
<hr>


<?php

    interface School{
        public function mySchool();
    }

    interface College{
        public function myCollege();
    }

    interface Varsity{
        public function myVarsity();
    }


    class Teacher implements School,College,Varsity{

        public function __construct(){
            $this->mySchool();
            $this->myCollege();
            $this->myVarsity();
        }

        public function mySchool(){
            echo "I am a School Teacher.<br/>";
        }

        public function myCollege(){
            echo "I am a College Teacher.<br/>";
        }

        public function myVarsity(){
            echo "I am a Varsity Teacher.<br/>";
        }
    }


    class Student implements School,College,Varsity{

        public function __construct(){
            $this->mySchool();
            $this->myCollege();
            $this->myVarsity();
        }

        public function mySchool(){
            echo "I am a School Student.<br/>";
        }

        public function myCollege(){
            echo "I am a College Student.<br/>";
        }

        public function myVarsity(){
            echo "I am a Varsity Student.<br/>";
        }
    }

    $teacher = new Teacher();
    $student = new Student();







?>













<?php include "include/footer.php"; ?>