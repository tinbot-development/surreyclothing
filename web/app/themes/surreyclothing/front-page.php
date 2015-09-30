<?php while (have_posts()) : the_post(); ?>
  <?php //get_template_part('templates/page', 'header'); ?>
  <?php //get_template_part('templates/content', 'page'); ?>

	<?php /*
	<div class="videoContainer">
		<video width="100%"  height="360" autoplay loop src="http://sample-videos.com/video/mp4/720/big_buck_bunny_720p_1mb.mp4">
			<p> Try this page in a modern browser! Or you can <a  href="http://www.youtube.com/demo/google_main.mp4">download the  video</a> instead.</p>
	  </video>
	</div>
	*/?>
	
	<div class="front-content text-center">
		<div class="col-md-4">
			<div class="row"><h2>Surrey Wholesale</h2></div>
			<div class="row"style="height:200px;"><a href="/product-category/wholesale/"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/img03.png" style="img-responsive" alt=""></a></div>
			<div class="row">Stock Service & Garment Production <a href="/product-category/wholesale/">Read more</a></div>
		</div>
		<div class="col-md-4">
			<div class="row"><h2>Surrey Branding</h2></div>
			<div class="row"style="height:200px;"><a href="/branding/"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/img01.png" style="img-responsive" alt=""></a></div>
			<div class="row">Branding your Organisation <a href="/branding/">Read more</a></div>
		</div>
		<div class="col-md-4">
			<div class="row"><h2>Uniform Management</h2></div>
			<div class="row"style="height:200px;"><a href="/uniform-management/"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/img02.png" style="img-responsive" alt=""></a></div>
			<div class="row">Uniform Shop Management <a href="/uniform-management/">Read more</a></div>
		</div>
	</div>

<?php endwhile; ?>

