<?php get_header("page"); ?>
<main>
<?php get_sidebar("page"); ?>

<?php
if (have_posts()):
    while (have_posts()):
        the_post();
        // 本文の内容を表示
        the_content();
    endwhile;
endif;
?>
</main>
<?php get_footer("page"); ?>