<?php
require_once('oprations.php');

require_once('headernav.php');
require_once('main.php');

// $_GET['n']="";

$row = array("articleTitle"=>"", "articleSummery"=>"", "publishDate"=>"", "articleDetials"=>"");
if($id=$_GET['n']){
 $row =editbtn($id);
 }
$articles=getData();

?>


<form action="controlpanel.php" method="post" enctype="multipart/form-data">
    <input type="text" placeholder="article tilte" name="article_title" value="<?php echo $row['articleTitle']; ?>">
    <!-- <input type="text" placeholder="article tilte" name="article_title" value="<?php echo $articles[$_GET['n']]['articleTitle']; ?>"> -->
    <input type="text" placeholder="article summury" name="article_summury" value="<?php  echo $row['articleSummery']; ?>">
    <input type="date" name="publish_date" value="<?php echo $row['publishDate']; ?>">
    <textarea name="article_details" id="" cols="80" rows="6" placeholder="article_details"><?php  echo $row['articleDetials'];  ?></textarea>
    <input type="file" name="article_img" id="article_img" >
    <!-- <input type="file" name="profileImage" id="profileImage" "> -->
    <button name="save" value="save">save</button>
    <button name="update" value="update">update</button>
    <button name="detele" value="detele">detele</button>
    
</form>

<table>
                <thead>
                    <tr>
                       <th>Article title</th>
                       <th>Article summyry</th>
                       <th>publish date</th>
                       <th>Article details</th>
                       <th>Article img</th>
                    </tr> 
                </thead>
                <tbody>
                    <?php foreach ($articles as $article): ?>
                        <tr>

                          
                           <td> <?php echo $article['articleTitle']; ?> </td>
                           <td> <?php echo $article['articleSummery']; ?> </td>
                           <td> <?php echo $article['publishDate']; ?> </td>
                           <td> <?php echo $article['articleDetials']; ?> </td>
                          
                            <td><img src=" images/<?php echo $article['articleImgName']; ?> " width="100px" alt=""></td>
                            <td><button name="edit"><a href="controlpanel.php?n=<?php echo $article['articleId']; ?> ">edit</td>
                        <!-- <audio src="images/1610267454_atumn shrine edited" controls=""></audio>dddd -->
                           
                            
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

<?php
require_once('footer.php')
?>