<?php
$hostname='localhost';
$username='scott';
$password='andalus';
$dbname='empdb';
require_once('db.php');
$con=createdb($hostname,$username,$password,$dbname);

if(isset($_POST['create'])){
    createData();
}
////////////
    //save function
    function createData(){
        $empname= textboxValue("emp_name");//news_title is the input field name
        $empemail = textboxValue("emp_email");
        $empsite = textboxValue("emp_site");
        $empphon = textboxValue("emp_phon");
        
        
        if($empname&& $empemail && $empsite && $empphon){
            $sql = "
                INSERT INTO emp(
                    empname,empemail,empsite,empphon)
                VALUES('$empname','$empemail','$empsite','empphon');
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
        $elemnt="<h5 calss='$class'>$massege</h5>";
        echo $elemnt;  }
        //get data from database (show data)
function getData(){
    $sql = "
    SELECT * FROM emp ORDER BY empid DESC;
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
////////////////////////bring text of selected row to the input fiedls when clicking the edit button
function editbtn($id){
    $sql="
    SELECT * FROM emp WHERE empid=$id;
    ";
    $result=mysqli_query($GLOBALS['con'],$sql);
    $myResult=mysqli_fetch_array($result);
    return $myResult;
}
///////////////
function updateData(){
    $empname=textboxValue('emp_name');
    $empemail= textboxValue('emp_email');
    $empsite=textboxValue('emp_site');
    $empphon=textboxValue('emp_phon');
    $empid=textboxValue('emp_id');
    if($empname && $empemail && $empsite && $empid){
        $sql = "
        UPDATE emp SET empname='$empname' ,empemail='$empemail' ,empsite='$empsite',empphon='empphon'
        WHERE empid='$empid';
        ";//I spend  a half hour to fegur out that i need to add the variables names inside ''
    if(mysqli_query($GLOBALS['con'],$sql)){
        textNode(''," updated sucssesfullly");
    }else {echo('update error'.mysqli_error($GLOBALS['con']));}
    }else{echo textNode('','textboxes are emptey');}
}
////////////
function deleteData(){
    $empid=textboxValue('emp_id');
    if($empid){
            $sql = "
            DELETE FROM emp WHERE empid='$empid';
            ";
            if(mysqli_query($GLOBALS['con'],$sql)){
                textNode('',"deleted sucssesfully");
            }else{echo("delete error".mysqli_error($GLOBALS['con']));}
    }else{textnode('',"bring an id ");}
}
  
?>