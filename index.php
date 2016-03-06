<?php get_header(); ?>

	<div id="intro-video-container">
		<video autoplay loop poster="polina.jpg" id="bgvid">
		    <source src="<?php echo wp_get_attachment_url("beach_lowq"); ?>" type="video/mp4">
		</video>
	</div>

<?php get_footer(); ?>