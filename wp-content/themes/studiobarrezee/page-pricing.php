<?php 
	
	/* Template Name: Pricing */
	
	get_header(); ?>
	
	
	<div class="inner_main">
		
		
		<?php get_sidebar(); ?>
		
		<div class="inner_container">
			
			
			<div class="content_wrapper content location_content">
			
				<h1><?php the_title();?></h1>
				
				
				<div class="pricing_wrapper">
					
					
				<?php if(get_field('most_popular_title')):?>
	
					
					<div class="box_wrapper">
						
						<div class="box_title_wrapper">Most Popular</div><!-- box_title_wrapper -->
						
						<div class="box_description_wrapper">
							
							<div class="box_description_inner_wrapper">
							
							<div class="box_single_description">
								
								<span class="box_single_title"><?php the_field( 'most_popular_title' ); ?></span><!-- box_single_title -->
								
								
								
								
								<div class="box_single_content">
									
									<div class="single_line_wrapper">
									
										<span class="single_line_left"><?php the_field( 'most_popular_description' ); ?></span>
									
										<span class="single_line_right"><?php the_field( 'most_popular_price' ); ?></span><!-- single_line_right -->
										
									</div><!-- single_line_wrapper -->
									
									<?php if(get_field('most_popular_single_line_description')):?>
									
										<span class="single_line"><?php the_field( 'most_popular_single_line_description' ); ?></span><!-- single_line -->
									
									<?php endif;?>
									
								</div><!-- box_single_content -->
								
								<?php if(get_field('most_popular_asterisk')):?>
								
									<span class="single_line_ast"><?php the_field( 'most_popular_asterisk' ); ?></span><!-- single_line_right -->
								
								<?php endif;?>
								
							</div><!-- box_single_description -->
							
							</div><!-- box_description_inner_wrapper -->
							
							
							
							
							
						</div><!-- box_description_wrapper -->
						
						<?php if(get_field('most_popular_link')):?>
						
							<a class="buy_now" href="<?php the_field( 'most_popular_link' ); ?>" target="_blank">Buy Now</a><!-- buy_now -->
						
						<?php endif;?>
						
						
					</div><!-- box_wrapper -->
					
					<?php endif;?>
					
					<?php if(get_field('new_to_the_studio_title')):?>
					
					
					<div class="box_wrapper">
						
						<div class="box_title_wrapper">New to the Studio</div><!-- box_title_wrapper -->
						
						<div class="box_description_wrapper">
							
							<div class="box_description_inner_wrapper">
							
							<div class="box_single_description">
								
								<span class="box_single_title"><?php the_field( 'new_to_the_studio_title' ); ?></span><!-- box_single_title -->
								
								
								
								<div class="box_single_content">
									
									<div class="single_line_wrapper">
									
										<span class="single_line_left"><?php the_field( 'new_to_the_studio_description' ); ?></span>
									
										<span class="single_line_right"><?php the_field( 'new_to_the_studio_price' ); ?></span><!-- single_line_right -->
										
									</div><!-- single_line_wrapper -->
									
									<?php if(get_field('new_to_the_studio_single_line_description')):?>
									
										<span class="single_line"><?php the_field( 'new_to_the_studio_single_line_description' ); ?></span><!-- single_line -->
									
									<?php endif;?>
									
								</div><!-- box_single_content -->
								
						
								<?php if(get_field('new_to_the_studio_asterisk')):?>
								
									<span class="single_line_ast"><?php the_field( 'new_to_the_studio_asterisk' ); ?></span><!-- single_line_right -->
								
								<?php endif;?>
								
								
							</div><!-- box_single_description -->
							
							</div><!-- box_description_inner_wrapper -->
							
							
							
							
							
						</div><!-- box_description_wrapper -->
						
						
						<?php if(get_field('new_to_the_studio_link')):?>
						
							<a class="buy_now" href="<?php the_field( 'new_to_the_studio_link' ); ?>" target="_blank">Buy Now</a><!-- buy_now -->
							
						<?php endif;?>
						
						
					</div><!-- box_wrapper -->
					
					<?php endif;?>
					
					
					<?php if(get_field('regular_pricing')): ?>
					 
						<?php while(has_sub_field('regular_pricing')): ?>
					 
							<div class="reg_price_wrapper">
						
								<span class="reg_price_title"><?php the_sub_field( 'regular_title' ); ?></span>
						
								
									
									
									<?php if(get_sub_field('regular_description_and_price')): ?>
									
										<?php while(has_sub_field('regular_description_and_price')): ?>
									 
											<div class="reg_single_line_wrapper">
											
												<span class="single_line_left"><?php the_sub_field( 'regular_line_description' ); ?></span><!-- single_line_left -->
									
												<span class="single_line_right"><?php the_sub_field( 'regular_line_price' ); ?></span><!-- single_line_right -->
											
											</div><!-- reg_single_line_wrapper -->
											
											
									    
										<?php endwhile; ?>
										
									<?php endif; ?>
									
							
							
								
								
								<?php if(get_sub_field('regular_single_line_description')):?>
									
									<span class="single_line"><?php the_sub_field( 'regular_single_line_description' ); ?></span><!-- single_line -->
									
								<?php endif;?>
								
								<?php if(get_sub_field('regular_asterisk')):?>
								
									<span class="reg_ast"><?php the_sub_field( 'regular_asterisk' ); ?></span><!-- single_line_right -->
								
								<?php endif;?>
							
							</div><!-- reg_price_wrapper -->	
					    
						<?php endwhile; ?>
					 
					<?php endif; ?>

										
					<div class="shop_all_wrapper">
					
						<?php if(get_field('shop_all_packages')):?>
					
						<a class="shop_all" href="<?php the_field( 'shop_all_packages' ); ?>" target="_blank">Shop All Class Packages</a>
						
						<?php endif;?>
						
						<?php if(get_field('shop_gift_cards')):?>
						
						<a class="shop_all" href="<?php the_field( 'shop_gift_cards' ); ?>" target="_blank">Shop Gift Cards</a>
						
						<?php endif;?>
					
					</div><!-- pricing_wrapper -->
					
					
				</div><!-- pricing_wrapper -->
							
			
			</div><!-- content -->
			
			
			
			
			
			
		</div><!-- inner_container -->
	
		
	</div><!-- inner_main -->



<?php get_footer(); ?>
