<?php
/**
 * The template for displaying posts in the Aside post format.
 *
 * @package WordPress
 * @subpackage mathbox_mobile
 * 
 */
?>
<div style="overflow-x: hidden"></div>
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
	
<?php $_favorite = $_GET['favorite']; ?>
<?php if ('true' != $_favorite) : ?>
	<?php include "popfuns.php"; ?>
<?php endif; ?>

</article>
