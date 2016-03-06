<?php get_header(); ?>

	<!--[if lt IE 9]>
	<script>
		document.createElement('video');
	</script>
	<![endif]-->
	<div id="intro-video-container">
		<video autoplay loop poster="" id="intro-video">
		    <source src="<?php echo wp_get_attachment_url(54); ?>" type="video/mp4" />
		</video>
	</div>
	<div id="intro-logo-ts">
		<div id="intro-logo-t">T</div>
		<div id="intro-logo-s">S</div>
	</div>
	<div id="intro-welcome">
		<div id="intro-welcome-big">Original Thai Massage</div>
		<div id="intro-welcome-small">Coming Soon</div>
	</div>
	<div id="intro-info">
		<h1>You deserve it.</h1>
	</div>
	<div id="intro-woman">
	</div>
	<div class="intro-info">
		<h1>Contact us at</h1>
	</div>

<?php get_footer(); ?>