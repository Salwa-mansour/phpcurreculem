<?php
include_once('dbh.inc.php');


if(isset($_POST["submituser"])){
       
    $name=$_POST['name'];
    $email=$_POST['email'];
    $username=$_POST['uid'];
    $pwd=$_POST['pwd'];
    $pwdRepeat=$_POST['pwdrepeat'];

 require_once('dbh.inc.php');
 require_once('functions.inc.php'); 
 //we use !== false to be sure that the returned value is the opsite of false wich is
 // true and not any other result wich may cosiedred by the langeus as true
    if(emptyInputSignup($name,$email,$username,$pwd,$pwdRepeat) !== false){
        header("location: ../sigenUp.php?error=emptyinput");
        //exit to stop the script from running if any thing is going weird
        exit();
    }

    if(invalidUid($username) !== false){
        header("location: ../sigenUp.php?error=invaliduid");
        //exit to stop the script from running if any thing is going weird
        exit();
    }

    if(invalidemail($email) !== false){
        header("location: ../sigenUp.php?error=invalidemail");
        //exit to stop the script from running if any thing is going weird
        exit();
    }

    if(passwordMach($pwd,$pwdRepeat) !== false){
        header("location: ../sigenUp.php?error=pwdnotmatching");
        //exit to stop the script from running if any thing is going weird
        exit();
    }

    if(uidExists($con2,$username) !== false){
        header("location: ../sigenUp.php?error=usernametaken");
        //exit to stop the script from running if any thing is going weird
        exit();
    }

//if reach here no mistake
    createUser($con2,$name,$email,$username,$pwd);




}else{
    header("location: ../sigenUp.php");
    exit();
}