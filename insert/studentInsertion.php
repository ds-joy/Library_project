<?php
        session_start();
        $con=mysqli_connect('localhost','root','');
        mysqli_select_db($con,'library' );

        $studNo= $_POST['stud_no'];
        $studName= $_POST['stud_name'];

        $s= " INSERT INTO student (`stud_no`, `stud_name`) VALUES ('$studNo','$studName')" ;
        $result=mysqli_query($con,$s);
        $Error=mysqli_error($con);
        
        if(empty($Error)){
            header('location:../show/student.php');
        }
        else{
                echo("Error Description: ".mysqli_error($con));
                echo "<br>";
                echo("<h1>Student No Must Start With 'C'</h1>");
            }
    ?>