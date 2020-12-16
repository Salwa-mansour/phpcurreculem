<?php

require_once("function.php");
require_once("operation.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        
        <div class="container">
            <h1 >Book Store</h1>

            <div class="display_flex">
                <form action="" method="post" class="width50">
                    <!-- <div class="padding-y2">
                        <input type="text" placeholder="id">
                        <input type="button" value="hollo">
                    </div> -->
                     <?php

                // inputElement("eendn","jll","nb","ibg");
                // inputElement("eeee","eeww","dfdd","eee");
                newsinput(1,""," ","");
            ?>
                <div class="displayfelx">
                    <!-- <button>Create</button> -->
                    <?php
                        buttonElement("Create","create","noattr") ;
                        buttonElement("read","read","noattr") ;
                        buttonElement("update","update","noattr") ;
                        buttonElement("delete","delete","noattr") ;
                    ?>
                </div>
                </form>

            </div>
           <div class="displayflex">
               <span>id</span>
               <h1>news title</h1>
               <p>news details</p>
               <small>date</small>
           </div>
        </div>
    </main>
</body>
</html>