<?php get_header("top"); ?>

<main class="active-area">
    <?php get_sidebar("top"); ?>
    <section class="products">
        <div class="box">
            <article id="new">
                <h3 class="fade_in">New</h3>
                <div class="grid">
                    <?php
                    $args = [
                        'category_name' => 'new',
                        'posts_per_page' => -1,
                    ];
                    $the_query = new WP_Query($args);
                    ?>
                    <?php
                    if ($the_query->have_posts()) :
                        while ($the_query->have_posts()) :
                            $the_query->the_post();
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
                        wp_reset_postdata();
                    endif;
                    ?>
                </div>
            </article>
            <article id="ring">
                <h3 class="fade_in"><a href="<?php echo esc_url(home_url('/ring')); ?>">Ring</a></h3>
                <div class="grid">
                    <?php
                    $args = [
                        'category_name' => 'ring',
                        'posts_per_page' => 6,
                    ];
                    ?>
                    <?php
                    $ring_pages = new WP_Query($args);

                    while ($ring_pages->have_posts()) :
                        $ring_pages->the_post();
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
            <article id="necklace">
                <h3 class="fade_in"><a href="<?php echo esc_url(home_url('/necklace')); ?>">Necklace</a></h3>
                <div class="grid">
                    <?php
                    $args = [
                        'category_name' => 'necklace',
                        'posts_per_page' => 6,
                    ];
                    ?>
                    <?php
                    $necklace_pages = new WP_Query($args);

                    while ($necklace_pages->have_posts()) :
                        $necklace_pages->the_post();
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
        </div>
        </article>
        <article id="earrings">
            <h3 class="fade_in"><a href="<?php echo esc_url(home_url('/earrings')); ?>">Earrings</a></h3>
            <div class="grid">
            <?php
                $args = [
                    'category_name' => 'earrings',
                    'posts_per_page' => 6,
                ];
                ?>
                <?php
                $earrings_pages = new WP_Query($args);

                while ($earrings_pages->have_posts()) :
                    $earrings_pages->the_post();
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
        <article id="bracelet">
            <h3 class="fade_in"><a href="<?php esc_url(home_url('/bracelet')); ?>">Bracelet</a></h3>
            <div class="grid">
            <?php
                $args = [
                    'category_name' => 'bracelet',
                    'posts_per_page' => 6,
                ];
                ?>
                <?php
                $bracelet_pages = new WP_Query($args);

                while ($bracelet_pages->have_posts()) :
                    $bracelet_pages->the_post();
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
            </div>
        </article>
        <footer>
            <p>©DEVELOPMENT</p>
        </footer>
        </div>
    </section>
</main>
<?php get_footer("top"); ?>