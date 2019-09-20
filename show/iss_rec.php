<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'library');

$s= "select * from issu_rec" ;

$result=mysqli_query($con,$s);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
        Issue Data
        </title>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
    </head>
    
    <body>
        <div class="container">
            <a href="../html/home.html">Home</a>
        
        <table class="table table-striped">
            <tr>
                <th colspan="4"><h1 class="text-center">Issue Table</h1></th>
            <tr>
            <tr>
                <th> iss_no</th>
                <th>Date</th>
                <th> Member No</th>
                <th> Book No</th>
            </tr>
         
            <?php
            while ($row=mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td>
                        <?php echo $row["iss_no"] ?>
                    </td>
                    <td>
                        <?php echo $row["date"] ?>
                    </td>
                    <td>
                        <?php echo $row["mem_no"] ?>
                    </td><td>
                        <?php echo $row["book_no"] ?>
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