<?php
    require_once('markup.php');
 
    require_once('curdoprations.php');
  
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../selfstudy/books/style.css" >
</head>
<body>
   <div class="container">
       <h1>my bad news</h1>
       <form action="" method="POST">
           <?php
                newsinput2("","","","");
                buttonElement2("create","create","create");
              
              
              //  readData($result['newsid'],$result['newstitle'],$result['newsdetails'],$result['newsdate']);
           ?>
           
       </form>
         <table>
                <thead>
                    <th>newsid</th>
                    <th>news title</th>
                    <th>news details</th>
                    <th>newsdate</th>
                    <th>update button</th>
                    <th>delete button</th>

        
                </thead>
              <?php     
               $result[]= getData();
           readData3($result[0],$result[1],$result[1],$result[0]);
        
            
                
                   ?>
                   
           
                </table>
   </div>
   
</body>
</html>