 <?php
 
 require_once("db.php");
 require_once("../books/function.php");
 // تضمين متغير الاتصال هنا من اجل استخدامه في  دوال الحذف و الاضافة و التعديل
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
            $sql = "INSERT INTO mynews(newstitle,newsdetails,newsdate)
            
            VALUES('$newsTitle','$newsDetails','$newsDate');";//I spend  a half hour to fegur out that i need to add the colulomns names inside ''

     if(mysqli_query($GLOBALS['con'], $sql)){
         textNode("succsess",'reconded scussesfully');
     }else{echo 'error';}
        }else{textNode('error','txtbox are emptey');}
    }
    //we are sending the name of the input and reseving the value of it as returened valeu
    function textboxValue($value){
        $textbox = mysqli_real_escape_string($GLOBALS['con'],trim($_POST[$value]));
        // the more secure version of
       
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
        $sql = "SELECT * FROM mynews ;   ";
        //store returned statemnt in the $result varabile
        $result=mysqli_query($GLOBALS['con'],$sql);
        if( mysqli_num_rows($result)>0){
            // //just for testing
            // while($row = mysqli_fetch_assoc($result)){
            //     echo "newsid:". $row['newsid'] . "newstitle:" . $row['newstitle'] .
            //     "news details" . $row['newsdetails'] . 'newsdate' . $row['newsdate'] ;
            // }
           $myResult= mysqli_fetch_array($result);
            return $myResult;
        }

        
    }
 ?>