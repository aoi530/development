<?php get_header("page"); ?>
<main>
    <?php get_sidebar("page"); ?>
    <section class="products">
        <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post();
        ?>
                <div class="item-img">
                    <?php the_post_thumbnail(null, array('class' => 'single_main_thumb')); ?>
                    <?php the_post_thumbnail(null, array('class' => 'single_main_thumb')); ?>
                    <?php the_post_thumbnail(null, array('class' => 'single_main_thumb')); ?>
                </div>
                <div class="item-text">
                    <div class="item-title">
                        <h1 class="page-title"><?php the_title(); ?></h1>
                    </div>
                    <div class="item-inner">
                        <?php the_content(); ?>
                        <?php the_meta(); ?>
                    </div>
                    <div class="link-text">
                        <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>" class="back">Back</a>
                    </div>
                </div>
            <?php
            endwhile;
        else :
            ?>
            <p>投稿データはありません</p>
        <?php endif; ?>
    </section>
</main>
<?php get_footer("page"); ?>