<?php 
	
	/* Template Name: Mentor */
	
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
			
				<?php the_field( 'mentor_content' ); ?>
				
				<h2><?php the_field( 'meet_the_mentors_title' ); ?></h2>
					
				
				<?php if(get_field('bio_grid_mentors')): ?>

	<div class="bio_grid">
 
	<?php while(has_sub_field('bio_grid_mentors')): ?>
 
		
		
				<div class="single_bio_grid">
						
						<div class="image_wrapper">
							
							<?php 
							
								$imageIDbw = get_sub_field('black_and_white_image');
								$alt_textbw = get_post_meta($imageIDbw , '_wp_attachment_image_alt', true); 
								$result_onebw = wp_get_attachment_image_src($imageIDbw, 'bioimage');
								$imageID = get_sub_field('bio_image');
								$alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
								$result_one = wp_get_attachment_image_src($imageID, 'bioimage');
							
							?>
							
							<img class="black_white" src="<?php echo $result_onebw[0]; ?>" alt="<?php echo $alt_textbw; ?>"/>
							
							<img class="color" src="<?php echo $result_one[0]; ?>" alt="<?php echo $alt_text; ?>"/>
							
						</div><!-- image_wrapper -->
						
						<div class="bio_content">
							
							<h2 class="bio_name"><?php the_sub_field( 'name' ); ?></h2>
							
							<span class="location"><a href="<?php the_sub_field( 'location_link' ); ?>">{<?php the_sub_field( 'location' ); ?>}</a></span><!-- bio_name -->
							
 							<span class="quote"><?php the_sub_field( 'quote' ); ?></span><!-- bio_position -->
							
							<span class="read_bio">Read Bio</span><!-- read_bio -->
							
						</div><!-- bio_content -->
						
						<div class="bio_overlay_bg">
							
							<div class="bio_overlay_wrapper">
								
								<span class="bio_overlay_close">X</span><!-- close -->
								
								<h2><?php the_sub_field( 'name' ); ?></h2>
								
								<?php the_sub_field( 'bio_content' ); ?>								
								
								
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
