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
        return $con;
      
    }else{echo"failed creating table".mysqli_error($con) ; }
}

?>