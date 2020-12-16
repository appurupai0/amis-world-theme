<?php

//サムネイル(アイキャッチ)設定ができるようにする追加機能
add_theme_support('post-thumbnails');


// カスタム投稿タイプの追加
add_action( ‘init’, ‘create_post_type’ );
function create_post_type() {
register_post_type( ‘news-blog’, // 投稿タイプ名の定義
array(
‘labels’ => array(
‘name’ => __( ‘新着ブログ＆ニュース’ ), // 表示する投稿タイプ名
‘singular_name’ => __( ‘新着ブログ＆ニュース’ )
),
‘public’ => true,
‘menu_position’ =>5,
)
);
}