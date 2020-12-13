<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saved News</title>
</head>
<body>
    <?php

    include("config.php");
    $id=$_POST['news_number'];
    $title=$_POST['news_title'];
    $details=$_POST['news_details'];
    $date=date("y-d-m");
   echo "<br/> $id <br/> $title <br/> $details <br/> $date ";
   $sql_insert = "INSERT INTO news(news_title,news_details,news_date)
      VALUES('".$title."' ,'".$details."' ,'".$date."')";
    mysqli_query($conn , $sql_insert) or die("save filed");
    echo "save done"

   ?>
</body>
</html>