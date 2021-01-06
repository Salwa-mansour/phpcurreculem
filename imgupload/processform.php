<?php
/////////////
include_once('db.php');
$con = createdb();

////////////
$msg='';
$css_class=''; 
////////////
if(isset($_POST['save_user'])){
    // echo"<pre>".print_r($_POST)."</pre>";
    // echo"<pre>".print_r($_FILES)."</pre>";
    // echo"<pre>".print_r($_FILES['profileImage'])."</pre>";
    // echo"<pre>".print_r($_FILES['profileImage']['name'])."</pre>";
    // die();
    $bio=$_POST['bio'];
    $profileImageName =time()."_". $_FILES['profileImage']['name'];
    $target ='./images/'. $profileImageName;
    if(move_uploaded_file($_FILES['profileImage']['tmp_name'],$target)):
        $sql = "INSERT INTO imgs2(img,bio) VALUES ('$profileImageName','$bio')";
      if (mysqli_query($con,$sql)):

        $msg='uplaod sucsess';
        $css_class='sucsess_massege';
    //   else: $msg="insert filad";//.mysqli_error($con)
    //         $css_class="failed_massege";
      endif;
    else:
        $msg='uplaod failed';
        $css_class='failed_massege';
    endif;
}

?>