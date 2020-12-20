<?php

function createdb(){
    $servername='localhost';
    $username='root';
    $password='';
    $dbname='2ndnewsdb';
    //create connection to the root schema
    $con=mysqli_connect($servername,$username,$password);
    //check connection
    if(!$con){
        die('connection failed '.mysqli_connect_error());
    }
    //create database
    $sql ="CREATE DATABASE IF NOT EXISTS $dbname";
    if(mysqli_query($con,$sql)){
        //connect to database
        $con=mysqli_connect($servername,$username,$password,$dbname);
        //defining create statment 
        $sql = "
        CREATE TABLE IF NOT EXISTS news2(
            newsid INT PRIMARY KEY AUTO_INCREMENT,
            newstitle VARCHAR(40),
            newsdetails VARCHAR(2000),
            newsdate DATE
        );
        ";
        if(mysqli_query($con,$sql)){
           
            return $con;
        }else{echo("cannot create table".mysqli_error($con));}
    }else{echo('error while creating database'.mysqli_error($con));}
}



?>