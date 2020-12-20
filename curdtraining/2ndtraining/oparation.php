<?php
require_once('db.php');
require_once('markup.php');
$con=createdb();

//create button click to fire the function
if(isset($_POST['create'])){
    createData();
}
    //save function
function createData(){
    $newsTitle = textboxValue("news_title");//news_title is the input field name
    $newsDetails = textboxValue("news_details");
    $newsDate = textboxValue("news_date");
    if($newsTitle && $newsDetails && $newsDate){
        $sql = "
            INSERT INTO news2(
                newstitle,newsdetails,newsdate)
            VALUES('$newsTitle','$newsDetails','$newsDate');
        ";

    if(mysqli_query($GLOBALS['con'],$sql)){
        textNode("","created scussesfully");
    }else{echo('record not saved'.mysqli_error($GLOBALS['con']));}
    }else{textNode('',"txtbox are emptey");}
}
//getting the input feilds current value
function textboxValue($value){
    $textbox = mysqli_real_escape_string($GLOBALS['con'],trim($_POST[$value]));
    if(empty($textbox)){
        return false;
    }else{
        return $textbox;
    }
}
// massgess function
function textNode($class,$massege){
    $elemnt="<h6 calss='$class'>$massege</h6>";
    echo $elemnt;
}

//get data from database (show data)
function getData(){
    $sql = "
    SELECT * FROM news2 ORDER BY newsid DESC;
    ";
    //store the returend record in $result
    $result = mysqli_query($GLOBALS['con'],$sql);
    if(mysqli_num_rows($result)>0){
        $rows =mysqli_num_rows($result);
        for($i=0;$i<$rows;$i++){
            //stor every recored in as an arry elemnt =>$myResult is a tow deminetional arry
            $myResult[$i]=mysqli_fetch_array($result);
        }
        return $myResult;
    }else{echo("database is empty");}
}

//bring text of selected row to the input fiedls when clicking the edit button
function editbtn($id){
    $sql="
    SELECT * FROM news2 WHERE newsid=$id;
    ";
    $result=mysqli_query($GLOBALS['con'],$sql);
    $myResult=mysqli_fetch_array($result);
    return $myResult;
}
///////////////////
function updateData(){
    $newsTitle=textboxValue('news_title');
    $newsDetails= textboxValue('news_details');
    $newsDate=textboxValue('news_date');
    $newsid=textboxValue('news_id');
    if($newsTitle && $newsDetails && $newsDate && $newsid){
        $sql = "
        UPDATE news2 SET newstitle='$newsTitle' ,newsdetails='$newsDetails' ,newsdate='$newsDate'
        WHERE newsid='$newsid';
        ";//I spend  a half hour to fegur out that i need to add the variables names inside ''
    if(mysqli_query($GLOBALS['con'],$sql)){
        textNode(''," updated sucssesfullly");
    }else {echo('update error'.mysqli_error($GLOBALS['con']));}
    }else{echo textNode('','textboxes are emptey');}
}
////////////////////////////
function deleteData(){
    $newsid=textboxValue('news_id');
    if($newsid){
            $sql = "
            DELETE FROM news2 WHERE newsid='$newsid';
            ";
            if(mysqli_query($GLOBALS['con'],$sql)){
                textNode('',"deleted sucssesfully");
            }else{echo("delete error".mysqli_error($GLOBALS['con']));}
    }else{textnode('',"bring an id ");}
}
?>