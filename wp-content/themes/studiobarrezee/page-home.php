<?php 
	
	/* Template Name: Home */
	
	get_header(); ?>



<?php get_header(); ?>


<div class="inner_main">
		
		<div class="inner_banner inner_home_mobile">
			
				<img src="<?php bloginfo('template_directory');?>/images/carmel.jpg"/>
			
			</div><!-- inner_banner -->
		
		<?php get_sidebar(); ?>
		
		<div class="inner_container">
			
			
			<div class="inner_banner inner_home_desktop">
			
				<img src="<?php bloginfo('template_directory');?>/images/banner-carmel.jpg"/>
			
			</div><!-- inner_banner -->
			
			
			<div class="content_wrapper content">
			
				
				
				<?php if(get_field('home_page_title')):?>
				
					<h2 class="white"><?php the_field( 'home_page_title' ); ?></h2>
					
				<?php endif;?>
				
				
				<?php get_template_part( 'loop', 'page' );?>
				
				
			</div><!-- content -->
			
			
		</div><!-- inner_container -->
	
		
	</div><!-- inner_main -->





<?php get_footer(); ?>