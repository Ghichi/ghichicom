<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}

// カスタム投稿タイプ・カスタム分類
add_action('init', 'register_post_type_and_taxonomy');
function register_post_type_and_taxonomy() {
  register_post_type(
    'learn',
    array(
      'labels' => array(
        'name' => '学ぶ会',
        'add_new_item' => '学ぶ会を追加',
        'edit_item' => '学ぶ会の編集',
      ),
      'public' => true,
      'hierarchical' => true,
      'supports' => array(
        'title',
        'editor',
        'excerpt',
        'custom-fields',
        'thumbnail',
        'page-attributes',
      ),
    )
  );
}
