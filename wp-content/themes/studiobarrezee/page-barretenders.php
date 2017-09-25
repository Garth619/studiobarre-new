<?php 
	
	/* Template Name: Barre Tenders */
	
	get_header(); ?>
	
	
	<div class="inner_main">
		
		
		<?php get_sidebar(); ?>
		
		<div class="inner_container">
			
			
			<div class="content_wrapper content location_content">
			
				<h1><?php the_title();?></h1>
				
				<h2 class="white">We're here to tuck you up!</h2>
				
				<?php get_template_part('bio','grid');?>
				
				
							
			
			</div><!-- content -->
			
			
			
			
			
			
		</div><!-- inner_container -->
	
		
	</div><!-- inner_main -->



<?php get_footer(); ?>
