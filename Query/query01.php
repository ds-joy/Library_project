<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'library');


$s= "SELECT stud_name, book_name, author 
    FROM student, book, issu_rec, membership
    WHERE issu_rec.date = '2019-09-20' 
	AND membership.mem_no = issu_rec.mem_no 
    AND book.book_no = issu_rec.book_no 
    AND  student.stud_no = membership.stud_no;" ;

$result=mysqli_query($con,$s);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>
        Query 01
        </title>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
    </head>
    
    <body>
        <div class="container">
            <a href="../html/home.html">Home</a>
            <p>The date is 2019-09-20 </p>
        
        <table class="table table-striped">
            <tr>
                <th colspan="3">
                    <h1 class="text-center">
                        Query 01
                    </h1>
                </th>
            <tr>
            <tr>
                <th> Student Name</th>
                <th> Book Name</th>
                <th> Author</th>
            </tr>
         
            <?php
            while ($row=mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td>
                        <?php echo $row["stud_name"] ?>
                    </td>
                    <td>
                        <?php echo $row["book_name"] ?>
                    </td>
                    <td>
                        <?php echo $row["author"] ?>
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