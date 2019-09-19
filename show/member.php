<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'library');
$s= "select * from membership" ;
$result=mysqli_query($con,$s);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
        Member Data
        </title>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
    </head>
    
    <body>
        <div class="container">
            <a href="../html/home.html">Home</a>
        
        <table class="table table-striped">
            <tr>
                <th colspan="2"><h3 class="text-center">Membership Table</h3></th>
            <tr>
            <tr>
                <th>Member No</th>
                <th>Member Name</th>
            </tr>
         
            <?php
            while ($row=mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td>
                        <?php echo $row["mem_no"] ?>
                    </td>
                    <td>
                        <?php echo $row["stud_no"] ?>
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