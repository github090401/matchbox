<?php
/**
 * The template for displaying posts in the Aside post format.
 *
 * @package WordPress
 * @subpackage mathbox_mobile
 * 
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<<<<<<< HEAD
	<header class="entry-header">
		<h1 class="entry-title-date"><?php the_date('m月j日'); ?> 文</h1>
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<h1 class="entry-title-author">BY <?php the_author(); ?></h1>
	</header>
=======
>>>>>>> 2ffc1c181600181b0fa5d46358ab630fc6ab5cfe
	
	<div class="entry-content">
		<?php the_content(); ?>
	</div>
<<<<<<< HEAD
	
	<footer class="entry-meta" style="">
		<div style="text-align:center;width:100%;margin-right:auto; margin-left:auto;">
			<div style="width:100px; margin-right:auto; margin-left:auto;">
				<a href="javascript:void(0)" onclick="_showfavorite()">
					<div style="height:30px;float:left;"><img width="24px" height="24px" 
					src="<?php echo get_template_directory_uri(); ?>/images/star.png" /></div>
					<div style="height:30px;padding-top:1px;color:black;font-size:16px;font-weight:bold;float:left;">&nbsp;&nbsp;收藏</div>
				</a>
			</div>
			
			<div style="width:100px; margin-right:auto; margin-left:auto;">
				<a href="javascript:void(0)" onclick="_showfavorite()">
					<div style="height:30px;float:left;"><img width="24px" height="24px" 
					src="<?php echo get_template_directory_uri(); ?>/images/star.png" /></div>
					<div style="height:30px;padding-top:1px;color:black;font-size:16px;font-weight:bold;float:left;">&nbsp;&nbsp;收藏</div>
				</a>
			</div>
		</div>
	</footer>
=======
>>>>>>> 2ffc1c181600181b0fa5d46358ab630fc6ab5cfe

</article>
