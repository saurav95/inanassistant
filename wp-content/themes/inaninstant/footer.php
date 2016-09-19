<?php get_template_part( 'template-parts/tagline' ); ?>
<?php get_template_part( 'template-parts/instagram' , 'slider' ); ?>
<?php get_template_part( 'template-parts/subscribe' ); ?>
			<footer role="contentinfo">
			
				<div id="inner-footer" class="clearfix">
		         
		          <div id="widget-footer" class="clearfix row">
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer1') ) : ?>
		            <?php endif; ?>
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer2') ) : ?>
		            <?php endif; ?>
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer3') ) : ?>
		            <?php endif; ?>
		          </div>
					
					
					<div class="container">
						<nav class="clearfix text-center">
							<?php wp_bootstrap_footer_links(); // Adjust using Menus in Wordpress Admin ?>
						</nav>
					</div>
					
						 <hr />
					<div class="container">	 
						<div class="copyright">
							<p class="pull-right">Website by Smack Bang Designs</p>
							<p class="attribution">Copyright 2016 In An Instant Photography </p>
							
						</div>
					</div>
				
				</div> <!-- end #inner-footer -->
				
			</footer> <!-- end footer -->
		
		</div> <!-- end #container -->
				
		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		
		<?php wp_footer(); // js scripts are inserted using this function ?>




	</body>

</html>