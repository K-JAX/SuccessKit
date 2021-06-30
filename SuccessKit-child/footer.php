<?php
    /**
     * The template for displaying the footer
     *
     * Contains the closing of the #content div and all content after.
     *
     * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
     *
     * @package educational
     */

?>

<?php get_template_part('template-parts/footer', 'ask-us'); ?>
<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<div class="f-about">
					<?php if (is_active_sidebar('footer-1')) {?>
					<?php dynamic_sidebar('footer-1');?>
					<?php }?>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<?php if (is_active_sidebar('footer-2')) {?>
				<?php dynamic_sidebar('footer-2');?>
				<?php }?>

				<?php educational_footer_social_items();?>
			</div>
			<div class="col-lg-4">
				<?php if (is_active_sidebar('footer-3')) {?>
				<?php dynamic_sidebar('footer-3');?>
				<?php }?>
				<?php echo '<p class="text-white sans-serif">&copy;' . date('Y') . ' SuccessKit</p>'; ?>

			</div>
		</div>
	</div>

</footer>

<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url');?>/assets/js/owl.carousel.min.js"
	crossorigin="anonymous"></script>
<script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js"></script>

<script>
jQuery('.loop').owlCarousel({
	center: true,
	items: 1,
	loop: true,
	margin: 0,
	autoplay: true,
	autoplayTimeout: 3000,
	responsive: {
		650: {
			items: 3
		}
	}
});

$('.scroll-indicator').click(function() {
	$(this).removeClass('idle').addClass('scrolled');
	$('html,body').animate({
		scrollTop: $("#featured").position().top - 200
	}, 2000);
})

$(function() {
	var idleTimer = setTimeout(function() {
		$('.scroll-indicator').addClass('idle')
	}, 5000)

	if ($('.scroll-indicator') != undefined) {
		$(window).scroll(function() {
			if (!($('.scroll-indicator').hasClass('scrolled'))) {
				clearTimeout(idleTimer);
				$('.scroll-indicator').removeClass('idle').addClass('scrolled')
			}
		})
	}

})





$('.dropdown-btn').on('click', function(event) {
	event.preventDefault();
	parent = $(this).parent()
	dropdownMenu = $(parent).siblings()[0];

	console.log('clicked')

	if ($(this).attr('aria-expanded') !== 'true') {
		$(this).attr('aria-expanded', 'true');
		$(parent).attr('aria-expanded', 'true');
	} else {
		$(this).attr('aria-expanded', 'false');
		$(parent).attr('aria-expanded', 'false');
	}
	$(dropdownMenu).toggleClass('show');
})
</script>

<script>
function myFunction() {
	window.print();
}
</script>


<?php wp_footer();?>

</body>

</html>