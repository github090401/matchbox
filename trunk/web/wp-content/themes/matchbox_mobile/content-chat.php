<?php
/**
 * The template for displaying posts in the Chat post format.
 *
 * @package WordPress
 * @subpackage mathbox_mobile
 * 
 */
?>
<div style="overflow-x: hidden"></div>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content" id="ad_image_<?php the_ID(); ?>">
		<?php the_content(); ?>
	</div>
</article>
