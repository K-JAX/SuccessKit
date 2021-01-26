<div class="b-header">
	<nav class="navbar navbar-expand-lg navbar-light">
		<div class="container">
			<?php
                if (has_custom_logo()):
                    the_custom_logo();
                else:
            ?>
			<h1 class="site-title"><a href="<?php echo esc_url(home_url()); ?>"
					class="navbar-brand"><?php bloginfo('title');?></a></h1>
			<?php endif;?>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent" aria-expanded="false">
				<div id="nav-icon3">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</div>
			</button>


			<?php
                if (has_nav_menu('primary')):
                    wp_nav_menu(array(
                        'theme_location'  => 'primary',
                        'depth'           => 7,
                        'menu_class'      => 'navbar-nav ml-auto',
                        'container_class' => 'collapse navbar-collapse mt-4 mt-lg-0',
                        'container_id'    => 'navbarSupportedContent',
                        'fallback_cb'     => 'educational_navwalker::fallback',
                        'walker'          => new successkit_navwalker(),
                    ));
                ?>
			<?php endif;?>
			<a id="greenBttn" href="<?php echo site_url(); ?>/learn-more/">
				<div class="get-started">
					Learn More
				</div>
			</a>
		</div>
	</nav>
</div>