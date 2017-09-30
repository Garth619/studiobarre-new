
<div class="sidebar">
	
	
	<?php if(is_front_page()) : ?> 
	
		<h1 class="location">Carmel Valley, CA</h1>
	
	<?php else:?>
	
		<a class="location" href="<?php bloginfo('url');?>">Carmel Valley, CA</a>
	
	<?php endif; ?>
	
	
	<div class="location_menu">
		<span class="location_menu_title">Carmel Valley Studio Menu</span><!-- location_menu_title -->
		<div class="location_menu_dropdown">
			<div class="location_menu_flex_fix">
				
				<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'local_menu_classes' ) ); ?>
				
				<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'local_menu_our_studio' ) ); ?>
				
			</div><!-- location_menu_flex_fix -->
		</div><!-- location_menu_dropdown -->
	</div><!-- location_menu -->
	
	<div class="sidebar_social">
		
		<a href="" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/twitter.png"/></a>
		<a href="" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/pinterest.png"/></a>
		<a href="" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/instagram.png"/></a>
		<a href="" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/facebook.png"/></a>
		<a href="" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/google-plus.png"/></a>
		<a class="" href="mailto:"><img class="email" src="<?php bloginfo('template_directory');?>/images/email.png"/></a>
		
	</div><!-- sidebar_social -->
	
	<div class="store_hours">
		
		<span class="hours_title">Store Hours</span><!-- hours_title -->
		
		<span class="days">Monday - Thursday</span><!-- days -->
		<span class="hours">8am - 8pm</span><!-- days -->
		
		<span class="days">Friday</span><!-- days -->
		<span class="hours">8am - 7pm</span><!-- days -->
		
		<span class="days">Saturday - Sunday</span><!-- days -->
		<span class="hours">7am - 11am</span><!-- days -->
		
	</div><!-- store_hours -->
	
	<div class="address">
		
		<a href="https://www.google.com/maps/place/Studio+Barre+Carmel+Valley/@32.9619726,-117.1541906,15z/data=!4m2!3m1!1s0x0:0x219fb055ae52aeb1?sa=X&ved=0ahUKEwjzrP70mcjWAhVX1GMKHTmsBMAQ_BIIhwEwCg" target="_blank">
			7845 Highland Village Place,
			Suite C-103
			San Diego, CA 92129<br/>
			{map}
		</a>
		
		<a href="tel:858.365.7169">Phone: 858.365.7169</a>
		
	</div><!-- address -->
	
	<div class="newsletter_signup">
		
		<?php gravity_form(1, false, false, false, '', true, 12); ?>
		
	</div><!-- newsletter_signup -->
	
	<?php if(is_front_page()) { ?>
	
	<div class="yellow_home_buttons">
		
		<a class="" href="<?php bloginfo('url');?>/schedule">Class Schedule</a>
		
		<a class="" href="<?php bloginfo('url');?>/pricing">Pricing</a>
		
	</div><!-- yellow_home_buttons -->
	
	<?php  } ?>
	
</div><!-- sidebar -->
			