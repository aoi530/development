<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>DEVELOPMENT</title>
    <meta name="description" content=" ">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>
</head>

<body>
    <header class="visible-area">
        <div class="fixed-content">
            <div class="toggle_btn-wrapper">
                <div class="toggle_btn">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <h1 class="logo"><a href="<?php echo esc_url(home_url()); ?>">DEVELOP<br>MENT</a></h1>
        </div>
        <?php echo do_shortcode('[searchandfilter fields="search" submit_label=""]'); ?>
        <nav class="header-menu">
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
    </header>