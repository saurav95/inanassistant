<?php
/*
Template Name: Praise
*/
?>

<?php get_header(); ?>
			</div><!--container end-->
			<?php 
			$praise_data = carbon_get_post_meta($post->ID , 'crb_praise_posts', 'complex'); 
			
			$i = 0;
			?>
			<div id="content" class="clearfix row">
			
				<div id="main" class="clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
						
							
						<div class="page-header text-center"><h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1></div>
						
					
					
						<section class="praise_post_content clearfix" itemprop="articleBody">
							
							<div class="container">
								<div class="praise-post-wrapper">
								<?php the_content(); ?>
								<?php foreach($praise_data as $praise) { $i++ ?> 
								<div class="praise-posts">
									<div class="row flx <?php if($i%2==1) { echo "odd"; } else { echo "even"; } ?>"> 
										<div class="col-sm-6 <?php if($i%2==0) {echo "flx-right"; }?> ">
											<div class="banner-image arrow praise-image <?php if($i%2==0) {echo "pull-right"; } if($i == 1) {echo "first" ; } echo ' '.$praise['crb_choose_arw']; ?>" style="background-image:url(<?php echo $praise['insert_image']; ?>);"> </div>
										</div>
										<div class="col-sm-6">
											<div class="praise-content"> 
												<p><?php echo nl2br($praise['crb_description']); ?></p>
												<h3><?php echo $praise['crb_subtitle']; ?></h3>
											</div>
										</div>
									</div>
								</div>
								<?php } //end foreach ?>
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