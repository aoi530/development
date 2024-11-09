<section class="side-bar">
    <div class="toggle_btn2 fade_in">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <div class="side-bar-top">
        <?php echo do_shortcode('[searchandfilter fields="search" submit_label=""]'); ?>
    </div>
    <nav class="side-bar-menu">
        <ul>
            <li><a href="<?php echo esc_url(home_url('#new')); ?>">NEW</a></li>
            <li><a href="<?php echo esc_url(home_url('/ring')); ?>">RING</a></li>
            <li><a href="<?php echo esc_url(home_url('/necklace')); ?>">NECKLACE</a></li>
            <li><a href="<?php echo esc_url(home_url('/earrings')); ?>">EARRINGS</a></li>
            <li><a href="<?php echo esc_url(home_url('/bracelet')); ?>">BRACELET</a></li>
        </ul>
        <div class="contact"><a href="<?php echo esc_url(home_url('/contact')); ?>">CONTACT</a></div>
    </nav>
    <div class="mask"></div>
</section>