<?php 

	// css,jsファイル読み込み
	function add_files(){
		wp_enqueue_style( 'destyle', 'https://cdn.jsdelivr.net/npm/destyle.css@1.0.15/destyle.css', array(), '1.0.15', 'all' );
		wp_enqueue_style('css', get_template_directory_uri().'/assets/css/style.css', array(),'1.0.0','all');
		wp_enqueue_script('js', get_template_directory_uri().'/assets/js/main.js', array('jquery'), '1.0.0', 'all');
	}
	add_action( 'wp_enqueue_scripts', 'add_files' );

	// タイトル・フィードの設定
	function setup_my_theme() {
		add_theme_support( 'title-tag' );
		add_theme_support( 'automatic-feed-links' );
	 }
	 add_action( 'after_setup_theme', 'setup_my_theme');

