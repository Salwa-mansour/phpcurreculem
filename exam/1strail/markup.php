<?php
function buttonElement($nameValueTxt){
    $btn="
        <button name=$nameValueTxt value=$nameValueTxt>$nameValueTxt</button>
    ";
    echo $btn;

}
//////////////////////////
function dataTableRow($id,$name,$udate){
    $tablerow = "
    <tr>
    <td>$id</td>
    <td>$name</td>
   
    <td>$udate</td>
    <td><button name=\"edit\"><a href=\"defult.php?n=$id\">edit</a></button></td>
   
    </tr>
    ";
    echo $tablerow;
}
//////////////////
function inputgroup($empid,$empname,$email,$site,$phon){
 $elemnt="   <label >emp id <input type=\"text\" name=emp_id value=$empid></label><br>
    
    <label >emp name <input type=\"text\" name=\"emp_name\" value=$empname></label><br>
    <label >emp email <input type=\"text\" name=\"emp_email\" value=$email></label><br>
    <label >emp site <input type=\"text\" name=\"emp_site\" value=$site></label><br>
    <label >emp phon <input type=\"text\" name=\"emp_phon\" value=$phon></label><br>
    
    ";
    echo ($elemnt);
}
?>