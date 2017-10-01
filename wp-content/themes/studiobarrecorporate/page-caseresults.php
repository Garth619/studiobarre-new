<?php 
	
	/* Template Name: Case Results*/
	
	get_header(); ?>
	
	
	<div class="inner_main">
		
		
		<div class="inner_container one_column">
			
			<div class="one_column_header content">
				
				<h1 class="header_script center">Real Results</h1><!-- one_column -->
				
			</div><!-- one_column_header -->
			
			<div class="content_wrapper content">
			
				
				
				<div class="case_results_wrapper">
					
					
					
					<?php if(get_field('case_results')): ?>
					 
						<?php while(has_sub_field('case_results')): ?>
					 
							
								
								<div class="single_case_results">
						
									<div class="case_image_wrapper">
										
										
										<?php $imageID = get_sub_field('results_image'); ?>
										<?php $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true); ?>
										<?php $result_one = wp_get_attachment_image_src($imageID, 'caseresultsimage'); ?>
										
<!-- 										<img alt="<?php echo $alt_text; ?>" id="inner_menu_1" class="inner_menu_thumbs" src="<?php echo $menu_one[0]; ?>"/> -->
										
										<img src="<?php echo $result_one[0]; ?>" alt="<?php echo $alt_text; ?>"/>
							
								</div><!-- case_image_wrapper -->
						
						
						
								<div class="case_results_content">
							
									<span class="case_results_title"><?php the_sub_field( 'name' ); ?></span>
									<p>Location: <?php the_sub_field( 'location' ); ?></p>
									<p>Years Tucking: <?php the_sub_field( 'years_tucking' ); ?></p>
							
									<p><?php the_sub_field( 'excerpt' ); ?>...</p>
							
									<span class="case_results_read_more">Read</span><!-- case_results_read_more -->
							
									<div class="read_more_case">
								
									<?php the_sub_field( 'read_more' ); ?>

								
								</div><!-- read_more_case -->

							
							</div><!-- case_results_content -->
						
						
						</div><!-- single_case_results -->
							
							
							
					    
						<?php endwhile; ?>
					 
					<?php endif; ?>
					
					
					
					
					
					
					
				</div><!-- case_results_wrapper -->
				
			
			</div><!-- content -->
			
			
		</div><!-- inner_container -->
	
		
	</div><!-- inner_main -->



<?php get_footer(); ?>
