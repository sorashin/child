<?php
/****************************************

	header.php

	Webサイトのヘッダー部分を表示するための
	テンプレートファイルです。

	header.php のコードについては、
	CHAPTER 8 で詳しく説明しています。

*****************************************/
?>
<!DOCTYPE html>
<html lang='ja'>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title>
	<?php if ( !is_front_page() /* !is_front_page() に書き換えよう！（CHAPTER 8） */ ) {
		wp_title( '::', true, 'right' );
	}
	bloginfo( 'name' ); ?>
	</title>
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" />
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" media="screen" />
	<link href="http://fonts.googleapis.com/css?family=Josefin+Sans:400,600,700" rel="stylesheet" />
	<?php if(is_front_page()):?>
		<meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
	<?php endif; ?>
	<?php if ( is_singular() ) {
		wp_enqueue_script( 'comment-reply' );
	}
	// コメント欄をポップアップで表示したいなら、下記を有効にする
	// comments_popup_script(); ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!-- <div id="particles-js"></div> -->
	<?php if(!is_front_page()):?>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
  	var js, fjs = d.getElementsByTagName(s)[0];
  	if (d.getElementById(id)) return;
  	js = d.createElement(s); js.id = id;
  	js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
  	fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	
	<div id="container">
		<!-- header -->
		<div id="header" class="clearfix">
			<div class="aligncenter">
				<h1 id="logo"><a href="<?php echo home_url( '/' ); ?>"><span><img src="<?php echo get_stylesheet_directory_uri() ?>/images/logo.png"></a></h1>
			</div>
			<!-- <?php
			$custom = array(
			//コンテナ
  			//ulタグの外側に設定するタグを入力。
			  //デフォルトはdiv。falseで無しに設定可
			    'container'       => 'div', 
			  //コンテナのクラス値を設定
			    'container_class' => '',
			  //コンテナのIDを設定
			    'container_id'    => '',
			//リスト
			  //ulタグをカスタマイズ。
			  //'%3$s'のみでulタグを無しに設定可
			    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			  //ulタグに設定するクラス値を設定
			    'menu_class'      => 'menuA',
			  //ulタグに設定するIDを設定
			    'menu_id'         => '',
			//テキスト
			  //aタグ内のテキスト前後に追加するテキスト
			    'before'          => '',
			    'after'           => '',
			  //aタグの前後に追加するテキスト
			    'link_before'     => '',
			    'link_after'      => '',
			);
			wp_nav_menu($custom); 
			?> -->
			<div id="nav">
				<ul>
					<li class="nav-btn <?php if (is_page('about')){ echo ' current_nav';}?>"><a href="<?php echo home_url( '/' ); ?>/about/"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/about.png" alt=""/></a></li>
					<li class="nav-btn <?php if (is_tax()||is_singular('works')){ echo ' current_nav';}?>"><a href="<?php echo home_url( '/' ); ?>/worksarchive/all/"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/works.png" alt=""/></a></li>
					<li class="nav-btn <?php if (is_category()||in_category(array('news','workshop'))){ echo ' current_nav';}?>"><a href="<?php echo home_url( '/' ); ?>/category/all/"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/blog.png" alt=""/></a></li>
					<li class="nav-btn <?php if (is_page('contact')){ echo ' current_nav';}?>"><a href="<?php echo home_url( '/' ); ?>/contact/"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/contact.png" alt=""/></a></li>
					<li class="nav-btn <?php if (is_page('f_a_q')){ echo ' current_nav';}?>"><a href="<?php echo home_url( '/' ); ?>/f_a_q/"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/f_a_q.png" alt=""/></a></li>
				</ul>
			</div>
			<ul class="kumo">
				<li><p><img src="<?php echo get_stylesheet_directory_uri() ?>/images/kumoA.png"></p></li>
				<li><p><img src="<?php echo get_stylesheet_directory_uri() ?>/images/kumoA.png"></p></li>
				<li><p><img src="<?php echo get_stylesheet_directory_uri() ?>/images/kumoA.png"></p></li>
			</ul>
		</div>
	<?php endif;?>
		<!-- header -->
<!-- /header.php -->