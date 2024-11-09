<?php get_header("page"); ?>
<main>
    <?php get_sidebar("page"); ?>
    <section class="products">
        <article id="search">
            <h3>検索結果：「<?php echo $_GET['s']; ?>」の記事一覧</h3>
            <div class="grid">
                <?php while (have_posts()):
                    the_post(); ?>
                    <?php
                    $cat = get_the_category();
                    $catname = $cat[0]->cat_name;
                    ?>
                    <div class="item fade_in">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail(null, array('class' => 'post-thumb')); ?></a>
                        <div class="item-content">
                            <a href="<?php the_permalink(); ?>" class="price"><?php the_title(); ?></a>
                            <a href="<?php the_permalink(); ?>" class="material"><?php the_excerpt(); ?></a>
                        </div>
                    </div>
                <?php endwhile;
                wp_reset_query();
                ?>
            </div>
        </article>
        <div class="link-text">
            <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>" class="back">Back</a>
        </div>
    </section>
</main>
<?php get_footer("page"); ?>