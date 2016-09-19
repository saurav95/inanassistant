<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>
			</div><!--end container -->
			<?php 
				$logo = carbon_get_theme_option('crb_logo_image');
				$slides = carbon_get_post_meta($post->ID , 'crb_home_slide', 'complex');
				$img_first = carbon_get_post_meta($post->ID , 'first_image');
				$img_second = carbon_get_post_meta($post->ID , 'second_image');				
			?>
			
				<div class="home-slider">
					<div class="container-fluid">
						<div class="logo-wrap">
							<a class="navbar-brand" title="<?php echo get_bloginfo('description'); ?>" href="<?php echo home_url(); ?>">
								<img src="<?php echo $logo; ?>" alt="" />
							</a>
						</div>
					</div>
					<div class="slider-wrap">	
						<ul class="slider">
						<?php 	
							foreach($slides as $slide){
							?>	
								<li class="slider-item "><div class="slide-image mhth" style="background:url('<?php echo $slide['insert_image']; ?>');width:100%; background-size:cover; background-position:center center;"></div></li>
							<?php	
							}	

						?>									  
						</ul>
						<h1><?php echo nl2br(get_post_meta($post->ID, 'custom_tagline' , true)); ?></h1>
					</div>					
				</div>
			<div class="wrapper">
			<!--<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/polaroids.png" alt="" />-->
			<div class="container-fluid">
				<div id="content" class="clearfix row">
				
					<div id="main" class="col-sm-12 clearfix" role="main">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						
						<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
							<header>

								<?php 
									$post_thumbnail_id = get_post_thumbnail_id();
									$featured_src = wp_get_attachment_image_src( $post_thumbnail_id, 'wpbs-featured-home' );
								?>


							
							</header>
							
		
							
							<section class="row main-content">
							
								<div class="col-sm-7"> 
									<div class="post_image"> 
										<div class="polaroid"></div>
										<div class="msnry-wrapper">
											<div class="msnry-grid">
												<div class="custom-msnry" style="background:url('<?php echo $img_first; ?>'); background-size:cover;  background-position:center center;"></div>
											</div>
											<div class="msnry-grid">
												<div class="custom-msnry" style="background:url('<?php echo $img_second; ?>'); background-size:cover;  background-position:center center;"></div>
											</div>
										</div>
									</div>
								</div>
							
								<div class="col-sm-5">
							
									<div class="post_content_wrapper">
										<div class="post_content">
											<?php the_content(); ?>
										</div>
									</div>
									
								</div>
								
								<?php //get_sidebar('sidebar2'); // sidebar 2 ?>
														
							</section> <!-- end article header -->
							
						
						</article> <!-- end article -->
						
						<?php 
							// No comments on homepage
							//comments_template();
						?>
						
						<?php endwhile; ?>	
						
						<?php else : ?>
						
						<article id="post-not-found">
							<header>
								<h1><?php _e("Not Found", "wpbootstrap"); ?></h1>
							</header>
							<section class="post_content">
								<p><?php _e("Sorry, but the requested resource was not found on this site.", "wpbootstrap"); ?></p>
							</section>
							<footer>
							</footer>
						</article>
						
						<?php endif; ?>
				
					</div> <!-- end #main -->
		
					<?php //get_sidebar(); // sidebar 1 ?>
		
				</div> <!-- end #content -->
			</div>
			</div>	
<?php get_footer(); ?>