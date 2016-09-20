<?php
/*
Template Name: Services
*/
?>

<?php get_header(); ?>
			</div><!--container end-->

			<?php 
				$services = carbon_get_post_meta($post->ID , 'crb_services_section', 'complex');  
				$i = 0;
				$prop_img1 = carbon_get_post_meta($post->ID , 'prop_first_image');
				$prop_img2 = carbon_get_post_meta($post->ID , 'prop_second_image');
				$prop_title = carbon_get_post_meta($post->ID , 'crb_title');
				$prop_desc  = carbon_get_post_meta($post->ID , 'crb_description');
				$back_title = carbon_get_post_meta($post->ID , 'crb_title_back');
				$back_desc  = carbon_get_post_meta($post->ID , 'crb_description_back');
				$galleries = carbon_get_post_meta($post->ID , 'crb_service_backdrop', 'complex');  
			?>
			<div id="content" class="clearfix row">
			
				<div id="main" class="clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
					
						<section class="services_post_content clearfix" itemprop="articleBody">
							<div class="container"> 
								<div class="bio-wrapper">
									<div class="page-header text-center"><h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1></div>
								<?php the_content(); ?>
								</div>
							</div>
							<?php foreach($services as $service) { ?>
							<div class="service">							
								<div class="container">
									<div class="bio-wrapper">
										<div class="services-wrapper">
											
											<div class="row"> 
												<h2 class="text-center service-title"><?php echo $service['crb_service_title'];  ?></h2>
												<?php foreach ($service['crb_service_content'] as $service_content ) { $i++ ?>
												
												<div class="col-sm-6">
													<div class="border1 border <?php if($i%2 == 1 ) {echo "pull-right"; } ?>"> 
														<div class="border-top"></div>
														<div class="border-bottom"></div>
														<div class="border-left"></div>
														<div class="border-right"></div>
														<?php echo $service_content['crb_service_content']; ?>
													</div>																				
												</div>
												<?php } ?>
									
											</div>	
											
										</div>
									</div>
								</div>
								<div class="slider-service">
									<div class="slider-center"> 
										<?php foreach($service['crb_service_slider'] as $slide){ ?>
											<div class="banner-image" style="background-image:url('<?php echo $slide['insert_photo'];?>'); width:100%; height:527px"></div>
										<?php } ?>	
									</div>
								</div>								
							</div>
							<?php } ?>
							<div class="prop-section">
								<div class="container bio-bg">
									<div class="prop-content-wrapper ">
										<div class="prop1-img banner-image" style="background-image:url('<?php echo $prop_img1; ?>');"></div>
										<div class="prop2-img banner-image" style="background-image:url('<?php echo $prop_img2; ?>');"></div>
										<div class="prop-content">
											<div class="col-sm-4 col-centered text-center">
												<h2 class="service-title"><?php echo $prop_title; ?></h2>
												<p><?php echo $prop_desc; ?></p>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<div class="backdrop-section"> 
								<div class="container bio-bg">
									<div class="backdrop-content-wrapper">								
										<div class="col-sm-6 col-centered text-center">
											<h2 class="service-title"><?php echo $back_title; ?></h2>
											<p>
												<?php echo $back_desc; ?>
											</p>
										</div>

									</div>
								</div>
								<div class="gallery-image"> 
									<div class="container bio-bg"></div>
									<div class="col-sm-11 col-centered text-center"> 
										<div class="backdrop-gallery">
										<?php foreach($galleries as $gallery) { ?>
											<div class="col-sm-3"> 
												<div class="banner-image gallery" style="background-image:url('<?php echo $gallery['insert_photo'];  ?>')"> </div>
											</div>
										<?php } ?>												
										</div>
									</div>
								
								</div>								
							</div>
							
							<div class="other-stuff"> 
								<div class="container bio-bg">
									<div class="row">
										<div class="col-sm-4 col-sm-offset-2">
											<div class="stuff-content text-center">
												<h2 class="service-title">other stuff</h2>
												<p>Extra Polaroid shots: $20 a packet / $2 each</p>
												<p>Additional hours: $150/hr</p>
												<p>Custom engraved timber guest book: From $130
													Includes pens and washi tape plus different options for covers and binding colours. Live the minimalist dream with this perfect wooden keepsake for your rocking event.</p>
												<p>Custom laser cut signs: From $60</p>
												<p>Custom props: custom quote</p>
												<p>Custom backdrops: custom quote</p>												
											</div>
										</div>
										<div class="col-sm-4 col-sm-offset-1">
											<div class="stuff-image-wrap"> 
												<div class="stuff-image banner-image"> 
													
												</div>
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