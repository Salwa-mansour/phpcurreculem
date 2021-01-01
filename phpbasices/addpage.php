<!-- https://github.com/iamshaunjp/php-mysql-tutorial/blob/lesson-21/add.php -->
<!-- https://www.youtube.com/watch?v=firSTs1bEEY&list=PL4cUxeGkcC9gksOX3Kd9KPo-O68ncT05o&index=21 -->

<?php
if(isset($_POST['submit'])){
		
    // check email
    if(empty($_POST['email'])){
        echo 'An email is required <br />';
    } else{
        echo htmlspecialchars($_POST['email']) . '<br />';
        echo $_POST['email'] . '<br />'; //IDK why to use htmlspecialchars function // this is for preventing from malilcals code coming from the browser!!!!
    }

    // check title
    if(empty($_POST['title'])){
        echo 'A title is required <br />';
    } else{
        echo htmlspecialchars($_POST['title']) . '<br />';
    }

    // check ingredients
    if(empty($_POST['ingredients'])){
     
        echo 'At least one ingredient is required <br />';
    } else{
        // echo htmlspecialchars($_POST['ingredients']) . '<br />';
       $email = $_POST['email'];
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            // echo"not a valid email";
        }
    }

} // end POST check

?>
<!DOCTYPE html>
 <html lang="en">
<?php include('./templates/header.php'); ?>

<section class="common-elemnt contact">
            <!-- <img src="../images/contact.png" alt=""> -->
            <div class="elemnt-txt">
                <h1>Add Pizza</h1>
            <form action="addpage.php" method="post">
                <form action="">
                    <input type="email" placeholder="you email" name="email">
                    <input type="text" placeholder="pizza title" name="title">
                    <input type="text" placeholder="Enter Ingredients" name="ingredients">
           <input type="submit" name="submit" value="submit"></input>
                </form>
          
        </div>
      </section>
<?php include('./templates/footer.php'); ?>
   
</html>