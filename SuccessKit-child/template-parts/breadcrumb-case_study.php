<?php
    /**
     * Breadcrumbs from case study (or whatever else)
     */

    $pt   = get_post_type();
    $obj  = get_post_type_object($pt);
    $link = $args['link'] !== 'undefined' ? $args['link'] : get_post_type_archive_link($pt);
?>

<div class="breadcrumb">
	<a href="<?php echo $link; ?>"><?php echo $obj->labels->name; ?></a>
	&nbsp;&nbsp;&raquo;&nbsp;&nbsp;
	<b><?php the_title();?></b>
</div>