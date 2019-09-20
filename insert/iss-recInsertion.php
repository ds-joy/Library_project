<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'library' );

$IssueNo= $_POST['iss_no'];

$MembershipNo = $_POST['mem_no'];
$BookNo = $_POST['book_no'];

$s= " INSERT INTO iss_rec (`iss_no`, `date`,`mem_no`,`book_no`) VALUES ('$IssueNo',CURRENT_TIMESTAMP,'$MembershipNo','$BookNo')" ;

$result=mysqli_query($con,$s);
$Error=mysqli_error($con);
if(empty($Error)){
    header('location:../show/iss_rec.php');
}
else{
    echo("Error Description: ".mysqli_error($con));
}
?>