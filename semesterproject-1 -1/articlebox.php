

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
            <!-- <a href="./readArticle.php" class="readmore">read more</a> -->
            <a href="readArticle.php?n=<?php echo $article['articleId']; ?> ">read more</a>
            </div>
         </div>

         <?php endforeach; ?>
            <!-- <div class="article-box">
       
         <img src="./images/wide1.jpg" style="max-width: 100%;" alt="">
            <div class="article-details">
            <h4>los ansulos</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente illo vel eveniet, fugiat inventore eius? Tempora impedit fugiat, praesentium ipsam beatae fugit excepturi dignissimos earum eius architecto vero in qui.</p>
            <a href="./readArticle.php" class="readmore">read more</a>
            </div>
         </div>
        <div class="article-box">
       
         <img src="./images/wide1.jpg" style="max-width: 100%;" alt="">
            <div class="article-details">
            <h4>los ansulos</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente illo vel eveniet, fugiat inventore eius? Tempora impedit fugiat, praesentium ipsam beatae fugit excepturi dignissimos earum eius architecto vero in qui.</p>
            <a href="./readArticle.php" class="readmore">read more</a>
            </div>
         </div>  -->