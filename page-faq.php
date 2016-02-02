<?php
/*Template Name: FAQ*/
get_header(); ?>
<!-- page.php -->
<div id="main">
<h4 class="aligncenter faq_title">このページでは、現役ゼミ羊が、<br>論系選びに迷う子羊くんの質問に、<br>答えていきます。</h4>
<div class="aligncenter">
	<div id="faq_setting">
		<div class="fresh_exp">
			<img src="<?php echo get_stylesheet_directory_uri() ?>/images/icon_freshHitsuji_large.png" alt="">
			<h3>迷える子羊</h3>
			<p>ゼミの選び方で迷える子羊文構生。<br>デジタルメディア論ゼミに興味はあるものの、<br>決め手が見つからず、迷っている。</p>
		</div>
		<div class="DM_exp">
			<img src="<?php echo get_stylesheet_directory_uri() ?>/images/icon_DMHitsuji_large.png" alt="">
			<h3>草原ゼミの羊</h3>
			<p>デジタル・メディア論ゼミマスコットキャラクターの羊。<br>オスかメスかで意見が割れるが、その真相は闇の中。<br>いつもそっぽを向いてるわりにはお世話好き！</p>
		</div>
	</div>
</div>
<?php

	if ( have_posts() ) : // WordPress ループ
		while ( have_posts() ) : the_post(); // 繰り返し処理開始 ?>

			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php the_content(); ?>
			</div>
		<?php endwhile; // 繰り返し処理終了
	else : // ここから記事が見つからなかった場合の処理 ?>
			<div class="post page">
				<h2>ページがありません</h2>
				<p>お探しのページは見つかりませんでした。</p>
			</div>
	<?php endif; ?>
</div>
<!-- /main -->
<!-- /page.php -->
<?php
get_footer(); ?>