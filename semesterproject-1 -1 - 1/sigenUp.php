<?php
include_once('headernav.php');
include_once('main.php');
// include_once('includes/signUp.inc.php');
// echo(uidExists($con2,$username,$email).'hello') ;
?>

<section>

    <form action="includes/signUp.inc.php" method="post" class="inputform">
    <h2>sign up</h2>
        <input type="text" name="name" placeholder="full name " id="">
        <input type="email" name="email" placeholder="emial " id="">
        <input type="text" name="uid" placeholder="username " id="">
        <input type="password" name="pwd" placeholder="password " id="">
        <input type="password" name="pwdrepeat" placeholder="repeat password " id="">
        <button type="submit" name="submituser">sigen up</button>
    </form>
</section>
<?php
    include_once 'footer.php';
?>