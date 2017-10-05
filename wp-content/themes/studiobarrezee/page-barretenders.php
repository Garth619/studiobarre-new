<?php 
	
	/* Template Name: Barre Tenders */
	
	get_header(); ?>
	
	
	<div class="inner_main">
		
		
		<?php get_sidebar(); ?>
		
		<div class="inner_container">
			
			
			<div class="content_wrapper content location_content">
			
				<h1><?php the_title();?></h1>
				
				<h2 class="white">We're here to tuck you up!</h2>
				
				<?php if(get_field('bio_grid')): ?>

	<div class="bio_grid">
 
	<?php while(has_sub_field('bio_grid')): ?>
 
		
		
				<div class="single_bio_grid">
						
						<div class="image_wrapper">
							
														
							<?php if(! get_sub_field('black_and_white_image')):?>
							
							<img class="" src="<?php bloginfo('template_directory');?>/images/profile.jpg" alt="No Profile"/>
							
							<?php else:?>
							
							
							<?php 
							
								$imageIDbw = get_sub_field('black_and_white_image');
								$result_onebw = wp_get_attachment_image_src($imageIDbw, 'bioimage');
								$imageID = get_sub_field('bio_image');
								$result_one = wp_get_attachment_image_src($imageID, 'bioimage');
							
							?>
							
							<img class="black_white" src="<?php echo $result_onebw[0]; ?>" alt="<?php the_sub_field( 'name' ); ?> - black and white"/>
							
							
							
							<img class="color" src="<?php echo $result_one[0]; ?>" alt="<?php the_sub_field( 'name' ); ?>"/>

							
							<?php endif;?>
						
							
						</div><!-- image_wrapper -->
						
						<div class="bio_content">
							
							<h2 class="bio_name"><?php the_sub_field( 'name' ); ?></h2>
							
							<span class="location"><?php the_sub_field( 'position' ); ?></span><!-- bio_name -->
							
							<span class="read_bio">Read Bio</span><!-- read_bio -->
							
						</div><!-- bio_content -->
						
						<div class="bio_overlay_bg">
							
							<div class="bio_overlay_wrapper">
								
								<span class="bio_overlay_close">X</span><!-- close -->
								
								<h2><?php the_sub_field( 'name' ); ?></h2>
								
								<?php if(get_sub_field('bio_content')):?>
								
								<?php the_sub_field( 'bio_content' ); ?>
								
								<?php else:?>
								
								<p>Bio Coming Soon!</p>
								
								<?php endif;?>							
								
								
								<?php the_sub_field( 'connect' ); ?>
								
							</div><!-- bio_overlay_wrapper -->
							
						</div><!-- bio_overlay_bg -->
						
					</div><!-- single_bio_grid -->
		
		
		
    
	<?php endwhile; ?>
 
	</div><!-- bio_grid -->
 
<?php endif; ?>
				
				
							
			
			</div><!-- content -->
			
			
			
			
			
			
		</div><!-- inner_container -->
	
		
	</div><!-- inner_main -->



<?php get_footer(); ?>
