<?php 

function createdb(){
    $serverName='localhost';
    $userName='root';
    $passWrod='';
    $dbName='articleblog';

    $con=mysqli_connect($serverName,$userName,$passWrod);
      $sql="CREATE DATABASE IF NOT EXISTS $dbName";
    if(mysqli_query($con,$sql)){
     $sql="
        CREATE TABLE IF NOT EXISTS articles(
            articleId INT AUTO_INCREMENT PRIMARY KEY,
            articleTitle VARCHAR(100) ,
            publishDate DATE,
            articleSummery VARCHAR(300),
            articleDetials VARCHAR(10000),
            articleImgName VARCHAR(100)
        );

      
     ";
     $con=mysqli_connect($serverName,$userName,$passWrod,$dbName);
    }else{echo"connection to root failed".mysqli_connect_error();}

    if(mysqli_query($con,$sql)){
        //   echo'hello good programer';
        $sql="
        CREATE TABLE IF NOT EXISTS adminUsers(
              adminId INT AUTO_INCREMENT PRIMARY KEY,
              adminFullName VARCHAR(40) ,
              adminUsername VARCHAR(20),
              adminEmail VARCHAR(40),
              adminPassWord VARCHAR(15)
             );
        ";
       
      
    }else{echo"failed creating table1".mysqli_error($con) ; }

    if(mysqli_query($con,$sql)){
         return $con;
    }else{echo"failed crateing table2".mysqli_error($con);}
}
// CREATE TABLE IF NOT EXISTS adminUsers(
//     adminId INT AUTO_INCREMENT PRIMARY KEY,
//     adminFullName VARCHAR(40) ,
//     adminUsername VARCHAR(20),
//     adminEmail VARCHAR(40),
//     adminPassWord VARCHAR(15)
// );
?>