<?php 
	
	/* Template Name: Schedule */
	
	get_header(); ?>
	
	
	<div class="inner_main">
		
		
		<?php get_sidebar(); ?>
		
		<div class="inner_container">
			
			
			<div class="content_wrapper content location_content">
			
				<h1><?php the_title();?></h1>
				
				
				<div class="login">
					
					<?php the_field( 'mb_code' ); ?>
					
				</div>
				
				<div class="schedule">
					
					<?php the_field( 'mb_code_-_schedule' ); ?>	
				
				</div><!-- schedule -->
							
			
			</div><!-- content -->
			
			
			
			
			
			
		</div><!-- inner_container -->
	
		
	</div><!-- inner_main -->



<?php get_footer(); ?>
