<?php 
	
	/* Template Name: Become a Maven */
	
	get_header(); ?>


<div class="inner_main">
		
		
		<?php get_sidebar('maven'); ?>
		
		<div class="inner_container">
			
			<div class="inner_banner">
			
				<img src="<?php bloginfo('template_directory');?>/images/maven.png"/>
			
			</div><!-- inner_banner -->
			
			<div class="content_wrapper content">
			
				<?php get_template_part( 'loop', 'page' );?>
				
			</div><!-- content -->
			
			
		</div><!-- inner_container -->
	
		
	</div><!-- inner_main -->





<?php get_footer(); ?>
