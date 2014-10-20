<?php
//require_once(dirname(__FILE__) . "/myFunctions.php");
require_once(dirname(__FILE__) . "/Stakeholder.php");
require_once(dirname(__FILE__) . "/domain.php");
$stakeholder = Stakeholder::__getInstance(0);

// サイドバーのウィジェット
for($i = 0; $i < $stakeholder -> getStakeholderLength(); $i++){
	register_sidebar( array(
		'name' => __( $stakeholder -> getStakeholderNameOne($i) ),
		'id' => 'side-widget-' . $stakeholder -> getStakeholderNameOne($i),
		'before_widget' => '<li class="widget-container '. $stakeholder -> getStakeholderNameOne($i) . '">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="menu-title">',
		'after_title' => '</h3>',
	) );
}

// サイドバーカスタムメニューの利用
add_theme_support('menus');
// フッターエリアのウィジェット
register_sidebar( array(
	'name' => __( 'Footer Widget' ),
	'id' => 'footer-widget',
	'before_widget' => '<div class="widget-area"><ul><li class="widget-container">',
	'after_widget' => '</li></ul></div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
) );

// アイキャッチ画像
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size(220, 165, true ); // 幅 220px、高さ 165px、切り抜きモード