<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $conn = mysqli_connect('localhost','root','','blog1db') or die("connetion felied");
        // echo"welcom to data base";
        mysqli_query($conn,'SET NAMES utf8') or die('unicode filed');
    //       echo'unicoded succsesfully';
    ?>
</body>
</html>