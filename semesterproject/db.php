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
            article_id INT AUTO_INCREMENT PRIMARY KEY,
            article_title VARCHAR(100) ,
            article_summery VARCHAR(300),
            article_detials VARCHAR(10000),
            publish_date DATE
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