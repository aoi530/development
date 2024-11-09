<?php
add_action('wp_enqueue_scripts', 'add_styles');

function add_styles()
{
    // font awesome
    wp_register_style(
        'font-awesome_style',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css',
        array(),
        '1.0'
    );

    // reset style
    wp_register_style(
        'reset_style',
        'https://unpkg.com/ress/dist/ress.min.css',
        array(),
        '1.0'
    );

    // main style
    wp_enqueue_style(
        'main_style',
        get_template_directory_uri() . '/css/main.css',
        array('reset_style', 'font-awesome_style'),
        '1.0'
    );
}

add_action('wp_enqueue_scripts', 'add_scripts');

function add_scripts()
{
    // デフォルトのjQueryを削除
    wp_deregister_script('jquery');

    // jQueryを読み込む
    wp_register_script(
        'jquery_script',
        'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js',
        array(),
        '1.0',
        true
    );

    // メインのスクリプトを読み込む
    wp_enqueue_script(
        'main_script',
        get_template_directory_uri() . '/js/main.js',
        array('jquery_script'),
        '1.0',
        true
    );

}

// アイキャッチ画像を有効化
function setup_theme(  ) {
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme','setup_theme');

// 検索対象を投稿ページだけにする。
function search_filter($query) {
    if ($query -> is_search) {
        $query -> set('post_type','post');
    }
    return $query;
}
add_filter('pre_get_posts','search_filter');

?>