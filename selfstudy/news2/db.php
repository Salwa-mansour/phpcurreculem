<?php

    function createdb(){
      $servername = "localhost";
      $username = "root" ;
      $passward =  "" ;
      $dbname = "newsdb";

       //create connection to the root schema
      $con = mysqli_connect($servername,$username,$passward);
      //check connection
      if(!$con){
          die("connection Failed ".mysqli_connect_error());

      }
      //create database
      $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
        if(mysqli_query($con,$sql)){
               //create connection to the database created newsdb 
              $con = mysqli_connect($servername,$username,$passward,$dbname);
              //create table in the database
              $sql = "
                CREATE TABLE IF NOT EXISTS mynews(
                    newsid INT(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
                    newstitle VARCHAR(40) NOT NULL,
                    newsdetails VARCHAR(2000),
                    newsdate DATE
                ) ;
                ";
                if(mysqli_query($con,$sql)){
                    return $con;
                }else{
                  echo("cannot create table");
                }
             
           } else {echo "error while creating data base".mysqli_error($con);}
             }
?>