<?php
/****************************************

	footer.php

	フッターを表示するための
	テンプレートファイルです。

	footer.php のコードに関しては、
	CHAPTER 11 で詳しく解説しています。

*****************************************/
?>
<!-- footer.php -->
		<!-- footer -->
	</div><!-- container -->
<?php if(!is_page('front')): ?>

	<div id="footer">
		<div class="sns_icons">
			<a href="https://twitter.com/kusaharalabo" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/tweet_block.png" alt="TWITTER"></a>
		</div>	
		<div class="radio">
			<a href="https://www.youtube.com/channel/UCcLnKOMU0ofbKydaYzM_StQ" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/radio.gif" alt="ゼミラジオ"></a>
		</div>
		<img src="<?php echo get_stylesheet_directory_uri() ?>/images/footerimg.png">
		<p id="copyright">&copy; Kusahara Lab All Rights Reserved.</p>
	</div>
<?php endif;?>

<?php wp_footer(); ?>
	<?php if(wp_is_mobile() && is_page('front')): ?>
		<script>
			var scene1 = document.getElementById('scene1');
			var parallaxA = new Parallax(scene1,{
					// originX: 0.4, //マウス入力の横軸初期値,デフォルト0.5
    	// 			originY: 0.6 //マウス入力の縦軸初期値,デフォルト0.5
			});
			var scene2 = document.getElementById('scene2');
			var parallaxB = new Parallax(scene2,{
					// originX: 0.6, //マウス入力の横軸初期値,デフォルト0.5
    				// originY: 0.6 //マウス入力の縦軸初期値,デフォルト0.5
    				invertX:false,
    				invertY:true
			});
			var scene3 = document.getElementById('scene3');
			var parallaxC = new Parallax(scene3,{
					// originX: 0.5, //マウス入力の横軸初期値,デフォルト0.5
    				// originY: 0.4 //マウス入力の縦軸初期値,デフォルト0.5
    				invertX:true,
    				invertY:false
			});
			console.log("parallax tag is working!");
		</script>
	<?php endif;?>

</body>
</html>
<!-- /footer.php -->
