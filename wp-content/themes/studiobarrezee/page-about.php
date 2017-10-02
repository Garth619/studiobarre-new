<?php 
	
	/* Template Name: About */
	
	get_header(); ?>
	
	
	<div class="inner_main">
		
		
		<?php get_sidebar(); ?>
		
		<div class="inner_container">
			
			
			<div class="content_wrapper content location_content">
			
				<h1><?php the_title();?></h1>
				
				
			<?php get_template_part('loop','page');?>
				
			
			<div class="slideshow about_slideshow">
				
				<?php if(get_field('about_slideshow')): ?>
				 
					<?php while(has_sub_field('about_slideshow')): ?>
				 
					
						
						<div class="slide_wrapper">
							
							<?php $slide = get_sub_field( 'slide' ); ?>
							
							<img data-lazy="<?php echo $slide['url']; ?>" alt="<?php echo $slide['alt']; ?>"/>
							
						</div>
					
					
				    
					<?php endwhile; ?>
				 
				<?php endif; ?>
					
	
			</div><!-- slideshow -->
			
			
			
			</div><!-- content -->
			
			
			
			
			
			
		</div><!-- inner_container -->
	
		
	</div><!-- inner_main -->



<?php get_footer(); ?>
