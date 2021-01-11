<?php
require_once('db.php');
$con=createdb();


//create button click to fire the function
if(isset($_POST['save'])){
    // $_GET['$n']="";
    createData();
}
if(isset($_POST['update'])){
    // $_GET['$n']="";
    updateData($_GET['n']);
}
if(isset($_POST['delete'])){
    // $_GET['$n']="";
    deleteData($_GET['n']);
}
    //save function
function createData(){
    $articleTitle = textboxValue("article_title");//article_title is the input field name
    $publishDate = textboxValue("publish_date");//article_title is the input field name
    $articleSummery = textboxValue("article_summury");
    $articleDetials = textboxValue("article_details");
    //echo"<pre>".print_r($_FILES)."</pre>";
    // echo"<pre>".print_r($_FILES['article_img'])."</pre>";
    $articleImageName =time()."_". $_FILES['article_img']['name'];
    $target ='./images/'. $articleImageName;
   
    if($articleTitle && $publishDate && $articleSummery && $articleDetials && move_uploaded_file($_FILES['article_img']['tmp_name'],$target)){
        $sql = "
            INSERT INTO articles(
                articleTitle,publishDate,articleSummery,articleDetials,articleImgName)
            VALUES('$articleTitle','$publishDate','$articleSummery','$articleDetials','$articleImageName');
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
    SELECT * FROM articles ORDER BY articleId DESC;
    ";
    //store the returend record in $result
    $result = mysqli_query($GLOBALS['con'],$sql);
    if(mysqli_num_rows($result)>0){
        $result = mysqli_query($GLOBALS['con'],$sql);
        $articles = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $articles;
    }
    else{echo("database is empty");}
}
//bring text of selected row to the input fiedls when clicking the edit button
function editbtn($id){
    $sql="
    SELECT * FROM articles WHERE articleId='$id';
    ";
    $result=mysqli_query($GLOBALS['con'],$sql);
   
    $myResult=mysqli_fetch_array($result);
    return $myResult;
}
///////////////////
function updateData($id){
    $articleTitle = textboxValue("article_title");//article_title is the input field name
    $publishDate = textboxValue("publish_date");//article_title is the input field name
    $articleSummery = textboxValue("article_summury");
    $articleDetials = textboxValue("article_details");
    //echo"<pre>".print_r($_FILES)."</pre>";
    // echo"<pre>".print_r($_FILES['article_img'])."</pre>";
    $articleImageName =time()."_". $_FILES['article_img']['name'];
    $target ='./images/'. $articleImageName;
   
    if($articleTitle && $publishDate && $articleSummery && $articleDetials && move_uploaded_file($_FILES['article_img']['tmp_name'],$target)){
        // $sql = "
        //     INSERT INTO articles(
        //         articleTitle,publishDate,articleSummery,articleDetials,articleImgName)
        //     VALUES('$articleTitle','$publishDate','$articleSummery','$articleDetials','$articleImageName');
        // ";
        $sql = "
        UPDATE articles SET articleTitle='$articleTitle' ,publishDate='$publishDate'
         ,articleSummery='$articleSummery' ,articleDetials='$articleDetials',articleImgName='$articleImageName'
        WHERE articleId='$id';
        ";
    if(mysqli_query($GLOBALS['con'],$sql)){
        textNode("","updated scussesfully");
    }else{echo('record not saved'.mysqli_error($GLOBALS['con']));}
    }else{textNode('',"txtbox are emptey");}
}
////////////////////////////
function deleteData($id){
     $sql = "
            DELETE FROM articles ';
            ";
            if(mysqli_query($GLOBALS['con'],$sql)){
                textNode('',"deleted sucssesfully");
            }else{echo("delete error".mysqli_error($GLOBALS['con']));}
    }

?>
