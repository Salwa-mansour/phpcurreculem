<?php
    require_once("db.php");
  

    $con=createdb();

    //create button cklick
    if(isset($_POST['create'])){
        echo "create button clicked";
    }

?>