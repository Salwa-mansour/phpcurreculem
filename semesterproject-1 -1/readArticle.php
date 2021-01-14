
<?php
include_once('oprations.php');
include_once('headernav.php');
$row=gitselectedrow($_GET['n']);
include_once('main.php');
?>
   
        <div class="contentdiv">
            <section>
                <h1 class="readelemnt"><?php echo $row['articleTitle']; ?> </h1>
                <small class="readelemnt"><?php echo $row['publishDate']; ?></small>
                <article>
                <figure>
                    <img class="readelemnt" src="./images/<?php echo $row['articleImgName']; ?>" alt="" width="100%">
                    <figcaption class="readelemnt" >
                    <?php  echo $row['articleSummery']; ?>
                       </figcaption>
                </figure>
                <p class="readelemnt"><?php echo $row['articleDetials']; ?></p>
                </article>
            </section>
        </div>
        <aside>
            <ul class="articleNavigate">
                <li><a href="#">navigation link</a></li>
                <li><a href="#">navigation link</a></li>
                <li><a href="#">navigation link</a></li>
                <li><a href="#">navigation link</a></li>
                <li><a href="#">navigation link</a></li>
            </ul>
        </aside>
 
    <?php
include_once('footer.php');
?>