<?php
	
	/* Template Name: Thank You */
	
	get_header(); ?>


<div class="inner_main">
		
		
		<?php get_sidebar(); ?>
		
		<div class="inner_container">
			
			
			
			<div class="content_wrapper content">
			
				
				<div class="franchise_header_wrapper">
				

					
					
					<h1 class="franchise_title"><?php the_field( 'h1_titles_first_word' ); ?> <span>{<?php the_field( 'h1_titles_word_in_brackets' ); ?>}</span></h1>
					
					

					
					</div><!-- franchise_header_wrapper -->
					

				    
							<div class="franchise_section">
					
					
												<?php the_content();?>	
								
				
							</div><!-- franchise_section -->
					
					
					
					

				

				
				
				
			</div><!-- content -->
			
			
		</div><!-- inner_container -->
	
		
	</div><!-- inner_main -->





<?php get_footer(); ?>
