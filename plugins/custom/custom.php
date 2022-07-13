<?php
/*
Plugin Name: カスタム投稿タイプ
Plugin URI: 
Description: カスタム投稿タイプを追加します
Version: 1.0
Author: Yuki Muto
Author URI: 
License: None
*/

// カスタム投稿タイプの設定
function create_post_type(){
$supports = array(
	'title',
	'editor'
);

register_post_type('about',
	array(
	'label' => 'Nakanoya吉兵衛について',
	'public' => true,
	'supports' => $supports
	)
);

register_post_type('information_room',
	array(
	'label' => 'お部屋情報',
	'public' => true,
	'supports' => $supports
	)
);

register_post_type('activity',
	array(
	'label' => 'アクティビティ',
	'public' => true,
	'supports' => $supports
	)
);

register_post_type('food_menu',
	array(
	'label' => 'お食事メニュー',
	'public' => true,
	'supports' => $supports
	)
);

register_post_type('rental_room',
	array(
	'label' => 'レンタルルーム',
	'public' => true,
	'supports' => $supports
	)
);

register_post_type('access',
	array(
	'label' => 'アクセス',
	'public' => true,
	'supports' => $supports
	)
);

register_post_type('contact',
	array(
	'label' => 'お問い合わせ',
	'public' => true,
	'supports' => $supports
	)
);

register_post_type('footer',
	array(
	'label' => 'フッター',
	'public' => true,
	'supports' => $supports
	)
);

}
add_action('init','create_post_type');