<?php
	
	/* Template Name: Franchising */
	
	get_header(); ?>


<div class="inner_main">
		
		
		<?php get_sidebar(); ?>
		
		<div class="inner_container">
			
			
			
			<div class="content_wrapper content">
			
				
				<div class="franchise_header_wrapper">
				

					
					
					<h1 class="franchise_title"><?php the_field( 'h1_titles_first_word' ); ?> <span>{<?php the_field( 'h1_titles_word_in_brackets' ); ?>}</span></h1>
					
					

					
					</div><!-- franchise_header_wrapper -->
					
					
			
			
					<?php the_field( 'video' ); ?>		
					
				
				
				
				
				<?php if(get_field('sections_franchise')): ?>
				 
					<?php while(has_sub_field('sections_franchise')): ?>
				 
						
				    
							<div class="franchise_section">
					
					
								<?php if(get_sub_field('h2_first_word')):?>
								
									<h2><?php the_sub_field( 'h2_first_word' ); ?> <span>{<?php the_sub_field( 'h2_word_in_brackets' ); ?>}</span></h2>
								
								<?php endif; ?>
					
					
								<?php the_sub_field( 'section_content' ); ?>
					
								
				
							</div><!-- franchise_section -->
					
					
					
					
					
					
					<?php endwhile; ?>
				 
				<?php endif; ?>
				
				

				
				<div class="button_wrapper" style="display: none;">
					
					<?php if(get_field('back')) { ?>
					
					<a class="" href="<?php the_field('back');?>">< Back</a>
						
					<?php }?>
					
					
					<?php if(get_field('next')) { ?>
					
					<a class="" href="<?php the_field('next');?>"> Next ></a>
						
					<?php }?>
					
				</div><!-- button_wrapper -->
				
			</div><!-- content -->
			
			
		</div><!-- inner_container -->
	
		
	</div><!-- inner_main -->





<?php get_footer(); ?>
