<?php 
	
	/* Template Name: Contact Us */
	
	get_header(); ?>
	
	
	<div class="inner_main">
		
		
		<?php get_template_part('sidebar','contact'); ?>
		
		<div class="inner_container">
			
			<div class="content_wrapper content">
			
				<h1 class="contact_header">Contact { US }</h1><!-- contact_header -->
				
				
				<h2>Lorem Ipsum</h2>
				
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				
				<div class="contact_form_wrapper">
					
					<?php gravity_form(2, false, false, false, '', true, 12); ?>
					
				</div><!-- form_wrapper -->
				
				
			</div><!-- content -->
			
			
		</div><!-- inner_container -->
	
		
	</div><!-- inner_main -->



<?php get_footer(); ?>
