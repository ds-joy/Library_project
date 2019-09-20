<?php
        session_start();
        $con=mysqli_connect('localhost','root','');
        mysqli_select_db($con,'library' );

        $studNo= $_POST['stud_no'];
        

        $s= " DELETE FROM student WHERE `student`.`stud_no` = '$studNo';" ;

        $result=mysqli_query($con,$s);
        $Error=mysqli_error($con);
        
        if(empty($Error)){
            header('location:../show/student.php');
        }
        else{
                echo("Error Description: ".mysqli_error($con));
                
            }
    ?>