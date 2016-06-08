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
		<h4>Coming Soon in Oxford</h4>
	</div>
	<div class="intro-info">
		<h3>Healthy Mind, Body, and Spirit</h3>
		<!--
		<h3>We are a group of professionals with great passion for spa & beauty industry, with our team including qualified Thai massage therapists with more than 5 years experience at big spas in the UK.</h3>
		-->
	</div>

	<div id="intro-woman" class="parallax-window" data-parallax="scroll" data-z-index="1" data-image-src="<?php echo wp_get_attachment_url(51); ?>">
	    <img src="<?php echo wp_get_attachment_url(51); ?>" class="background" />
	</div>

	<!--
	<div class="intro-info">
		<h1>Contact us</h1>
		<a href="mailto:baz@thyspa.com">baz@thyspa.com</a>
	</div>
	-->

	<script type="text/javascript">

	</script>

<br /><br />
<?php # get_sidebar(); ?>
<?php get_footer(); ?>
