<?php
/****************************************

		taxonomy-worksarchive.php


*****************************************/
get_header(); ?>
<!-- taxonomy-worksarchive.php -->
<div class="navi">
<ul class="line">
	<?php wp_list_categories('title_li=&taxonomy=worksarchive'); ?>
</ul>
</div>
<div id="main" class="masonry-wrapper">
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
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
				<a class="dummy" href="<?php the_permalink(); ?>"><span class="ring">MORE</span></a>
				</div>
			</div>
	<?php endwhile; endif; ?>


</div><!-- /main -->
<!-- / taxonomy-worksarchive.php -->
<?php 
get_footer(); ?>