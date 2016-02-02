<?php
/****************************************

	single-works.php

	個別記事ページを表示するための
	テンプレートファイルです。

	single-works.php のコードに関しては、
	CHAPTER 10 で詳しく解説しています。

*****************************************/

get_header(); ?>
<!-- single-works.php -->
<div id="main">
	<?php if ( have_posts() ) : // WordPress ループ
		while ( have_posts() ) : the_post(); // 繰り返し処理開始 ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<p class="post-meta">
					<span class="post-date"><?php echo get_the_date(); ?></span>
				</p>

				<?php the_content();

				$args = array(
					'before'		=> '<div class="page-link">',
					'after'			=> '</div>',
					'link_before'	=> '<span>',
					'link_after'	=> '</span>',
				);
				wp_link_pages( $args ); ?>

				<p class="footer-post-meta">
					<?php the_tags( 'Tag : ', ', ' ); ?>
				</p>
				<div class="snsshare">
				<!-- Tweetボタン -->
					<div class="tweetbutton">
						<a href="https://twitter.com/share" class="twitter-share-button" data-lang="ja">ツイート</a>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
					</div>
					<!-- Likeボタン -->
					<div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div>
				</div>
			</div>

			<div class="navigation"><!-- ページャー -->
				<?php
				if ( get_previous_post() ) : ?>
					<div class="alignleft"><?php previous_post_link( '%link', '&laquo; %title' ); ?></div>
				<?php endif;

				if ( get_next_post() ) : ?>
					<div class="alignright"><?php next_post_link( '%link', '%title &raquo;' ); ?></div>
				<?php endif; ?>
			</div>

			<?php 
		endwhile;
	else : ?>
		<div class="post">
			<h2>記事はありません</h2>
			<p>お探しの記事は見つかりませんでした。</p>
		</div>
	<?php endif; ?>

</div><!-- /main -->
<!-- /single-works.php -->
<?php 
get_footer(); ?>