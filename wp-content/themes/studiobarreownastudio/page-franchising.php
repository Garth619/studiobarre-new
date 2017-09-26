<?php
	
	/* Template Name: Franchising */
	
	get_header(); ?>


<div class="inner_main">
		
		
		<?php get_sidebar(); ?>
		
		<div class="inner_container">
			
			
			
			<div class="content_wrapper content">
			
				
				<h1><?php the_title();?></h1>
				
				<?php get_template_part( 'loop', 'index' );?>
				
				
				<div class="button_wrapper">
					
					<a class="" href="">Back</a>
					<a class="" href="">Next</a>
					
				</div><!-- button_wrapper -->
				
			</div><!-- content -->
			
			
		</div><!-- inner_container -->
	
		
	</div><!-- inner_main -->





<?php get_footer(); ?>
