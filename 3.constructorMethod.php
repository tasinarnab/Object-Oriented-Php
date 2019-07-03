<?php include "include/header.php"; ?>

<hr>
-------------------  Part-03 (Constructor Method)  -----------------
<hr>

<?php

    class Person{
        public $name;
        public $age;

        public function __construct($name,$age){
            $this->name = $name;
            $this->age = $age;
        }

        public function personDetails(){
            echo "Person Name is:{$this->name} and Person Age is {$this->age}";
        }
        
    }

    $personOne = new Person("Arnab","26");
    $personOne->personDetails();
    

?>

<hr>
 ------------------  Part-04 (Destructor)  -----------------
<hr>

<?php

    class Person1{
        public $name1;
        public $age1;
        public $id1;

        public function __construct($name1,$age1){
            $this->name1 = $name1;
            $this->age1 = $age1;
        }

        public function setId($id){
            $this->id = $id;
        }

        public function __destruct(){
            if(! empty($this->id)){
                echo "Saving Person";
            }
        }
        
    }

    $personOne1 = new Person1("Arnab","26");
    $personOne1->setId(12);
    unset($personOne1);
    

?>









<?php include "include/footer.php"; ?>