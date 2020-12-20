<?php

function inputsqure($newsid,$newstitle,$newsdetails,$newsdate){
    $newselemnt="
    <label >news number <input type=\"number\" name=\"news_id\"  value=$newsid></label><br>
    <label >news title <input type=\"text\" name=\"news_title\" value=$newstitle></label><br>
    <label >news details <textarea name=\"news_details\"  cols=\"30\" rows=\"10\" >$newsdetails</textarea></label><br>
    <label >news date <input type=\"date\" name=\"news_date\" value=$newsdate></label>
    ";
    echo $newselemnt;
}
//////////////
function buttonElement($nameValueTxt){
    $btn="
        <button name=$nameValueTxt value=$nameValueTxt>$nameValueTxt</button>
    ";
    echo $btn;

}
///////////////
function dataTableRow($id,$title,$details,$newsDate){
    $tablerow = "
    <tr>
    <td>$id</td>
    <td>$title</td>
    <td>$details</td>
    <td>$newsDate</td>
    <td><button name=\"edit\"><a href=\"controlpanel.php?n=$id\">edit</a></button></td>
    </tr>
    ";
    echo $tablerow;
}
?>