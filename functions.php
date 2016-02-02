<?php
// add_filter( 'show_admin_bar', '__return_false' );
function my_scripts(){
	if( is_archive() || is_front_page() ){
		wp_enqueue_script('use-masonry', get_stylesheet_directory_uri().'/assets/js/use-masonry.js',array('jquery-masonry','jquery'),'1.0',true );
	}
}
add_action('wp_enqueue_scripts', 'my_scripts');

//navigationのよけいなクラスを削除
add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1);
add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1);
add_filter('page_css_class', 'my_css_attributes_filter', 100, 1);
function my_css_attributes_filter($var) {
	return is_array($var) ? array_intersect($var, array( 'current-menu-item' )) : '';
}
//アイキャッチ画像作成
add_theme_support('post-thumbnails');
//抜粋文用フィルターフック
function new_excerpt_more($more){
	return '... <a class="read_more" href="">>>more</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');
//カテゴリ用サイドバーの定義
register_sidebar(
	array(
		'name' => '過去の作品',
		'id' => 'works_archive',
		'before_widget' => '<div id="sidebar_container">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="sidebar-title">',
		'after_title' => '</h2>',
		));
//カテゴリリンクに前後文字列を追加する
// add_filter ( 'wp_list_categories', 'span_before_link_list_categories' );
// function span_before_link_list_categories( $list ) {
// $list = str_replace('<a href=','<span>・</span><a href=',$list); //リンクテキストの前に「<span>・</span>」を追加（before）
// $list = str_replace('</a>','<span>・</span></a>',$list); //リンクテキストの後に「<span>・</span>」を追加（after）
// return $list;
// }
//既読
function kidoku_scripts() {
	wp_enqueue_script( 'kidoku', get_stylesheet_directory_uri() . '/assets/js/kidoku.js', array( 'jquery' ) );
}
add_action( 'wp_enqueue_scripts', 'kidoku_scripts' );
//particle script
// function particle_scripts(){
// 	wp_enqueue_script('particle', get_stylesheet_directory_uri() . '/assets/js/particle.js','','', true); 
// }
// add_action('wp_enqueue_scripts', 'particle_scripts');
//app script
// function app_scripts(){
// 	wp_enqueue_script('app', get_stylesheet_directory_uri() . '/assets/js/app.js','','', true); 
// }
// add_action('wp_enqueue_scripts', 'app_scripts');
if(wp_is_mobile()){
	function parallax(){
		if(is_page('front')){
			// parallax.js
				wp_enqueue_script( 'parallax', get_stylesheet_directory_uri() . '/assets/js/parallax.js','','', true);
		}
	}
	add_action('wp_enqueue_scripts','parallax');

}else{
	function top_loading(){
		if(is_page('front')){
			// three.min.js
				wp_enqueue_script( 'three', get_stylesheet_directory_uri() . '/assets/js/three.min.js','','', true);
			// Detector.js
				wp_enqueue_script( 'Detector', get_stylesheet_directory_uri() . '/assets/js/Detector.js','','', true);
			// stats.min.js
				wp_enqueue_script( 'stats', get_stylesheet_directory_uri() . '/assets/js/stats.min.js','','', true);
			// top.js
				wp_enqueue_script( 'top', get_stylesheet_directory_uri() . '/assets/js/top.js','','', true);
		}
	}
	add_action('wp_enqueue_scripts','top_loading');
}

//TOPページJSファイル読み込み

?>