<?php
/****************************************

	index.php

	WordPressサイトには、なくてはならない
	テンプレートファイルです。

	index.php のコードに関しては、
	CHAPTER 9 で詳しく解説しています。

*****************************************/

get_header(); ?>
<!-- index.php -->
<div class="navi">
<ul class="line">
	<?php 
		$catid = get_the_category();
		$myCat = $catid[0]->cat_ID;
		wp_list_categories(array(
		'title_li' => '',
		'show_option_all' => 'All',
		'current_category='.$myCat
		)); ?>
</ul>
</div>
<div id="main" class="masonry-wrapper">
	
	<?php if ( have_posts() ) : // WordPress ループ
		while ( have_posts() ) : the_post(); // 繰り返し処理開始 ?>
			
			<div id="post-<?php the_ID(); ?>" class="large-2 medium-4 small-6 columns masonry-grid" <?php post_class(); ?>>
				<div id="post_content">
				<h4 class="randomcolor"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
				<p class="post-meta">
					<span class="post-date"><?php echo get_the_date(); /* echo get_the_date() に書き換える（CHAPTER 9） */ ?></span>					<!-- <span class="category">Category - <?php the_category( ', ' ) ?></span> -->
					<!-- <span class="comment-num"><?php comments_popup_link( 'Comment : 0', 'Comment : 1', 'Comments : %' ); ?></span> -->
				</p>
				<p>
					<?php the_post_thumbnail(); ?>
				</p>
				<?php the_excerpt(); ?>
				<a class="dummy" href="<?php the_permalink(); ?>"></a>
				</div>
			</div>
		<?php endwhile; // 繰り返し処理終了
	else : // ここから記事が見つからなかった場合の処理 ?>
			<div class="post">
				<h4>記事はありません</h4>
				<p>お探しの記事は見つかりませんでした。</p>
			</div>
	<?php endif;

	if ( $wp_query->max_num_pages > 1 ) : // ここからページャー ?>
		<div class="navigation">
			<div class="alignleft"><?php next_posts_link( '&laquo; PREV' ); ?></div>
			<div class="alignright"><?php previous_posts_link( 'NEXT &raquo;' ); ?></div>
		</div>
	<?php endif; // ページャーここまで ?>


</div><!-- /main -->
<!-- / index.php -->
<?php 
get_footer(); ?>