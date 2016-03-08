<?php get_header(); ?>

	<!--[if lt IE 9]>
	<script>
		document.createElement('video');
	</script>
	<![endif]-->
	<div id="intro-video-container">
		<video autoplay loop poster="" id="intro-video">
		    <source src="<?php echo wp_get_attachment_url(55); ?>" type="video/mp4" />
		</video>
	</div>
	<div id="intro-logo-ts">
		<div id="intro-logo-t">T</div>
		<div id="intro-logo-s">S</div>
	</div>
	<div id="intro-welcome">
		<h1>Original Thai Massage</h1>
		<h4>Coming Soon</h4>
	</div>
	<div class="intro-info">
		<h1>You deserve it.</h1>
	</div>
	<div id="intro-woman">
	    <img src="<?php echo wp_get_attachment_url(51); ?>" class="background" />
	</div>
	<div class="intro-info">
		<h1>Contact us</h1>
		<a href="mailto:baz@thyspa.com">baz@thyspa.com</a>
	</div>

	<script type="text/javascript">
	jQuery(document).ready(function($) {

		// TODO

	});
	</script>

<?php get_footer(); ?>