<?php
require_once('oparation.php');
require_once('markup.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2admin control panel</title>
    <link rel="stylesheet" href="styel.css">
</head>
<body>
    <div class="container">
        <h1>my 2nd training</h1>
        <form action="" method="post">
            <?php
           if($id=$_GET['n']){
               //retreving the selected row as and arry[]
               $myresult=editbtn($id);
               //send the arry(record row ) to the markup generating funcion to  show the values in side the input 
               inputsqure($myresult['newsid'],$myresult['newstitle'],
               $myresult['newsdetails'],$myresult['newsdate']);
           }else{inputsqure("","","","");}
         
            ?>
              <div class="controlbtns">
           <?php
           buttonElement("create");
           buttonElement("update");
           buttonElement("delete");
           if(isset($_POST['update'])){
            updateData();
           }

           if(isset($_POST['delete'])){
            deleteData();
           }
           ?>
           </div>
            
        </form>
        <!-- //////////////////// -->
        <table>
            <thead>
                <th>newsid</th>
                <th>new title</th>
                <th>new details</th>
                <th>new date</th>
                <th>edit</th>

            </thead>
            <?php
            $result = getData();
            //$i is the number of recoreds we need to retrive
            for($i=0;$i<6;$i++){
                dataTableRow($result[$i]['newsid'],$result[$i]['newstitle']
                ,$result[$i]['newsdetails'],$result[$i]['newsdate']);
            }
            
            ?>
        </table>
    </div>
</body>
</html>