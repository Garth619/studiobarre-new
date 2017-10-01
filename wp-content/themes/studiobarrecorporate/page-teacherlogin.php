<?php 
	
	/* Template Name: Teacher Login */
	
	get_header(); ?>


<div class="inner_main">
		
		
		<?php get_sidebar(); ?>
		
		<div class="inner_container">
			
			
			
			<div class="content_wrapper content">
				
				
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				
					<?php the_content();?>
				
				<?php endwhile; // end of loop ?> 

				<?php endif; ?>
				
				
				<?php if ( ! post_password_required() ) { ?>
				
				conent
				
				<?php } ?>			
								
				
				
			</div><!-- content -->
			
			
		</div><!-- inner_container -->
	
		
	</div><!-- inner_main -->





<?php get_footer(); ?>
