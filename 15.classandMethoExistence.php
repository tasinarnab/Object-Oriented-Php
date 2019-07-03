<?php include "include/header.php"; ?>


<hr>
   -------------------  (Part-15) Check for Class & Method existence   -----------------
<hr>


<?php include "student.php"; ?>

<?php
    
    if(class_exists("Student")){

        $st = new Student();

        if(method_exists($st,'describe')){
            $st->describe();
        }else{
            echo " Method not found ";
        }

    } else{
        echo "Class not found";
    }
    


?>













<?php include "include/footer.php"; ?>