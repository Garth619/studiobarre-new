<?php 
	
	/* Template Name: Q + A */
	
	get_header(); ?>
	
	
	<div class="inner_main">
		
		
		<?php get_sidebar(); ?>
		
		<div class="inner_container">
			
			
			
			<div class="content_wrapper content">
			
				<h2 class="white"><?php the_field( 'q_and_a_title' ); ?></h2>
				
				
				<?php if(get_field('q_and_a')): ?>
				 
					<?php while(has_sub_field('q_and_a')): ?>
				 
						<h2><?php the_sub_field( 'question' ); ?></h2>
				    
				    <?php the_sub_field( 'answer' ); ?>
				    
					<?php endwhile; ?>
				 
				<?php endif; ?>
				
				
			</div><!-- content -->
			
			
		</div><!-- inner_container -->
	
		
	</div><!-- inner_main -->



<?php get_footer(); ?>
