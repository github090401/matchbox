<?php
/**
 * The template for displaying posts in the Audio post format.
 *
 * @package WordPress
 * @subpackage mathbox_mobile
 * 
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		
		<div class="audio-content">
			<style>
				.matchbox_play_button_wrap {
					position:absolute;
					height:48px;
					width:48px;
					left:20px;
					bottom:20px;
					clear:both;
				} 
				.matchbox_favorite_button_wrap {
					position:absolute;
					height:48px;
					width:48px;
					left:80px;
					bottom:20px;
					clear:both;
				}
				.wp-audio-shortcode {display:none;}
			</style>
			<?php the_content(); ?>
			<div class="matchbox_play_button_wrap">
			<a href="javascript:void(0)"><img id="matchbox_play_button" width="32px" height="32px" src="<?php echo get_template_directory_uri(); ?>/images/play.png" 
				onclick="toggleSound('audio-33-1')"/></a>
			</div>
			<div class="matchbox_favorite_button_wrap">
				<a href="javascript:void(0)">
					<img id="matchbox_play_button" width="32px" height="32px" 
					src="<?php echo get_template_directory_uri(); ?>/images/star.png" onclick="_showfavorite()"/>
				</a>
			</div>
		</div>
	</div>
	<footer class="entry-meta" style="height:4px;background: url('<?php echo get_template_directory_uri(); ?>/images/line.jpg')">
		
	</footer>
</article>
