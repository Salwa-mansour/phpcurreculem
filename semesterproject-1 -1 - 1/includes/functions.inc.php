<?php
// https://www.youtube.com/watch?v=gCo6JqGMi30&t=6382s
include_once('dbh.php');
$con2=createdb();
/////////////
function emptyInputSignup($name,$email,$username,$pwd,$pwdRepeat){
        $result=0;
        if(empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)){
            $result = true;
        }else{$result = false;}
    return $result;
}
//////////////
function invalidUid($username){
        $result=0;
        if(!preg_match("/^[a-zA-Z0-9]*$/",$username)){
            $result = true;
        }else{$result = false;}
    return $result;
}
//////////////
function invalidemail($email){
        $result=0;
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $result = true;
        }else{$result = false;}
    return $result;
}
///////////
function passwordMach($pwd,$pwdRepeat){
        $result=0;
        if($pwd !== $pwdRepeat){
            $result = true;
        }else{$result = false;}
    return $result;
}
///////////
function uidExists($con2,$username,$email){
    $result=0;
       $sql="
        SELECT * FROM adminUsers
        WHERE adminUsername = ? OR adminEmail = ? ;
       ";
       $stmt = mysqli_stmt_init($con2);
       if(! mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../sigenUp.php?error=stmtfailed"); 
        exit;
       }
       //check for the type of data for security purpus
       mysqli_stmt_bind_param($stmt,'ss',$username,$email);
       mysqli_stmt_execute($stmt);
       $resultData = mysqli_stmt_get_result($stmt);
       if($row=mysqli_fetch_assoc($resultData)){

            return $row;
       }else{
           $result=false;
           return $result;
       }
       mysqli_stmt_close($stmt);
}
///////////////
$hashedPwd = password_hash($pwd,PASSWORD_DEFAULT);
///////////////////
function createUser($con2,$name,$email,$username,$hashedPwd){
    $result=0;
       $sql="
        INSERT INTO adminUsers(adminFullName,adminUsername,adminEmail,adminPassWord)
        VALUES(?,?,?,?);
       ";
       $stmt = mysqli_stmt_init($con2);
       if(! mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../sigenUp.php?error=stmtfailed"); 
        exit;
       }
       //check for the type of data for security purpus
       mysqli_stmt_bind_param($stmt,'ssss',$name,$email,$username,$hashedPwd);
       mysqli_stmt_execute($stmt);
       mysqli_stmt_close($stmt);
       header("location: ../sigenUp.php?error=none"); 
       exit;
}