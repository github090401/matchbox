<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage matchbox_mobile
 * 
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<!--
	<header class="entry-header">
		<h1 class="entry-title-date"><?php the_date('m月j日'); ?> 文</h1>
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<h1 class="entry-title-author">BY <?php the_author(); ?></h1>
	</header>
	-->
	<div class="entry-content">
		<?php the_content(); ?>
	</div>

	<?php include "popfuns.php"; ?>

</article>
