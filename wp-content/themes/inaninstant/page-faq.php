<?php
/*
Template Name: Faq
*/
?>
<?php get_header(); ?>
			</div> <!-- end #container -->
			<?php 
				$faq_posts = carbon_get_post_meta($post->ID , 'crb_faq_posts', 'complex');
				$i = 0;
			?>
			<div id="content" class="clearfix">
			
				<div id="main" class="clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
					
					
						<section class="default-page clearfix" itemprop="articleBody">
							
							<div class="container">
								<div class="page-default default-bg">
									<div class="text-center">
										<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>
									</div>								
									<div class="page-content">
										<?php the_content(); ?>
										<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
										<?php foreach($faq_posts as $faq_post){ $i++; ?> 
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="heading__<?php echo $i; ?>">
													<h4 class="panel-title">
													<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_<?php echo $i; ?>" aria-expanded="true" aria-controls="collapseOne">
													<i class="more-less <?php if($i == 1) { echo 'minus'; } else { echo 'plus'; }?>"></i>
													<?php echo $faq_post['crb_title']; ?>
													</a>
													</h4>
												</div>
												<div id="collapse_<?php echo $i; ?>" class="panel-collapse collapse <?php if($i == 1) {echo "in"; }?>" role="tabpanel" aria-labelledby="headingOne">
													<div class="panel-body">
														<?php echo nl2br($faq_post['crb_description']); ?>
													</div>
												</div>
											</div>
										<?php } ?>	
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
    
				<?php //get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->

<?php get_footer(); ?>