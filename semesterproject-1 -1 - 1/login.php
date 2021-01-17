<?php
include_once('headernav.php');
include_once('main.php');

?>

<section>
    
    <form action="includes/logedin.inc.php" method="post" class="inputform">
    <h2>login</h2>
        <input type="text" name="name" placeholder="emial or name " id="">
        <input type="password" name="pwdrepeat" placeholder="repeat password " id="">
        <button type="submit" name="submituser">login</button>
    </form>
</section>
<?php
    include_once 'footer.php';
?>