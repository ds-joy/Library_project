<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'library' );

$StudentNo= $_POST['mem_no'];
$MembershipNo = $_POST['stud_no'];

$s= " INSERT INTO membership (`mem_no`, `stud_no`) VALUES ('$StudentNo','$MembershipNo')" ;

$result=mysqli_query($con,$s);
$Error=mysqli_error($con);
if(empty($Error)){
    header('location:../show/member.php');
}
else{
    echo("Error Description: ".mysqli_error($con));
    echo "<br>";
    echo("<h1>You are not a student of this database. Insert your information on Student Table First</h1>");
}
?>