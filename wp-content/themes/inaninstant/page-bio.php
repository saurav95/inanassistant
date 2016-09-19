<?php
/*
Template Name: Bio
*/
?>

<?php get_header(); ?>
			</div><!--container end-->
			<?php 
				$bio_photo_desc = carbon_get_post_meta($post->ID , 'crb_description_photo');
				$bio_photo_sliders = carbon_get_post_meta($post->ID , 'crb_photo_slider', 'complex');
				$bio_gif_desc = carbon_get_post_meta($post->ID , 'crb_description_gif');
				$bio_gif_sliders = carbon_get_post_meta($post->ID , 'crb_gif_slider', 'complex'); 
				$jess = carbon_get_post_meta($post->ID , 'jess_pic');
				$seb = carbon_get_post_meta($post->ID , 'seb_pic');
				$jsd = carbon_get_post_meta($post->ID , 'crb_description_js');	
			?>
			<div id="content" class="clearfix row">
			
				<div id="main" class="clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
					
						<section class="bio_post_content clearfix" itemprop="articleBody">
							
							<div class="container">
								<div class="bio-wrapper">
									<?php the_content(); ?>	
								</div>
							</div>
							<div class="photo-section studio-booth"> 
								<div class="container">
									<div class="bio-bg">
										<div class="photo-description text-center row"> 
											<div class="col-sm-8 col-centered"><?php echo nl2br($bio_photo_desc); ?></div>
										</div>
									</div>
								</div>
								<div class="photo-slider-wrapper slider-bio">
									
									<div class="photo-slider"> 
										<?php foreach($bio_photo_sliders as $slide){ ?>
											<div class="banner-image" style="background-image:url('<?php echo $slide['insert_photo'];?>'); width:100%; height:527px"></div>
										<?php } ?>	
									</div>
								</div>
							</div>	
							<div class="photo-section halo-booth"> 
								<div class="container">
									<div class="bio-bg">
										<div class="photo-description text-center row"> 
											<div class="col-sm-8 col-centered"><?php echo nl2br($bio_gif_desc); ?></div>
										</div>
									</div>
								</div>
								<div class="photo-slider-wrapper slider-bio">
									<div class="gif-slider"> 
										<?php foreach($bio_gif_sliders as $slide){ ?>
											<div class="banner-image" style="background-image:url('<?php echo $slide['insert_photo'];?>'); width:100%; height:527px"></div>
										<?php } ?>	
									</div>
								</div>
							</div>
							<div class="container">
								<div class="bio-bg show-package">
									<div class="glitter-wrap"><h3 class="text-center  glitter ">show us your package(s)!</h3></div>
								</div>	
							</div>
							<div class="jess-seb-section">
								<div class="container">
									<div class="jess-seb-info-wrap bio-bg">
										<div class="jess-seb-info ">
											<div class="jess-pic">
												<img src="<?php echo $jess; ?>" alt="" />
											</div>
											<h2 class="title text-center">jess & seb</h2>
											<div class="col-sm-6 col-centered text-center">
												<div class="info-box"><p><?php echo nl2br($jsd); ?></p></div>
											</div>
											<div class="seb-pic">
												<img src="<?php echo $seb; ?>" alt="" />
											</div>
										</div>
									</div>
								</div>
							</div>
						</section> <!-- end article section -->

					
					</article> <!-- end article -->
					
					<?php comments_template('',true); ?>
					
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
    
				
    
			</div> <!-- end #content -->

<?php get_footer(); ?>