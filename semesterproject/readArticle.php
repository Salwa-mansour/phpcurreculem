
<?php
include_once('oprations.php');
include_once('headernav.php');
$row=editbtn($_GET['n']);
include_once('main.php');
?>
   
        <div class="contentdiv">
            <section>
                <h1><?php echo $row['articleTitle']; ?> </h1>
                <small><?php echo $row['publishDate']; ?></small>
                <article>
                <figure>
                    <img src="./images/<?php echo $row['articleImgName']; ?>" alt="" width="100%">
                    <figcaption>
                    <?php  echo $row['articleSummery']; ?>
                       </figcaption>
                </figure>
                <p><?php echo $row['publishDate']; ?></p>
                </article>
            </section>
        </div>
        <aside>
            <ul class="articleNavigate">
                <li><a href="#">artichle title</a></li>
                <li><a href="#">artichle title</a></li>
                <li><a href="#">artichle title</a></li>
                <li><a href="#">artichle title</a></li>
                <li><a href="#">artichle title</a></li>
            </ul>
        </aside>
 
    <?php
include_once('footer.php');
?>