<?php
/*
* Template Name: Pricing page
*/	
get_header();	?>

</div>
<?php

$my_id = 381;
$post_id_5369 = get_post($my_id);
$content = $post_id_5369->post_content;
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]>', $content);
echo $content;
?>


<?php 
get_footer();
?>