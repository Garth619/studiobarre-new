<?php 
	
	/* Template Name: Events */
	
	get_header(); ?>
	
	
	<div class="inner_main">
		
		
		<?php get_sidebar(); ?>
		
		<div class="inner_container">
			
			
			<div class="content_wrapper content location_content">
			
				<h1><?php the_title();?></h1>
				
				
				<?php $mymain_query = new WP_Query( array( 'post_type' =>  'events' ) ); while($mymain_query->have_posts()) : $mymain_query->the_post(); ?>
           
          
          <div class="single_post">
					
						<h2><?php the_title();?></h2>
					
						<?php the_content();?>
					
					
						<?php $my_date = get_the_date(); ?>


						<span class="posted_on">Posted On <?php echo $my_date; ?><?php edit_post_link( __( 'Edit', 'twentyten' ), '&nbsp;&nbsp;|&nbsp;&nbsp;', '' ); ?></span><!-- posted_on -->
					
			
					</div><!-- single_post -->

 
         <?php endwhile; ?>
        <?php wp_reset_postdata(); // reset the query ?>

				
					
			</div><!-- content -->
			

			
		</div><!-- inner_container -->
	
		
	</div><!-- inner_main -->



<?php get_footer(); ?>
