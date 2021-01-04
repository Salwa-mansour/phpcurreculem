<?php
 include_once('db.php');
 createdb();
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
    <div class="fromdiv">
    <form action="processform.php" method="post" class="myform" enctype="multipart/form-data">
    
    <label for="profileImage">profileImge</label>
    <input type="file" name="profileImage" id="">
    <label for="bio">bio</label>
    <textarea name="bio" id="" cols="30" rows="10"></textarea>
    <button type="submit" name="save_user">save user</button>
    </form>
    </div>
</body>
</html>
