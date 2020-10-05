<?php
/*
	Template Name: Home Page
*/
?>

<?php get_header();?>
<body <?php body_class();?>>
	<div class="fh5co-loader"></div>
	<?php 
		$asidebg = get_the_post_thumbnail_url();
	?>
	<aside id="fh5co-aside" role="sidebar" class="text-center" style="background-image: url('<?php echo $asidebg?>');">
		<h1 id="fh5co-logo"><a href="<?php echo site_url();?>"><?php bloginfo('name');?></a></h1>
	</aside>

	<div id="fh5co-main-content">
		<div class="dt js-dt">
			<div class="dtc js-dtc">
				<div class="simply-countdown-one animate-box" data-animate-effect="fadeInUp"></div>

				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-lg-7">
								<div class="fh5co-intro animate-box">
									<h2><?php the_title();?></h2>
									<?php the_content();?>
								</div>
							</div>
							
							<div class="col-lg-7 animate-box">
								<form action="#" id="fh5co-subscribe">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Enter your email">
										<input type="submit" value="Send" class="btn btn-primary">
										<p class="tip">Please enter your email address for early access.</p>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
					
			</div>
		</div>

		<div id="fh5co-footer">
			<div class="row">
				<div class="col-md-6">
					<?php 
						if(is_active_sidebar('sidebar1')){
							dynamic_sidebar('sidebar1');
						}
					?>
				</div>
				<div class="col-md-6 fh5co-copyright">
					<?php 
						if(is_active_sidebar('sidebar2')){
							dynamic_sidebar('sidebar2');
						}
					?>
				</div>
			</div>
		</div>
		
	</div>
<?php get_footer();?>
