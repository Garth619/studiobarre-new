<?php 
	
	/* Template Name: Home */
	
	get_header(); ?>



<?php get_header(); ?>


<div class="inner_main">
		
		
		
		<div class="inner_banner inner_home_mobile">
			
			
			<?php if(get_field('inner_banner')):?>
			
				<?php $inner_banner_mobile = get_field( 'inner_banner' ); ?>
				
					<img src="<?php echo $inner_banner_mobile['url']; ?>" alt="<?php echo $inner_banner_mobile['alt']; ?>" />
			
				<?php //  $mobile_banner = get_field( 'mobile_banner' ); ?>
			
<!-- 				<img src="<?php echo $mobile_banner['url']; ?>" alt="<?php echo $mobile_banner['alt']; ?>"/> -->

			<?php endif;?>
			
			</div><!-- inner_home_mobile -->
		
		<?php get_sidebar(); ?>
		
		<div class="inner_container">
			
			
			<?php if(get_field('inner_banner')):?>
			
				<div class="inner_banner inner_home_desktop">
			
					<?php $inner_banner = get_field( 'inner_banner' ); ?>
				
					<img src="<?php echo $inner_banner['url']; ?>" alt="<?php echo $inner_banner['alt']; ?>" />
			
				</div><!-- inner_banner -->
			
			<?php endif;?>
			
			
			<div class="content_wrapper content">
			
				
				
				<?php if(get_field('home_page_title')):?>
				
					<h2 class="white"><?php the_field( 'home_page_title' ); ?></h2>
					
				<?php endif;?>
				
				
				<?php get_template_part( 'loop', 'page' );?>
				
				
			</div><!-- content -->
			
			
		</div><!-- inner_container -->
	
		
	</div><!-- inner_main -->





<?php get_footer(); ?>