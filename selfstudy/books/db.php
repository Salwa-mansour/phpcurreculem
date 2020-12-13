<?php
function createdb(){
    $servername = "localhost" ;
    $username = "root" ;
    $password = "" ;
    $dbname = "blog1db";

    //create connection
    $con = mysqli_connect($servername,$username,$password);
    //check connetion
    if (!$con){
        die("connetion failed:(".mysqli_connect_error());

    }
    //create data bace
    $sql = "CREATE DATABASE IF NOT EXISTS $dbname";

    if (mysqli_query($con,$sql)){
        $con = mysqli_connect($servername,$username,$password,$dbname);
        $sql ="
            CREATE TABLE IF NOT EXISTS news2(
            news_id INT(11)  AUTO_INCREMENT,
            news_title VARCHAR(25) NOT NULL,
            news_details VARCHAR(1000),
            news_date TIMESTAMP,
            PRIMARY KEY(news_id)
            );
        ";
        if(mysqli_query($con,$sql)){
            return $con ;
        }else echo "can not create talbe";
    }
    else "Error while creating database".mysqli_error($con);

}
?>