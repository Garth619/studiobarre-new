	<?php if(get_sub_field( 'video_or_linked_slide' ) == 'Video'):?>
		
			<div class="slide_wrapper video_wrapper video_wrapper_<?php echo $count;?>">
			
				<a href="#">
					
					<img class="video_slide" data-lazy="<?php the_sub_field( 'slide' ); ?>" alt="<?php the_sub_field( 'alt_tag' ); ?>"/>
		
				</a>
			
			</div><!-- slide_wrapper -->
			
	
			
			<?php else:?>
			
			
			<div class="slide_wrapper">
			
				<a href="<?php the_sub_field( 'page_link' ); ?>">
			
					<img data-lazy="<?php the_sub_field( 'slide' ); ?>" alt="<?php the_sub_field( 'alt_tag' ); ?>"/>
	
				</a>
			
			</div><!-- slide_wrapper -->
		
			
		<?php endif;?>
		
	<?php $count++; ?>