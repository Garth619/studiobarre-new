<?php get_header(); ?>




<div class="inner_main">
		
		
		<?php get_template_part('sidebar','blog'); ?>
		
		<div class="inner_container">
			
			
			<div class="content_wrapper content">
			
				<?php  get_template_part( 'loop', 'index' );?>
				
								
				</div><!-- content -->
			
			
		</div><!-- inner_container -->
	
		
	</div><!-- inner_main -->




<?php get_footer(); ?>


