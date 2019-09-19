<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'library');
$s= "select * from book" ;
$result=mysqli_query($con,$s);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
        Book Data
        </title>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
    </head>
    
    <body>
        <div class="container">
            <a href="../html/home.html">Home</a>
        
        <table class="table table-striped">
            <tr>
                <th colspan="3"><h1 class="text-center">Book Table</h1></th>
            <tr>
            <tr>
                <th> Book No</th>
                <th> Book Name</th>
                <th> Author</th>
            </tr>
         
            <?php
            while ($row=mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td>
                        <?php echo $row["book_no"] ?>
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