<?php 
	
	/* Template Name: Press */
	
	get_header(); ?>

	<div class="inner_main">
		
		
		
		
		<div class="inner_container one_column">
			
		
			
			<div class="content_wrapper content">
				
				<h1 class="press_header"><?php the_title();?></h1>
			
				
				<div class="press_wrapper">
					
					
					
					
					<?php if(get_field('press')): ?>
					 
						<?php while(has_sub_field('press')): ?>
						
						
							<div class="single_press_wrapper">
					
								<?php $pressbg = wp_get_attachment_image_src(get_sub_field('press_image'), 'pressimage'); ?>
            	
						
								<div class="front" style="background: rgba(0, 0, 0, 0) url(<?php echo $pressbg[0]; ?>) no-repeat scroll center top / cover ;">
					
								</div><!-- front -->
 					
								<div class="back">
   				
									<?php if(get_sub_field('outside_link_or_pdf') == 'External Weblink'):?>
								
										<a href="<?php the_sub_field( 'press_link' ); ?>" target="_blank">
											
										<?php else:?>
											
										<a href="<?php the_sub_field( 'press_pdf' ); ?>" target="_blank">
											
										<?php endif;?>
							
										<h1><?php the_sub_field( 'press_title' ); ?></h1>
						
										<p><?php the_sub_field( 'press_description' ); ?></p>
						
										<div class="chain_wrapper">
										
											<img class="chain" src="<?php bloginfo('template_directory');?>/images/chain.png"/>
										
										</div><!-- chain_wrapper -->
							
									</a>
  				
  					
  						</div><!-- back -->
  				
						</div><!-- single_press_wrapper -->
					 
							
					    
						<?php endwhile; ?>
					 
					<?php endif; ?>

				
				
				</div><!-- press_wrapper -->
				
			</div><!-- content -->
			
			
		
		
		
		
		</div><!-- inner_container -->
	
		
	</div><!-- inner_main -->





<?php get_footer(); ?>
