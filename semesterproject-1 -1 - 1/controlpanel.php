<?php
require_once('oprations.php');

require_once('headernav.php');
//  require_once('main.php');

$row = array("articleTitle"=>"", "articleSummery"=>"", "publishDate"=>"", "articleDetials"=>"");
if(isset($_GET['n'])){
    $id=$_GET['n'];
 $row =gitselectedrow($id);
 }



?>

<div class="controls">
<form action="controlpanel.php" method="post" enctype="multipart/form-data" class="inputform" >
    <input type="text" placeholder="article tilte" name="article_title" value="<?php  echo $row['articleTitle']; ?>"  class="borderinput" >
 
    <input type="text" placeholder="article summury" name="article_summury" value="<?php  echo $row['articleSummery']; ?>"  class="borderinput" >
    <input type="date" name="publish_date" value="<?php echo $row['publishDate']; ?>" class="borderinput">
    <textarea name="article_details" id="" cols="80" rows="6" placeholder="article_details" class="borderinput" ><?php  echo $row['articleDetials'];  ?> </textarea>
    <input type="file" name="article_img" id="article_img"  class="borderinput" >
    <button name="save" value="save" class="borderinput" >save</button>
    <button name="update" value="update" class="borderinput" >update</button>
    <button name="delete" value="delete" class="borderinput" >delete</button>
    <input type="hidden" name='editId' value="<?php echo $row['articleId']; ?> ">
    <!-- <button name="update" value="update" > <a href="controlpanel.php?n=<?php// echo $row['articleId']; ?> ">update</a></button>
    <button name="delete" value="delete"> <a href="controlpanel.php?n=<?php //echo $row['articleId']; ?> ">delete</a></button> -->
   </form>
<table>
                <thead>
                    <tr>
                       <th></th>
                       <th>Article title</th>
                       <th>Article summyry</th>
                       <th>publish date</th>
                       <th>Article details</th>
                       <th>Article img</th>
                    </tr> 
                </thead>
                <tbody>
                    <?php if(isset($articles)): 
                        foreach ($articles as $article): ?>
                        <tr>

                        <td><button name="edit"><a href="controlpanel.php?n=<?php echo $article['articleId']; ?> ">edit</a></td>
                           <td> <?php echo $article['articleTitle']; ?> </td>
                           <td> <?php echo $article['articleSummery']; ?> </td>
                           <td> <?php echo $article['publishDate']; ?> </td>
                           <td> <?php echo $article['articleDetials']; ?> </td>
                          
                            <td><img src=" images/<?php echo $article['articleImgName']; ?> " width="100px" alt=""></td>
                          
                        <!-- <audio src="images/1610267454_atumn shrine edited" controls=""></audio>dddd -->
                           
                            
                        </tr>
                    <?php endforeach; ?>
                    <?php endif; ?>
                    
                </tbody>
            </table>
        </div>                
<?php
require_once('main.php');
require_once('footer.php');
?>