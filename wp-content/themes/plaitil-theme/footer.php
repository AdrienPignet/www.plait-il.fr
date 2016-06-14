<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

</main>
<?php wp_footer(); ?>
<footer>
	<div class="row">
		<div class="info-footer-custom small-12 medium-6 large-2 large-offset-4 columns end">
			<img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/logo/logo-fond-clair.svg" alt="Logo Plait-il?" />
			<p>5 rue du Bûcher</p>
			<p>13007 Marseille</p>
			<a href="#">Mentions légales</a>
		</div>
		<div class="reseaux-custom small-12 medium-6 large-5 large-offset-1 columns end">
			<h4>Suivez nous !</h4>
			<a href="#" class="facebook"></a>
			<a href="#" class="twitter"></a>
			<a href="#" class="pinterest"></a>
			<a href="#" class="github"></a>
		</div>
		<div class="copyright-custom small-12 columns end;">
			<p>©Plait-il? 2016</p>
		</div>
	</div>
	<a href="#" class="go-top"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
</footer>
<script type="text/javascript">
// JAVASCRIPT MENU
	jQuery(document).ready(function($){
		var isLateralNavAnimating = false;

		//open/close lateral navigation
		$('.cd-nav-trigger').on('click', function(event){
			event.preventDefault();
			//stop if nav animation is running
			if( !isLateralNavAnimating ) {
				if($(this).parents('.csstransitions').length > 0 ) isLateralNavAnimating = true;

				$('body').toggleClass('navigation-is-open');
				$('.cd-navigation-wrapper').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
					//animation is over
					isLateralNavAnimating = false;
				});
			}
		});
	});
// FIN JAVASCRIPT MENU
// SMOOTH Scroll
	smoothScroll.init();
// RETOUR TOP

$(document).ready(function() {
			// Show or hide the sticky footer button
		$(window).scroll(function() {
			if ($(this).scrollTop() > 200) {
				$('.go-top').fadeIn(200);
			} else {
				$('.go-top').fadeOut(200);
			}
		});

		// Animate the scroll to top
		$('.go-top').click(function(event) {
			event.preventDefault();

		$('html, body').animate({scrollTop: 0}, 300);
	})
});
</script>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
