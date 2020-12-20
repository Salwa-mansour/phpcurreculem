<?php
    require_once('markup.php');
 
    require_once('curdoprations.php');
  
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my admin control panel</title>
    <link rel="stylesheet" href="../selfstudy/books/style.css" >
</head>
<body>
   <div class="container">
       <h1>my good news</h1>
       <form action="" method="POST">
           <?php
           if($id=$_GET['n']){
           $myresult= editbtn($id);
           newsinput2($myresult['newsid'],$myresult['newstitle'],$myresult['newsdetails'],$myresult['newsdate']);
        
            }else{newsinput2("","","","");}

                buttonElement2("create","create","create");
                buttonElement2("update","update","update");
                buttonElement2("delete","delete","delete");
            if(isset($_POST['update'])){
                updatedata();
            }  
            if(isset($_POST['delete'])){
                deletedata();
            }  
              
              //  readData($result['newsid'],$result['newstitle'],$result['newsdetails'],$result['newsdate']);
           ?>
           
       </form>
         <table>
                <thead>
                    <th>newsid</th>
                    <th>news title</th>
                    <th>news details</th>
                    <th>newsdate</th>
                    <th>edit button</th>
                  <!-- //  <th>delete button</th> -->

        
                </thead>
              <?php     
               $result= getData();
               //$i<the number of rows we need to retrive
            for($i=0;$i<8;$i++) {
     readData3($result[$i]['newsid'],$result[$i]['newstitle'],$result[$i]['newsdetails'],$result[$i]['newsdate']);
    
                 }
               ?>
            
         </table>
   </div>        
                  
                   
           
               
   
</body>
</html>