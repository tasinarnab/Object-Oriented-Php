<?php

    class Person{
        public $name = "ARNAB";
        public $age = "26";
        public $skill = "Developer";

        private $email = "tasin@gmail.com";
        private $password = "12345";

        function iteratorInner(){
            echo "Inside Class <br/>";
            foreach ($this as $key => $value) {
                echo "<pre>";
                echo "$key=>$value";
                echo "</pre>";
            }
        }

        
    }

    

?>