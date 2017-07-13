<?php get_header(); ?>

	<!--[if lt IE 9]>
	<script>
		document.createElement('video');
	</script>
	<![endif]-->
	<div id="intro-valentine" style="
		background-image: url('<?php echo wp_get_attachment_url(500); ?>');
		background-size: cover;">
	</div>
	<!--
	<div id="intro-video-container">
		<video autoplay loop poster="" id="intro-video">
		    <source src="<?php echo wp_get_attachment_url(55); ?>" type="video/mp4" />
		</video>
	</div>
	-->
	<div id="intro-logo-ts">
		<div id="intro-logo-t">T</div>
		<div id="intro-logo-s">S</div>
	</div>
	<div id="intro-welcome">
		<h1>Original Thai Massage</h1>
		<h4>34 Cowley Road, Oxford</h4>
		<h4 style="padding-top: 10pt"><a href="/book-now/"><button style="opacity: 0.8" class="btn btn-default"><i class="fa fa-calendar" aria-hidden="true" style="margin-right: 5pt;"></i> Book Now</button></a></h4>
	</div>
	<div class="intro-info">
		<h3>Healthy Mind, Body, and Spirit</h3>
	</div>

	<div id="intro-woman" class="parallax-window" data-parallax="scroll" data-z-index="1" data-image-src="<?php echo wp_get_attachment_url(51); ?>">
	    <img src="<?php echo wp_get_attachment_url(51); ?>" class="background" />
	</div>

	<!--
	<div class="intro-info">
		<h3>Healthy Mind, Body, and Spirit</h3>
	</div>
	<div class="row">
		<div class="col-sm-6">
		    <img src="<?php echo wp_get_attachment_image_src(340, 'large')[0]; ?>" class="background" />
		</div>
		<div class="col-sm-6">
		    <img src="<?php echo wp_get_attachment_image_src(334, 'large')[0]; ?>" class="background" />
		</div>
	</div>
	-->

	<script type="text/javascript">
	</script>

<br /><br />
<?php # get_sidebar(); ?>
<?php get_footer(); ?>