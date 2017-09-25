<?php 
	
	/* Template Name: Home */
	
	get_header(); ?>



<?php get_header(); ?>


<div class="inner_main">
		
		<div class="inner_banner inner_home_mobile">
			
				<img src="<?php bloginfo('template_directory');?>/images/banner.jpg"/>
			
			</div><!-- inner_banner -->
		
		<?php get_sidebar(); ?>
		
		<div class="inner_container">
			
			
			<div class="inner_banner inner_home_desktop">
			
				<img src="<?php bloginfo('template_directory');?>/images/banner.jpg"/>
			
			</div><!-- inner_banner -->
			
			
			<div class="content_wrapper content">
			
				<?php // get_template_part( 'loop', 'page' );?>
				
				<h2 class="white">Main Title Here</h2>
				
				<h2>subtitle</h2>
				
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				
			</div><!-- content -->
			
			
		</div><!-- inner_container -->
	
		
	</div><!-- inner_main -->





<?php get_footer(); ?>