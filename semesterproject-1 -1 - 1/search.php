

<?php
include_once('oprations.php');
if(isset($_POST['searchbtn'])){
   $searchResults= search($_POST['searchtxt']);
}
?>


<div>
<form action="search.php" method="post">

<input type="search" placeholder="search text" name="searchtxt">
<button name="searchbtn" value="searchbtn">search</button>

</form>

<div class="searchbox">
                <?php if(isset($searchResults)): 
                 foreach ($searchResults as $searchResult): ?>
                <h2>   
                <a href="readArticle.php?n=<?php echo $searchResult['articleId']; ?> "> <?php echo $searchResult['articleTitle']; ?></a>
                </h2>
                 <?php endforeach; ?>
                <?php endif; ?>
</div>
</div>