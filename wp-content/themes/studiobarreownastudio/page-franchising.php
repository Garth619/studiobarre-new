<?php
	
	/* Template Name: Franchising */
	
	get_header(); ?>


<div class="inner_main">
		
		
		<?php get_sidebar(); ?>
		
		<div class="inner_container">
			
			
			
			<div class="content_wrapper content">
			
				
				<div class="franchise_header_wrapper">
				
				<?php if(get_field('back')) { ?>
					
					<a class="top_buttons" href="<?php the_field('back');?>"><</a>
						
					<?php }?>
					
					
					<h1 class="franchise_title"><?php the_field( 'h1_titles_first_word' ); ?> <span>{<?php the_field( 'h1_titles_word_in_brackets' ); ?>}</span></h1>
					
					
					<?php if(get_field('next')) { ?>
					
					<a class="top_buttons" href="<?php the_field('next');?>">></a>
						
					<?php }?>
					
					</div><!-- franchise_header_wrapper -->
				
				<?php get_template_part( 'loop', 'index' );?>
				
				
				<div class="button_wrapper">
					
					<?php if(get_field('back')) { ?>
					
					<a class="" href="<?php the_field('back');?>">< Back</a>
						
					<?php }?>
					
					
					<?php if(get_field('next')) { ?>
					
					<a class="" href="<?php the_field('next');?>"> Next ></a>
						
					<?php }?>
					
				</div><!-- button_wrapper -->
				
			</div><!-- content -->
			
			
		</div><!-- inner_container -->
	
		
	</div><!-- inner_main -->





<?php get_footer(); ?>
