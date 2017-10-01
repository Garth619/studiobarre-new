<?php 
	
	/* Template Name: Contact Us */
	
	get_header(); ?>
	
	
	<div class="inner_main">
		
		
		<?php get_sidebar(); ?>
		
		<div class="inner_container">
			
			<div class="content_wrapper content">
			
				
				<?php get_template_part('loop','page');?>
				
				<div class="contact_form_wrapper">
					
					<?php gravity_form(2, false, false, false, '', true, 1233); ?>
					
				</div><!-- form_wrapper -->
				
				
			</div><!-- content -->
			
			
		</div><!-- inner_container -->
	
		
	</div><!-- inner_main -->



<?php get_footer(); ?>
