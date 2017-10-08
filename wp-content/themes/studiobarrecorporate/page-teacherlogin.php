<?php 
	
	/* Template Name: Teacher Login */
	
	get_header(); ?>


<div class="inner_main">
		
		
		<?php get_sidebar(); ?>
		
		<div class="inner_container">
			
			
			
			<div class="content_wrapper content">
				
				
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				
					<?php the_content();?>
				
				<?php endwhile; // end of loop ?> 

				<?php endif; ?>
				
				
				<?php if ( ! post_password_required() ) { ?>
				
				
				
				
				<?php $posts = get_field('video_pages');
				
				if( $posts ): ?>
				    
				    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
				        <?php setup_postdata($post); ?>
				       
								<h2 style="margin-bottom:20px;"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
				       
				    <?php endforeach; ?>
				    
				    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
				<?php endif; ?>
				
				
				
				
				<?php } ?>			
								
				
				
			</div><!-- content -->
			
			
		</div><!-- inner_container -->
	
		
	</div><!-- inner_main -->





<?php get_footer(); ?>
