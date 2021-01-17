

<?php
require_once('oprations.php');
$articles=getData();

?>
   <?php foreach ($articles as $article): ?>

<div class="article-box">
       
         <img src=" images/<?php echo $article['articleImgName']; ?>"  style="max-width: 100%;" alt="">
            <div class="article-details">
            <h4><?php echo $article['articleTitle']; ?></h4>
            <p><?php echo $article['articleSummery']; ?></p>
         
            <a href="readArticle.php?n=<?php echo $article['articleId']; ?> ">read more</a>
            </div>
         </div>

         <?php endforeach; ?>
     