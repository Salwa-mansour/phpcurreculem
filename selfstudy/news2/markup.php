<?php
// function inputElement($placeholder,$btntxt,$name,$value){
//     $element="
//     <div class=\"padding-y2\">
//     <input type=\"text\" placeholder=$placeholder name=$name value=$value>
//     <input type=\"button\" value=$btntxt>
// </div>
//     ";
//     echo $element ;
// }

  function newsinput($newsnumber,$newstitle,$newsdetails,$newsdate){
   $newselemnt=" 
   <label>news number <input type=\"number\" name=\"news_number\" value=$newsnumber></label><br>
    <label>news title <input type=\"text\" name=\"news_title\" value=$newstitle></label><br>
    <label>news details <textarea name=\"news_details\" id=\"\" cols=\"30\" rows=\"10\">$newsdetails</textarea></label><br>
    <label>news date <input type=\"date\" name=\"news_date\" value=$newsdate></label><br>
    <input type=\"submit\" value=\"submit news\">

   ";
   echo $newselemnt;
  }

  function buttonElement($txt,$name,$value){
    $btn="
        <button name='$name' value='$value' >$txt</button>
    ";
    echo $btn;
  }

  function readData($id,$title,$details,$newsdate){
   $read = " <span>$id</span>
    <h1>$title</h1>
    <p>$details</p>
    <small>$newsdate</small>";
    echo $read;
  }
?>