<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'library');


$s= "SELECT student.stud_name,
 COUNT(issu_rec.mem_no) AS NO_OF_BOOKS
     FROM student, membership, issu_rec
     WHERE student.stud_no =              membership.stud_no 
     AND membership.mem_no = issu_rec.mem_no
     GROUP BY student.stud_name;" ;

$result=mysqli_query($con,$s);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>
        Query 03
        </title>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
    </head>
    
    <body>
        <div class="container">
            <a href="../html/home.html">Home</a>
        
        <table class="table table-striped">
            <tr>
                <th colspan="2">
                    <h1 class="text-center">
                        Query 03
                    </h1>
                </th>
            <tr>
            <tr>
                <th> Student Name</th>
                <th> No of Books</th>
            </tr>
         
            <?php
            while ($row=mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td>
                        <?php echo $row["stud_name"] ?>
                    </td>
                    <td>
                        <?php echo $row["NO_OF_BOOKS"] ?>
                    </td>
                </tr>
                <?php
            }
            ?>
            
        </table>
        <script type="text/javascript" src="../js/bootstrap.min.js"></script>
        </div>
    </body>
</html>