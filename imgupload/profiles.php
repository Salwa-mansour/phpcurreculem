<?php

 //the file than graps information from the form 
 include_once('processform.php');

 $sql = "SELECT * FROM imgs2";
 $result = mysqli_query($con,$sql);
 $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
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
            <table>
                <thead>
                    <tr>
                       <th>img</th>
                       <th>bio</th>
                    </tr> 
                </thead>
                <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><img src=" images/<?php echo $user['img']; ?> " width="100px" alt=""></td>
                            <td> <?php echo $user['bio']; ?> </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
   
    </div>

    <script src="script.js"></script>
</body>
</html>
