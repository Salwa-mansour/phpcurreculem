<?php
require_once('oprations.php');
require_once('markup.php');
///when clickin on save after edit gitting error
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="./jquery-3.5.1.js">

</script>
<link rel="stylesheet" href="style.css"/>
    
</head>
<body>
    <div class="container">
        <form action="" method="post">
          <?php    
             if($id=$_GET['n']){
                //retreving the selected row as and arry[]
                $myresult=editbtn($id);
                //send the arry(record row ) to the markup generating funcion to  show the values in side the input 
                inputgroup($myresult['empid'],$myresult['empname'],
                $myresult['empemail'],$myresult['empsite'],$myresult['empphon']);
            }else{inputgroup("","","","","");}
          
             ////////
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
    
        </form>
        <div class="controls">
       <h2>@@@@@@@@@@@@@@@@</h2>
        </div>
        <table>
            <thead>
               
                <th>employee id</th>
                <th>employee name</th>
                <th>employee email</th>
                <th>edit</th>
            
            </thead>
            <?php
                   $result = getData();
                   //$i is the number of recoreds we need to retrive
                   for($i=0;$i<2;$i++){
                       dataTableRow($result[$i]['empid'],$result[$i]['empname']
                       ,$result[$i]['empemail']);
                   }
            ?>
        </table>

    </div>
</body>
</html>
