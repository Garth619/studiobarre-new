<?php 
	
	/* Template Name: Become a Maven */
	
	get_header(); ?>


<div class="inner_main">
		
		
		<?php get_sidebar('maven'); ?>
		
		<div class="inner_container">
			
			<?php if(get_field('inner_banners')):?>
			
				<div class="inner_banner">
			
					<img src="<?php the_field( 'inner_banners' ); ?>"/>
			
				</div><!-- inner_banner -->
			
			<?php endif;?>
			
			<div class="content_wrapper content">
			
				<?php // get_template_part( 'loop', 'page' );?>
				
				<h2 class="white">Become a Barre Maven</h2>
				
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				
				
				
				<span class="how_to_be_title">How to be a barre maven</span><!-- how_to_be_title -->
				
				<div class="maven_requirements">
				
					<p>Lorem Ipsum dlor sit:</p>
				
					<ul>
						<li>Lorem Ipsum</li>
						<li>Lorem Ipsum</li>
						<li>Lorem Ipsum</li>
						<li>Lorem Ipsum</li>
						<li>Lorem Ipsum</li>
					</ul>
				
				</div><!-- maven_requirements -->
				
				<?php get_template_part('bio','grid');?>
				
				
			</div><!-- content -->
			
			
		</div><!-- inner_container -->
	
		
	</div><!-- inner_main -->





<?php get_footer(); ?>
