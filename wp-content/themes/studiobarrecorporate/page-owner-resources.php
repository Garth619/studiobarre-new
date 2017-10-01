<?php 
	
	/* Template Name: Owner Resources */
	
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
				
				<?php if(get_field('owner_resources')): ?>
				 
					<?php while(has_sub_field('owner_resources')): ?>
					
					
				 
						<h2>
							
							<?php if(get_sub_field('link_or_file') == 'External Link'):?>
							
								<a href="<?php the_sub_field( 'external_link' ); ?>" target="_blank">
								
								<?php else:?>
								
								<a href="<?php the_sub_field( 'file' ); ?>" target="_blank">
							
							<?php endif;?>
								
								<?php the_sub_field( 'title' ); ?>
								
							</a>
							
						</h2>
				
						<p><?php the_sub_field( 'description' ); ?></p>
				    
					<?php endwhile; ?>
				 
				<?php endif; ?>
				
				<?php } ?>
				
				

				
				
				
			</div><!-- content -->
			
			
		</div><!-- inner_container -->
	
		
	</div><!-- inner_main -->





<?php get_footer(); ?>
