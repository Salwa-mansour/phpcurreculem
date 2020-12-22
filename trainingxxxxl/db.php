<?php  

    function createdb(){
        $servername ='localhost';
        $username = 'root';
        $password = '' ;
        $dbname = 'sonangrydb';

        //create connection to the root schema
        $con =mysqli_connect($servername,$username,$password);
        //check connecion
        if(!$con){
            die("connetion failed ". mysqli_connect_error());
        }
        //create database
        $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
        if(mysqli_query($con,$sql)){
            //connect to the  database
            $con = mysqli_connect($servername,$username,$password,$dbname);
            //create table in the data base
            $sql = "
            CREATE TABLE IF NOT EXISTS mybadnews(
                newsid INT PRIMARY KEY AUTO_INCREMENT,
                newstitle VARCHAR(80) NOT NULL,
                newsdetails VARCHAR(1000),
                newsdate DATE );
            ";
            if(mysqli_query($con,$sql)){
                {echo('YO Programer!');
                return $con;}
            }else{echo('cannot create talbe'.mysqli_error($con));}

        }else {echo('error while creating database'.mysqli_error($con));}
    }
?>