<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

    <?php 
        if (isset($_FILES['photo'])) 
        { 
            include "./Connection.php";
            $name = str_replace(' ', '', $_POST['name']); 
            $file_name = $_FILES['photo']['name']; 
            //$file_size = $_FILES['photo']['size']; 
            $file_tmp = $_FILES['photo']['tmp_name']; 
            $file_type = $_FILES['photo']['type'];   
            $ftype= mime_content_type($file_tmp);
            $imageFileType = strtolower(pathinfo($file_name, PATHINFO_EXTENSION)); 
            $target_file = "upload/".$file_name;
            $path="./upload/$name";
            move_uploaded_file($file_tmp, "upload/". $file_name);

            $query="INSERT INTO `tbl_uploded_photos`(`name`, `image`) VALUES ('".$name."','".$target_file."');";
            $sql_insert = mysqli_query($con, $query);
            if ($sql_insert)
            {
              $lastId=$con->insert_id;
              echo "<p class='card-category text-success text-capitalize font-weight-bold'><i class='fab fa-connectdevelop'></i> Data Inserted <i class='fas fa-flag-checkered'></i></p>";
              header("Location:view.php?id=".$lastId."");
            }
            else
            {
              die("<p class='card-category  text-warning text-capitalize font-weight-bold'><i class='fab fa-connectdevelop'></i> Data Insertion Failed <i class='fas fa-times'></i></p>");
            }                
        }
    ?> 
    <center>
        <table border="0" style="width:100%;">
            <thead style="background-color: royalblue;font-size:20px; text-shadow:2px 2px 10px #000000; color: white;">
                <tr >
                    <th  style="padding: 20px; "><?php echo"<img style='border-radius: 50%;box-shadow:2px 2px 10px #000000;' src=".$target_file." width=7% />";?><br><?php echo $_POST['name'];?></th>
                </tr>
            </thead>
        </table>  
    </center>

    </body>
</html>
