<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
		echo esc_html( ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
<?php the_field( 'header_scripts','option'); ?>
</head>

<body <?php body_class(); ?>>
				


<div class="wrapper">
	
	
	<header class="location_header">
		
		<div class="mobile_menu">
			
			<div class="menu_bar"></div><!-- menu_bar -->
			<div class="menu_bar"></div><!-- menu_bar -->
			<div class="menu_bar"></div><!-- menu_bar -->
			
		</div><!-- mobile_menu -->
		
		<div class="logo_wrapper">
			
			<a href="<?php my_main_site_link();?>"><img src="<?php bloginfo('template_directory');?>/images/studio-barre.png"/></a>
			
		</div><!-- logo_wrapper -->
		
		<div class="header_right">
			
			<a href="<?php the_permalink(28);?>" class="find_button">Book a Class</a>
			
			<div class="nav_wrapper">
				
				<div class="tagline">
					
					<span class="brackets">{</span><!-- brackets -->
					<span class="tagline_content">Strength. Defined</span><!-- tagline_content -->
					<span class="brackets">}</span><!-- brackets -->
					
				</div><!-- tagline -->
				
				<nav>
					
					<ul class="back_to_main">
						
						<li><a href="<?php my_main_site_link();?>">< Back to Main Site</a></li>
					
					</ul>
					
					<?php my_global_menu();?>
					
				</nav>
				
			</div><!-- nav_wrapper -->
			
		</div><!-- header_right -->
		
		<div style="clear:both"></div>
		
	</header>
	
	
	
	
	