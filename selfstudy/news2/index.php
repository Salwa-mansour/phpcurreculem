<?php 
 require_once("../books/function.php");
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
               <span>id</span>
               <h1>news title</h1>
               <p>news details</p>
               <small>date</small>
           </div>
              </div>
          </div>
      </div>
  </main> 
</body>
</html>