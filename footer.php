<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package _s
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			
			<?php do_action( '_s_credits' ); ?>
			<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', '_s' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', '_s' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', '_s' ), 'Preston Bezant', '<a href="http://prestonbezant.com" rel="designer">Preston Bezant</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script>
	jQuery(document).ready(function($){
		var eTop = $('div.site-branding').offset().top; //get the offset top of the element
		console.log(eTop - $(window).scrollTop()); //position of the ele w.r.t window

		$(window).scroll(function() { //when window is scrolled
		    console.log(eTop  - $(window).scrollTop());
		    if(eTop  - $(window).scrollTop() < 0){
		    	$("#page").addClass('strip');
		    }
		    else{
		    	$("#page").removeClass('strip');
		    }
		});
	});
</script>
<?php if(is_home()): ?>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.isotope.min.js" type="text/javascript"></script>
	<script>
		jQuery(document).ready(function($){
			$('article').click(function(){
				$(this).addClass('flip');
				setTimeout(function(){jQuery('article').removeClass('flip');}, 3000);
			});
			var $container = $('main.site-main');
			$container.isotope({
		  		itemSelector : 'article',
		  		masonry: {
	    			columnWidth: 5
	  			}
			});
			$('#cat-nav ul a').click(function(){
				$('#cat-nav ul li').removeClass('active');
				$(this).addClass('active');
				var selector = $(this).attr('data-filter');
				$container.isotope({ filter: selector });
				return false;
			});
		});
	</script>
<?php endif;?>
</body>
</html>