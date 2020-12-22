<?php

// function myfuncion(){
//     $myelemnt = "";
//     echo $myelemnt;
// }
function newsinput2($newsnumber,$newstitle,$newsdetails,$newsdate){
    $newselemnt=" 
    <label>news number <input type=\"number\" name=\"news_number\" value=$newsnumber></label><br>
     <label>news title <input type=\"text\" name=\"news_title\" value=$newstitle></label><br>
     <label>news details <textarea name=\"news_details\" id=\"\" cols=\"30\" rows=\"10\">$newsdetails</textarea></label><br>
     <label>news date <input type=\"date\" name=\"news_date\" value=$newsdate></label><br>
    ";
    echo $newselemnt;
   }

   
 
   function buttonElement2($txt,$name,$value){
     $btn="
         <button name='$name' value='$value' >$txt</button>
     ";
     echo $btn;
   }
 
   // function readData2($id,$title,$details,$newsdate){
   //  $read = " <span>$id</span>
   //   <h1>$title</h1>
   //   <p>$details</p>
   //   <small>$newsdate</small>";
   //   echo $read;
   // }
   function readdata3($id,$title,$details,$newsdate){
        $tablerow="
        <tr>
        <td>$id</td>
        <td>$title</td>
        <td>$details</td>
        <td>$newsdate</td>
        <td><button name=\"edit\"> <a href=\"defult.php?n=$id\">edit</a></button></td>
        </tr>"
        ;
        echo $tablerow;
   }
     // .
        // "<td>".buttonElement2("update","update","update")."</td>".
        // "<td>".buttonElement2("detete","delete","delete")."</td>".
?>