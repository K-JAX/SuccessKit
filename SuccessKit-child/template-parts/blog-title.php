<?php
    /**
     * Template part for displaying blog title
     */
?>
<div class="top-block">
	<div class="top-title">
		<div class="container headline-title pt-5 pb-2 text-center">
			<h2 style="text-transform: initial;"><?php echo $args['title']; ?></h2>
			<?php if ($args['desc']): ?>
			<p class="sans-serif h3 mt-3 mb-4"><?php echo $args['desc']; ?></p>
			<?php endif; ?>
		</div>
	</div>
</div>