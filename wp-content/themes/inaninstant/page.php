<?php get_header(); ?>
			</div> <!-- end #container -->
			
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
									<div class="page-content"><?php the_content(); ?></div>
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