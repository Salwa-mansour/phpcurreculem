<?php
 
 require_once("db.php");
 require_once("markup.php");
 // ﻞﻳﺪﻌﺘﻟا ﻭ ﺔﻓﺎﺿﻻا ﻭ ﻑﺬﺤﻟا ﻝاﻭﺩ  ﻲﻓ ﻪﻣاﺪﺨﺘﺳا ﻞﺟا ﻦﻣ ﺎﻨﻫ ﻝﺎﺼﺗﻻا ﺮﻴﻐﺘﻣ ﻦﻴﻤﻀﺗ
 $con= createdb();
 

           //create button cklick
    if(isset($_POST['create'])){
        createData();
    }
    

    //create save function
    function createData(){
        // $newsID = textboxValue("news_number");
        $newsTitle = textboxValue("news_title");
        $newsDetails = textboxValue("news_details");
        $newsDate = textboxValue("news_date");
         
        if( $newsTitle && $newsDetails && $newsDate){
            $sql = "INSERT INTO mybadnews(newstitle,newsdetails,newsdate)
            
            VALUES('$newsTitle','$newsDetails','$newsDate');";//I spend  a half hour to fegur out that i need to add the variables names inside ''

     if(mysqli_query($GLOBALS['con'], $sql)){
         textNode("succsess",'reconded scussesfully');
     }else{echo 'error';}
        }else{textNode('error','txtbox are emptey');}
    }
    //we are sending the name of the input and reseving the value of it as returened valeu
    function textboxValue($value){
        $textbox = mysqli_real_escape_string($GLOBALS['con'],trim($_POST[$value]));
        if(empty($textbox)){
            return false;
        }else{
            return $textbox;
        }
    }
    function textNode($class,$massege){
        $elemnt = "<h6 class='$class'>$massege</h6>";
        echo $elemnt;
    }

    //get data from my sql database
    function getData(){
        $sql = "SELECT * FROM mybadnews   ORDER BY newsid DESC";
        //store returned row in the $result varabile
        $result=mysqli_query($GLOBALS['con'],$sql);
        if( mysqli_num_rows($result)>0){
            $rwos=mysqli_num_rows($result);
            for($i=0;$i<$rwos;$i++){
           $myResult[$i]= mysqli_fetch_array($result);
        }
      
         return $myResult;
        }else{echo'database is emptey';}

       
        
    }
    //bring data of the row to the feilds
    function editbtn($id){
        $sql = "SELECT * FROM mybadnews   WHERE newsid=$id";
        $result=mysqli_query($GLOBALS['con'],$sql);
        $myResult=mysqli_fetch_array($result);
      //  newsinput2($myResult['newsid'],$myResult['newstitle'],$myResult['newsdetails'],$myResult['newsdate']);
   return$myResult;
   
    }
     function updatedata(){
        $newsTitle = textboxValue("news_title");
        $newsDetails = textboxValue("news_details");
        $newsDate = textboxValue("news_date");
         $newsid=textboxValue('news_number');
        if( $newsid&&$newsTitle && $newsDetails && $newsDate){
            $sql =" UPDATE mybadnews SET newstitle='$newsTitle',newsdetails='$newsDetails',newsdate='$newsDate'
             WHERE newsid='$newsid';
             "; //I spend  a half hour to fegur out that i need to add the variables names inside ''
                
      

     if(mysqli_query($GLOBALS['con'], $sql)){
         textNode("succsess",'reconded updated scussesfully');
     }else{echo 'upate error'.mysqli_error($GLOBALS['con']);}
        }else{textNode('error2','txtbox are emptey');}
    }
  
   function deletedata(){
    // $newsTitle = textboxValue("news_title");
    // $newsDetails = textboxValue("news_details");
    // $newsDate = textboxValue("news_date");
     $newsid=textboxValue('news_number');
    if( $newsid){
        $sql =" DELETE FROM mybadnews
         WHERE newsid='$newsid';
         "; //I spend  a half hour to fegur out that i need to add the variables names inside ''
                if(mysqli_query($GLOBALS['con'], $sql)){
                 textNode("succsess",'reconded deleted scussesfully');
                 }else{echo 'delete error'.mysqli_error($GLOBALS['con']);}
    }else{textNode('error3','bring an id');}
   }

   
 ?>