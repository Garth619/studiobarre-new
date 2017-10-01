<?php 
	
	/* Template Name: Become a Maven */
	
	get_header(); ?>


<div class="inner_main">
		
		
		<?php get_sidebar('maven'); ?>
		
		<div class="inner_container">
			
			<?php if(get_field('inner_banners')):?>
			
				<div class="inner_banner">
			
					<img src="<?php the_field( 'inner_banners' ); ?>"/>
			
				</div><!-- inner_banner -->
			
			<?php endif;?>
			
			<div class="content_wrapper content">
			
				<?php the_field( 'maven_page_content' ); ?>
				
								
				
				
				<span class="how_to_be_title"><?php the_field( 'how_to_be_a_barre_maven_title' ); ?></span><!-- how_to_be_title -->
				
				<div class="maven_requirements">
				
					<?php the_field( 'how_to_be_a_barre_maven_text' ); ?>
				
				</div><!-- maven_requirements -->
				
				<?php get_template_part('bio','grid');?>
				
				
			</div><!-- content -->
			
			
		</div><!-- inner_container -->
	
		
	</div><!-- inner_main -->





<?php get_footer(); ?>
