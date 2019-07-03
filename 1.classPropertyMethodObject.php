<?php include "include/header.php"; ?>

<hr>
-------------------  Part-01 (Class, Property, Method and Object)  -----------------
<hr>

<?php

    class Person{
        public $name="Tasin Arnab";
        public $age;

        public function personName(){
            echo "Person Name is:".$this->name."<br/>";
        }
        public function personAge($value){
            echo "Person Age is:".$this->age=$value."<br/>";
        }
    }

    $personOne = new Person;
    echo $personOne->name."<br/>";
    $personOne->personName();
    $personOne->personAge("26");

?>

<hr>
-------------------  Part-02 (Class, Property, Method and Object)  -----calculation------------
<hr>


<form action="" method="post">
    <table>
        <tr>
            <td>Enter the first Number :</td>
            <td><input type="number" name="num1"></td>
        </tr>

        <tr>
            <td>Enter the Second Number :</td>
            <td><input type="number" name="num2"></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" name="calculation" value="Calculate"></td>
        </tr>
    </table>
</form>

<?php include "function.php"; ?>

<?php

    if(isset($_POST['calculation'])){
        $numOne = $_POST['num1'];
        $numTwo = $_POST['num2'];
    

        if(empty($numOne) or empty($numTwo)){
            echo "<span style='color:#EE6554'>Field must not be empty</span><br>";
        }else{

            echo "First Number is: ".$numOne. "Second Number is: ".$numTwo."<br/>";

            $cal = new Calculation;
            $cal->add($numOne,$numTwo);
            $cal->sub($numOne,$numTwo);
            $cal->multi($numOne,$numTwo);
            $cal->divide($numOne,$numTwo);

        }
    }
?>










<?php include "include/footer.php"; ?>