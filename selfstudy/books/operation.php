<?php
    require_once("db.php");
  

    $con=createdb();


    //create button cklick
    if(isset($_POST['create'])){
      createData();
    }

    //create function create data
    function createData(){
       // $newsid=$_POST['news_number'];
        $newsid =textboxvalue("news_number");
        $newstitle = textboxvalue("news_title");
        $newsdetails = textboxvalue("news_details");
        $newsdate = textboxvalue("news_date");

        if($newsid && $newstitle && $newsdetails && $newsdate){
            $sql = "INSERT INTO news3 (news_id,news_title,news_details,news_date) 
            VALUES ('$newsid','$newstitle','$newsdetails','$newsdate')";
            if(mysqli_query($GLOBALS['con'], $sql)){
                TextNode("success", "Record Successfully Inserted...!");
            }else{
                echo "Error";
            }

            }else{
                TextNode("error", "Provide Data in the Textbox");
            }
            }

            // messages
        function TextNode($classname, $msg){
            $element = "<h6 class='$classname'>$msg</h6>";
            echo $element;
        }

    //function call data
    function textboxvalue($value){
        $textbox = mysqli_real_escape_string($GLOBALS['con'],trim($_POST[$value]));
        //$textbox = $_POST[$value]; // why not bring the value emedidatly >> the preavias way is secured egingest sql enjction
        if(empty($textbox)){
            return false;
        }else{
            return $textbox;
        }
    }
?>