
<div class="sidebar">
	
	
	<?php if(is_front_page()) : ?> 
	
		<h1 class="location"><?php the_field( 'sidebar_location_title','option'); ?></h1>
	
	<?php else:?>
	
		<a class="location" href="<?php bloginfo('url');?>"><?php the_field( 'sidebar_location_title','option'); ?></a>
	
	<?php endif; ?>
	
	
	<div class="location_menu">
		<span class="location_menu_title"><?php the_field( 'mobile_menu_location_dropdown_title','option'); ?> Menu</span><!-- location_menu_title -->
		<div class="location_menu_dropdown">
			<div class="location_menu_flex_fix">
				
				<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'local_menu_classes' ) ); ?>
				
				<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'local_menu_our_studio' ) ); ?>
				
			</div><!-- location_menu_flex_fix -->
		</div><!-- location_menu_dropdown -->
	</div><!-- location_menu -->
	
	<div class="sidebar_social">
		
		<?php if(get_field( 'twitter','option')):?>
		
			<a href="<?php the_field( 'twitter','option'); ?>" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/twitter.png" alt="Twitter"/></a>
		
		<?php endif;?>
		
		<?php if(get_field( 'pinterest','option')):?>
		
			<a href="<?php the_field( 'pinterest','option'); ?>" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/pinterest.png" alt="Pinterest"/></a>
			
		<?php endif;?>
		
		<?php if(get_field( 'instagram','option')):?>
		
			<a href="<?php the_field( 'instagram','option'); ?>" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/instagram.png" alt="Instagram"/></a>
		
		<?php endif;?>
		
		<?php if(get_field( 'facebook','option')):?>
		
			<a href="<?php the_field( 'facebook','option'); ?>" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/facebook.png" alt="Facebook"/></a>
			
		<?php endif;?>
		
		<?php if(get_field( 'google_+','option')):?>
		
			<a href="<?php the_field( 'google_+','option'); ?>" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/google-plus.png" alt="Google"/></a>
		
		<?php endif;?>
		
		<a href="mailto:<?php the_field( 'email','option'); ?>"><img class="email" src="<?php bloginfo('template_directory');?>/images/email.png" alt="Email"/></a>
		
	</div><!-- sidebar_social -->
	
	
		
		<?php if(get_field('store_hours','options')): ?>
		
			<div class="store_hours">
			
			<span class="hours_title">Studio Hours</span><!-- hours_title -->
		 
			<?php while(has_sub_field('store_hours','options')): ?>
		 
				<span class="days"><?php the_sub_field( 'days' ); ?></span><!-- days -->
				
				<?php if(get_sub_field('hours','option')):?>
				<span class="hours"><?php the_sub_field( 'hours' ); ?></span><!-- days -->
				<?php endif;?>
		    
			<?php endwhile; ?>
			
			</div><!-- store_hours -->
		 
		<?php endif; ?>
	
	
	<div class="address" itemscope itemtype="http://schema.org/LocalBusiness">
		
		<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
		
		<a href="<?php the_field( 'google_maps_link','option'); ?>" target="_blank">
			<span itemprop="streetAddress"><?php the_field( 'street_address','option'); ?></span>
			<span itemprop="addressLocality"><?php the_field( 'city','option'); ?></span>, <span itemprop="addressRegion"><?php the_field( 'state_abr','option'); ?></span> <span itemprop="postalCode"><?php the_field( 'zip_code','option'); ?></span><br/>
			{map}
		</a>
		
		</div>
		
		<span itemprop="telephone"><a href="tel:<?php the_field( 'phone','option'); ?>">Phone: <?php the_field( 'phone','option'); ?></a></span>
		
	</div><!-- address -->
	
	<div class="newsletter_signup">
		
		<?php gravity_form(1, false, false, false, '', true, 12); ?>
		
	</div><!-- newsletter_signup -->
	
	<?php if(is_front_page()) { ?>
	
	<div class="yellow_home_buttons">
		
		<a class="" href="<?php the_permalink(28);?>">Class Schedule</a>
		
		<a class="" href="<?php the_permalink(30);?>">Pricing</a>
		
	</div><!-- yellow_home_buttons -->
	
	<?php  } ?>
	
</div><!-- sidebar -->
			