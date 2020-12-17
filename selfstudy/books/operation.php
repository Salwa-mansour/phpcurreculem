<?php
    require_once("db.php");
  

    $con=createdb();


    //create button cklick
    if(isset($_POST['create'])){
        createData();
    }

    //create function
    function createData(){
        $newsID = textboxValue("news_number");
        $newsTitle = textboxValue("news_title");
        $newsDetails = textboxValue("news_details");
        $newsDate = textboxValue("news_date");
         
        if($newsID && $newsTitle && $newsDetails && $newsDate){
            $sql = "INSERT INTO mynews()"
        }
    }
    //we are sending the name of the input and reseving the value of it as returened valeu
    function textboxValue($value){
        $textbox = mysqli_real_escape_string($GLOBALS['con'],trim($_POST['$value']));
        if(empty($textbox)){
            return false;
        }else{
            return $textbox;
        }
    }
?>