
<div class="sidebar">
	
	
	<?php if(is_front_page()) : ?> 
	
		<h1 class="location">Carmel Valley, CA</h1>
	
	<?php else:?>
	
		<a class="location" href="<?php bloginfo('url');?>">Carmel Valley, CA</a>
	
	<?php endif; ?>
	
	
	<div class="location_menu">
		<span class="location_menu_title">Newport Studio Menu</span><!-- location_menu_title -->
		<div class="location_menu_dropdown">
			<div class="location_menu_flex_fix">
				<ul>
					<li><a href="">About this Barre</a></li>
					<li><a href="">Contact Us</a></li>
				</ul>
				
				<ul>
					<li><a href="">Schedule</a></li>
					<li><a href="">Pricing</a></li>
					<li><a href="">Promos</a></li>
				</ul>
				
				<ul>
					<li><a href="">Barre {tenders}</a></li>
					<li><a href="">Events</a></li>
				</ul>
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
		
		<a href="" target="_blank">
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
		
		<a class="" href="">Class Schedule</a>
		
		<a class="" href="">Pricing</a>
		
	</div><!-- yellow_home_buttons -->
	
	<?php  } ?>
	
</div><!-- sidebar -->
			