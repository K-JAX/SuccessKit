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

<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<div class="f-about">
					<?php if ( is_active_sidebar( 'footer-1' ) ) { ?>
						<?php dynamic_sidebar( 'footer-1' );?>
					<?php } ?>
					<?php educational_footer_contact_items();?>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<?php if ( is_active_sidebar( 'footer-2' ) ) { ?>
					<?php dynamic_sidebar( 'footer-2' );?>
				<?php } ?>
				
				<?php educational_footer_social_items();?>	
			</div>
			<div class="col-lg-4">
				<?php if ( is_active_sidebar( 'footer-3' ) ) { ?>
					<?php dynamic_sidebar( 'footer-3' );?>
				<?php } ?>
			</div>
		</div>
	</div>
	<div class="copyright">
		<div class="container">
			<p><?php esc_html_e('&copy; All Right Reserved ','educational');  echo  esc_html(date('Y'));?> <a href="<?php echo esc_url(home_url());?>"></a></p>
			<p><?php esc_html_e('Powered By ','educational');?> <?php esc_html(bloginfo('name')); ?></p>
		</div>
	</div>
</footer>

<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url');?>/assets/js/owl.carousel.min.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js"></script>

<script>
	
	jQuery('.loop').owlCarousel({
    center: true,
    items:1,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:3000,
    responsive:{
        600:{
            items:2
        }
    }
});
	
	
// $('.owl-carousel').owlCarousel({
// 	center:true,
//     loop:true,
//     margin:50,
//     nav:false,
// 	autoplay:true,
//     autoplayTimeout:3000,
//     responsive:{
//         0:{
//             items:1
//         },
//         600:{
//             items:3
//         },
//         1000:{
//             items:3
//         }
//     }
// });
	
	
// jQuery(document).ready(function(){		
// jQuery('.loop').owlCarousel({
//    center: true,
//    items:2,
//    loop:true,
//    margin:10,
// autoWidth:true,
// autoplay:true,
// autoplayTimeout:4000,
//   responsive:{
//        0:{
//            items:3,
//            nav:false,
// margin:10,
//        },
//        600:{
//            items:3,
//            nav:false
//        }
       
//    }
// }); 
// });
	        
</script>

<script>
function myFunction() {
  window.print();
}
</script>



<?php wp_footer(); ?>

</body>
</html>