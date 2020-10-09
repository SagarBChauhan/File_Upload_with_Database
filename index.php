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
        <form action="Home.php" method="POST" enctype="multipart/form-data">
            <table border="1">
                <tbody>
                    <tr>
                        <td>Name:</td>
                        <td><input type="text" name="name" value="" /></td>
                    </tr>
                    <tr>
                        <td>Photo:</td>
                        <td><input type="file" name="photo" value="" /></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Upload" name="btn_upload" /></td>
                    </tr>
                </tbody>
            </table>

        </form>
    </body>
</html>
