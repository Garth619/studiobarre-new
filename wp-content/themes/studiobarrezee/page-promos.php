<?php 
	
	/* Template Name: Promotions */
	
	get_header(); ?>


<div class="inner_main">
		
		
		<?php get_sidebar(); ?>
		
		<div class="inner_container">
			
			
			<div class="content_wrapper content location_content">
			
				<h1><?php the_title();?></h1>
				
				
				<div class="promo_wrapper">
					
					<?php if(get_field('promo')): ?>
					 
						<?php while(has_sub_field('promo')): ?>
					 
					    
					    <div class="single_promo">
					
								<h2><?php the_sub_field( 'promo_title' ); ?></h2>
								
								<?php $promo_image = get_sub_field( 'promo_image' ); ?>
								
								<?php if(get_sub_field( 'promo_link' )):?>
								
								
									<?php if( get_sub_field('open_link_in_a_new_browser_tab') == 'Open Link in New Browser Tab' ): ?>
	
										<a href="<?php the_sub_field( 'promo_link' );?>" target="_blank">
											
											<img src="<?php echo $promo_image['url']; ?>" alt="<?php echo $promo_image['alt']; ?>"/>
										
										</a>
										
										<?php else:?>
										
										<a href="<?php the_sub_field( 'promo_link' );?>">
											
											<img src="<?php echo $promo_image['url']; ?>" alt="<?php echo $promo_image['alt']; ?>"/>
										
										</a>


									<?php endif; ?>
								
								
								<?php else:?>
								
									<img src="<?php echo $promo_image['url']; ?>" alt="<?php echo $promo_image['alt']; ?>"/>
								
								<?php endif;?>
					
							</div><!-- single_promo -->
						
						
						
						<?php endwhile; ?>
					 
					<?php endif; ?>
										
					
				</div><!-- promo_wrapper -->
				
				
			</div><!-- content -->
			
			
		</div><!-- inner_container -->
	
		
	</div><!-- inner_main -->



<?php get_footer(); ?>
