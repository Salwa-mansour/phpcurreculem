 <?php
 
 require_once("db.php");
 require_once("../books/function.php");
 // تضمين متغير الاتصال هنا من اجل استخدامه في  دوال الحذف و الاضافة و التعديل
 $con= createdb();
 
 //create button click
            if(isset($_POST['create'])){
                createData();
            }

        function createData(){
            $newsid = $_POST['news_number'];
            $newstitle = $_POST['news_title'];
            $newsdetails = $_POST['news_details'];
            $newsdate = $_POST['news_date'];
        }
 ?>