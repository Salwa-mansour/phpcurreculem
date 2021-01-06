<?php
    function createdb(){

 $con=mysqli_connect('localhost','root','');
 $sql="CREATE DATABASE IF NOT EXISTS imgdb";

 if( mysqli_query($con,$sql)){
     $sql='CREATE TABLE IF NOT EXISTS imgs2(
         id INT(11) AUTO_INCREMENT PRIMARY KEY ,
         img VARCHAR(40) ,
         bio VARCHAR(300)
     )';
    $con=mysqli_connect('localhost','root','','imgdb');

 }else{echo"connect field".mysqli_connect_error();}
   if(mysqli_query($con,$sql)){
      return $con;
   }else{echo"databs create error".mysqli_error($con);}
}

?>