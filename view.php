<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            include './Connection.php';
            $sql="SELECT `image` FROM `tbl_uploded_photos` WHERE id=".$_GET["id"].";";
            $result= mysqli_query($con, $sql);
            $result=$con->query($sql);
            $get_file=$result->fetch_row();
            echo "<table>";
            while ($row=$result->fetch_object())
            {
                print "<tr>";
                print '<td>'.$row->image.'</td>';
                print "</tr>";
            }
        ?>
    </body>
</html>
