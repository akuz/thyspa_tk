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
		<h3>STRESS-FREE</h3>
		<h4>New Year's Resolution 2018</h4>
	</div>

	<div class="intro-info">
		<h1>GIVE THE GIFT OF RELAXATION</h1>
		<h3>Gift voucher available in store</h3>
	</div>

	<div id="intro-woman" class="parallax-window" data-parallax="scroll" data-z-index="1" data-image-src="<?php echo wp_get_attachment_url(51); ?>">
	    <img src="<?php echo wp_get_attachment_url(51); ?>" class="background" />
	</div>

<!--
<div class="container">
	<div class="row">
		<div class="col-sm-4">
			<div class="card mb-3">
				<h3 class="card-header">Massage</h3>
				<a href="/massage/"><img class="alignnone size-medium wp-image-169" src="http://www.thyspa.com/wp-content/uploads/2016/05/thai50-300x90.png" alt="" style="height: 100px; width: 100%; display: block;" /></a>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="card mb-3">
				<h3 class="card-header">Beauty</h3>
				<a href="/beauty/"><img src="http://www.thyspa.com/wp-content/uploads/2016/05/face-300x100.png" alt="" style="height: 100px; width: 100%; display: block;" class="alignnone size-medium wp-image-145" /></a>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="card mb-3">
				<h3 class="card-header">Packages</h3>
				<a href="/packages/"><img style="height: 100px; width: 100%; display: block;" src="/wp-content/uploads/2016/06/men-300x90.png"></a>
			</div>
		</div>
	</div>
</div>
-->

	<script type="text/javascript">
	</script>

<br /><br />
<?php # get_sidebar(); ?>
<?php get_footer(); ?>