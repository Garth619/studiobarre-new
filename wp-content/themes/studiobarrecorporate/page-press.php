<?php 
	
	/* Template Name: Press */
	
	get_header(); ?>

	<div class="inner_main">
		
		
		
		
		<div class="inner_container one_column">
			
		
			
			<div class="content_wrapper content">
			
				
				
				
				<div class="single_press_wrapper">
			
					<?php $press_image = wp_get_attachment_image_src(get_field('press_image'), 'press'); ?>
					
					<div class="front" style="background: url(<?php echo $press_image[0]; ?>) repeat scroll 0% 0% / 191px 182px;">
			
					</div><!-- front -->
 
					<div class="back">
   
						<h1><a href="<?php the_field('press_link');?>" target="_blank"><?php the_title();?></a></h1>
					
						<p><a href="<?php the_field('press_link');?>" target="_blank"><?php the_field('sub_titledescription');?></a></p>
					
						<a href="<?php the_field('press_link');?>" target="_blank"><img class="chain" src="<?php bloginfo('template_directory');?>/images/chain.png"/></a>
  
  				
  				</div><!-- back -->
  		
					<div style="margin-top:200px"><?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?></div>
				
				</div><!-- single_press_wrapper -->
				
			</div><!-- content -->
			
			
		
		
		
		
		</div><!-- inner_container -->
	
		
	</div><!-- inner_main -->





<?php get_footer(); ?>
