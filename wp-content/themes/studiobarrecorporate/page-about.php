<?php 
	
	/* Template Name: About */
	
	get_header(); ?>
	
	
	<div class="inner_main">
		
		
		<?php get_sidebar(); ?>
		
		<div class="inner_container">
			
			<?php if(get_field('inner_banners')):?>
			
				<div class="inner_banner">
			
					<img src="<?php the_field( 'inner_banners' ); ?>"/>
			
				</div><!-- inner_banner -->
			
			<?php endif;?>
			
			<div class="content_wrapper content">
			
				<?php get_template_part('loop','page');?>
				
			</div><!-- content -->
			
			
		</div><!-- inner_container -->
	
		
	</div><!-- inner_main -->



<?php get_footer(); ?>
