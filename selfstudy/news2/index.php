<?php 
 require_once("markup.php");
 require_once("opration.php")

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>books</title>
    <link rel="stylesheet" href="../books/style.css" >
</head>
<body>
  <main>
      <div class="container">
          <h1>Book Store</h1>
          <div class="displayflex">
              <div class="padding-y2">
              <form action="" method="post">
                   <?php
              newsinput("","","","");

               
              ?>
              <div class="displayflex">
                <?php
                 buttonElement("create","create","create");
                 buttonElement("read","read","read");
                 buttonElement("update","update","update");
                 buttonElement("delete","delete","delete");
                ?>
              </div>
              </form>
              <div class="displayflex">
                  <?php
                  //reade button cklick
           //      if(isset($_POST['read'])){
                $result= getData();
                          readData($result['newsid'],$result['newstitle'],$result['newsdetails'],$result['newsdate']);
            //    }
      
          
                  ?>
                    
      
              
           </div>
              </div>
          </div>
      </div>
  </main> 
</body>
</html>