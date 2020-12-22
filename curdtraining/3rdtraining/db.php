<?php

function createdb(){
    $servername='localhost';
    $username='root';
    $passward='';
    $dbname='3rdnewsdb';
    //create conntection to the root user
    $con=mysqli_connect($servername,$username,$passward);
    //check connetction
    if(!$con){
        die('connetion failed'.mysqli_connect_error());
    }
    //create database
    $sql = "CREATE DATABASE IF NOT EXISTS $dbname ;";
    if(mysqli_query($con,$sql)){
        //connect to the created database
        $con=mysqli_connect($servername,$username,$passward,$dbname);
        //defining create statment
        $sql="
            CREATE TABLE IF NOT EXISTS news3(
                newsid INT PRIMARY KEY AUTO_INCREMENT,
                newstilte VARCHAR(20),
                newsdetails VARCHAR(2000),
                newsdate DATE
            );
        ";
        if(mysqli_query($con,$sql)){
        
            return $con;
            //any statmen after return is not gonnana be excuted =>echo
           echo("con returened");
        }else{echo("failed creating tabel".mysqli_error($con));}
    }else{echo('error while creating database'.mysqli_error($con));}


}


?>