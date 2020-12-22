<?php

function createdb($servername,$username,$password,$dbname){
   $con = mysqli_connect($servername,$username,$password);
   if(!$con){
       die('connect error'.mysqli_connect_error());
   }
   $sql="CREATE DATABASE IF NOT EXISTS $dbname";
   if(mysqli_query($con,$sql)){
        $con = mysqli_connect($servername,$username,$password,$dbname);
     
   }else{echo('error whil creating database'.mysqli_error($con));}
  /////////////
  $sql="
  CREATE TABLE IF NOT EXISTS emp(
      empid INT PRIMARY KEY AUTO_INCREMENT,
      empname VARCHAR(20) ,
      empemail VARCHAR(20) ,
      empsite VARCHAR(20) ,
     
     empphon VARCHAR(10)
  );
  ";
  if(mysqli_query($con,$sql)){
      return $con;
  }else{echo('table create error'.mysqli_error($con));}
}

?>