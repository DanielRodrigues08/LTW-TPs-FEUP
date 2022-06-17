<?php function output_article_list($articles)
{ ?>
    <section id="news">
        <?php
        foreach ($articles as $article) {
            echo '<article>' .
                '<header><h1><a href = "article.php?id=' . $article['id'] . '">' . $article['title'] . '</a></h1></header>' .
                '<img src="https://picsum.photos/600/300?business" alt="">' .
                '<p>' . $article['introduction'] . '</p>' .
                '<p>' . $article['fulltext'] . '</p>' .
                '<footer>' .
                '<span class="author">' . $article['username'] . '</span>' .
                '<span class="tags">';
            $tags = explode(',', $article['tags']);
            foreach ($tags as $tag) {
                echo '<a href="index.html">#' . $tag . '</a> ';
            }
            echo '</span>';
            $date = date('F j', $article['published']);
            echo '<span class="date">' . $date . '</span>' .
                '<a class="comments" href="item.html#comments">' . $article['comments'] . '</a>' .
                '</footer>' .
                '</article>';
        }
        ?>
    </section>
<?php } ?>

<?php function output_article($article){>
    <header>
    <h1><a href='article.php?id='<?=$article['id']?>> <?=$article['title']?> </a></h1>
    </header>
    <img src="https://picsum.photos/600/300?business" alt="">
    <p><?=$article['introduction']?></p>
    <p><?=$article['fulltext']?></p>
<?php } ?>