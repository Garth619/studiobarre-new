<?php
	
	/* Template Name: Holiday */
	
	 get_header(); ?>


<div class="inner_main">
		
		
		<div class="inner_container" style="min-height:500px;padding-left:0;width:100%;">
			
			
			<div class="content_wrapper content location_content">
			
				<h1><?php the_title();?></h1>
				
				
				
				
				
				<?php get_template_part('loop','page');?>
							
			
			</div><!-- content -->
			
			
			
			
			
			
		</div><!-- inner_container -->
	
		
	</div><!-- inner_main -->



<?php get_footer(); ?>
