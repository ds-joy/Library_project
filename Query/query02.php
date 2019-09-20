<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'library');


$s= "SELECT DISTINCT
     student.stud_no, stud_name
     FROM student, book, issu_rec, membership
     WHERE book.author = 'Tanenbum' 
     AND membership.mem_no = issu_rec.mem_no
     AND book.book_no = issu_rec.book_no 
     AND student.stud_no = membership.stud_no;" ;

$result=mysqli_query($con,$s);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>
        Query 02
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
                        Query 02
                    </h1>
                </th>
            <tr>
            <tr>
                <th> Student No</th>
                <th> Student Name</th>
            </tr>
         
            <?php
            while ($row=mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td>
                        <?php echo $row["stud_no"] ?>
                    </td>
                    <td>
                        <?php echo $row["stud_name"] ?>
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