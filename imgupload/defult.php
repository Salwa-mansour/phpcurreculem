<?php

 //the file than graps information from the form 
 include_once('processform.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
<?php include('style.css') ; ?>
</style>
<body>
    <div class="info">
        <h1>Lorem, ipsum dolor.</h1>
        <?php if(!empty($msg)):   ?>
            <p class="massege <?php echo $css_class; ?>"  > <?php echo $msg; ?> </p>
          
            <?php endif; ?>
    </div>
    <div class="centerdiv">

    <form action="defult.php" method="post" class="myform" enctype="multipart/form-data">
    
    <label for="profileImage">choose profileImge</label>
    <input type="file" name="profileImage" id="profileImage" onchange="displayImage(this)" style="display: none;">
    <img src="./images/placeholder.png" alt="" id="profileDisplay" onclick="triggerClick()">
    <label for="bio">bio</label>
    <textarea name="bio" id="" cols="30" rows="10"></textarea>
    <button type="submit" name="save_user">save user</button>
    </form>
    </div>

    <script src="script.js"></script>
</body>
</html>
