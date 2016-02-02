<?php 
/*Template Name: FRONT*/
get_header(); ?>
<!-- front.php -->

<?php
if ( wp_is_mobile() ) {
?>
<div class="parallax_wrapper">
	<div class="bg_wrap">
		<div id="scene1">
			<div class="layer bg" data-depth="0.25"></div>
		</div>
	</div>
	<div class="bg_wrap">
		<div id="scene2">
			<div class="layer bg" data-depth="0.25"></div>
		</div>
	</div>
	<div class="bg_wrap">
		<div id="scene3">
			<div class="layer bg" data-depth="0.25"></div>
		</div>
	</div>
</div>
<div class="info">
	<h1 class="title"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/kusahara_lab.png" alt=""></h1>
	<h2 class="enterBtn"><a class="button" href="<?php echo home_url(); ?>/category/all/"></a></h2>
</div>
<?php 
}else{
?>
<div class="info">
	<h1 class="title"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/kusahara_lab.png" alt=""></h1>
	<h2 class="enterBtn"><a class="button" href="<?php echo home_url(); ?>/category/all/"></a></h2>
</div>
<?php
}
?>

<!-- front.php -->
<?php get_footer(); ?>