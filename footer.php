<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package dazzling
 */
?>
</div><!-- #content -->




<div class="first-footer">
	<div class="container">
		<div class="row">
			<?php if ( is_active_sidebar( 'footer-widget-1' ) ) : ?>
			<div class="col-sm-3 columns footerphone">
				<?php dynamic_sidebar( 'footer-widget-1' ); ?>
			</div>
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'footer-widget-2' ) ) : ?>
		<div class="col-sm-3 columns">
			<?php dynamic_sidebar( 'footer-widget-2' ); ?>
		</div>
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'footer-widget-3' ) ) : ?>
	<div class="col-sm-3 columns">
		<?php dynamic_sidebar( 'footer-widget-3' ); ?>
	</div>
<?php endif; ?>	

<?php if ( is_active_sidebar( 'footer-widget-4' ) ) : ?>
	<div class="col-sm-3 columns">
		<?php dynamic_sidebar( 'footer-widget-4' ); ?>
	</div>
<?php endif; ?>
</div>
</div>
</div><!-- first-footer -->

<footer class="second-footer">
	<div class="container">
		<div class="row">
			<div class="col-sm-9 columns">
				Copyright 2019-2020 | 
				Quo Vadis Editions | 
				All Rights Reserved | 
				<a href="http://www.checkmateproductions.com" target="_blank" class="cmp">Site by Checkmate Productions</a>
			</div>
			<div class="col-sm-3 columns social">
				<a href="https://www.instagram.com/quovadisplanner/" target="_blank"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2019/07/instagram.png" alt=""></a>
				<a href="https://itunes.apple.com/us/app/life-noted/id688549151?mt=8" target="_blank"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2019/07/app-store.png" alt=""></a>
				<a href="http://quovadisblog.com/" target="_blank"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2019/07/quovadis-blog.png" alt=""></a>
				<a href="http://www.facebook.com/pages/Quo-Vadis-Notebooks-and-Planners/86676068578" target="_blank"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2019/07/facebook.png" alt=""></a>
				<a href="http://twitter.com/quovadisblog" target="_blank"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2019/07/twitter.png" alt=""></a></div>
			</div>
		</div>
	</footer>

	



</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>