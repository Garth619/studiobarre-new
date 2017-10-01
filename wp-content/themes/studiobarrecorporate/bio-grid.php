
<?php if(get_field('bio_grid')): ?>

	<div class="bio_grid">
 
	<?php while(has_sub_field('bio_grid')): ?>
 
		
		
				<div class="single_bio_grid">
						
						<div class="image_wrapper">
							
							<?php 
							
								$imageIDbw = get_sub_field('black_and_white_image');
								$alt_textbw = get_post_meta($imageIDbw , '_wp_attachment_image_alt', true); 
								$result_onebw = wp_get_attachment_image_src($imageIDbw, 'bioimage');
								$imageID = get_sub_field('bio_image');
								$alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
								$result_one = wp_get_attachment_image_src($imageID, 'bioimage');
							
							?>
							
							<img class="black_white" src="<?php echo $result_onebw[0]; ?>" alt="<?php echo $alt_textbw; ?>"/>
							
							<img class="color" src="<?php echo $result_one[0]; ?>" alt="<?php echo $alt_text; ?>"/>
							
						</div><!-- image_wrapper -->
						
						<div class="bio_content">
							
							<h2 class="bio_name"><?php the_sub_field( 'name' ); ?></h2>
							
							<span class="location"><a href="<?php the_sub_field( 'location_link' ); ?>">{<?php the_sub_field( 'location' ); ?>}</a></span><!-- bio_name -->
							
<!-- 							<span class="bio_position">"das asd gasg agsd "</span> --><!-- bio_position -->
							
							<span class="read_bio">Read Bio</span><!-- read_bio -->
							
						</div><!-- bio_content -->
						
						<div class="bio_overlay_bg">
							
							<div class="bio_overlay_wrapper">
								
								<span class="bio_overlay_close">X</span><!-- close -->
								
								<h2><?php the_sub_field( 'name' ); ?></h2>
								
								<?php the_sub_field( 'bio_content' ); ?>								
								
								
								<?php the_sub_field( 'connect' ); ?>
								
							</div><!-- bio_overlay_wrapper -->
							
						</div><!-- bio_overlay_bg -->
						
					</div><!-- single_bio_grid -->
		
		
		
    
	<?php endwhile; ?>
 
	</div><!-- bio_grid -->
 
<?php endif; ?>






<div class="bio_grid">
					
					
					
					
					
					
					<div class="single_bio_grid">
						
						<div class="image_wrapper">
							
							<img class="black_white" src="<?php bloginfo('template_directory');?>/images/bio_bw.png"/>
							
							<img class="color" src="<?php bloginfo('template_directory');?>/images/bio_test.png"/>
							
						</div><!-- image_wrapper -->
						
						<div class="bio_content">
							
							<h2 class="bio_name">Name</h2>
							
							<span class="location"><a href="">{somerville, nj}</a></span><!-- bio_name -->
							
							<span class="bio_position">"das asd gasg agsd "</span><!-- bio_position -->
							
							<span class="read_bio">Read Bio</span><!-- read_bio -->
							
						</div><!-- bio_content -->
						
						<div class="bio_overlay_bg">
							
							<div class="bio_overlay_wrapper">
								
								<span class="bio_overlay_close">X</span><!-- close -->
								
								<h2>Name</h2>
								
								<p><img class="overlay_img" src="<?php bloginfo('template_directory');?>/images/bio_test.png"/>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								
								<p>Connect: <a href="">Twitter</a></p>
								
							</div><!-- bio_overlay_wrapper -->
							
						</div><!-- bio_overlay_bg -->
						
					</div><!-- single_bio_grid -->
					
					
					<div class="single_bio_grid">
						
						<div class="image_wrapper">
							
							<img class="black_white" src="<?php bloginfo('template_directory');?>/images/bio_bw.png"/>
							
							<img class="color" src="<?php bloginfo('template_directory');?>/images/bio_test.png"/>
							
						</div><!-- image_wrapper -->
						
						<div class="bio_content">
							
							<h2 class="bio_name">Name</h2>
							
							<span class="location">{somerville, nj}</span><!-- bio_name -->
							
							<span class="bio_position">Position</span><!-- bio_position -->
							
							<span class="read_bio">Read Bio</span><!-- read_bio -->
							
						</div><!-- bio_content -->
						
						<div class="bio_overlay_bg">
							
							<div class="bio_overlay_wrapper">
								
								<span class="bio_overlay_close">X</span><!-- close -->
								
								<h2>Name</h2>
								
								<p><img class="overlay_img" src="<?php bloginfo('template_directory');?>/images/bio_test.png"/>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								
								<p>Connect: <a href="">Twitter</a></p>
								
							</div><!-- bio_overlay_wrapper -->
							
						</div><!-- bio_overlay_bg -->
						
					</div><!-- single_bio_grid -->
					
					
					<div class="single_bio_grid">
						
						<div class="image_wrapper">
							
							<img class="black_white" src="<?php bloginfo('template_directory');?>/images/bio_bw.png"/>
							
							<img class="color" src="<?php bloginfo('template_directory');?>/images/bio_test.png"/>
							
						</div><!-- image_wrapper -->
						
						<div class="bio_content">
							
							<h2 class="bio_name">Name</h2>
							
							<span class="location">{somerville, nj}</span><!-- bio_name -->
							
							<span class="bio_position">Position</span><!-- bio_position -->
							
							<span class="read_bio">Read Bio</span><!-- read_bio -->
							
						</div><!-- bio_content -->
						
						<div class="bio_overlay_bg">
							
							<div class="bio_overlay_wrapper">
								
								<span class="bio_overlay_close">X</span><!-- close -->
								
								<h2>Name</h2>
								
								<p><img class="overlay_img" src="<?php bloginfo('template_directory');?>/images/bio_test.png"/>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								
								<p>Connect: <a href="">Twitter</a></p>
								
							</div><!-- bio_overlay_wrapper -->
							
						</div><!-- bio_overlay_bg -->
						
					</div><!-- single_bio_grid -->
					
					
					<div class="single_bio_grid">
						
						<div class="image_wrapper">
							
							<img class="black_white" src="<?php bloginfo('template_directory');?>/images/bio_bw.png"/>
							
							<img class="color" src="<?php bloginfo('template_directory');?>/images/bio_test.png"/>
							
						</div><!-- image_wrapper -->
						
						<div class="bio_content">
							
							<h2 class="bio_name">Name</h2>
							
							<span class="location">{somerville, nj}</span><!-- bio_name -->
							
							<span class="bio_position">Position</span><!-- bio_position -->
							
							<span class="read_bio">Read Bio</span><!-- read_bio -->
							
						</div><!-- bio_content -->
						
						<div class="bio_overlay_bg">
							
							<div class="bio_overlay_wrapper">
								
								<span class="bio_overlay_close">X</span><!-- close -->
								
								<h2>Name</h2>
								
								<p><img class="overlay_img" src="<?php bloginfo('template_directory');?>/images/bio_test.png"/>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								
								<p>Connect: <a href="">Twitter</a></p>
								
							</div><!-- bio_overlay_wrapper -->
							
						</div><!-- bio_overlay_bg -->
						
					</div><!-- single_bio_grid -->
					
					
					<div class="single_bio_grid">
						
						<div class="image_wrapper">
							
							<img class="black_white" src="<?php bloginfo('template_directory');?>/images/bio_bw.png"/>
							
							<img class="color" src="<?php bloginfo('template_directory');?>/images/bio_test.png"/>
							
						</div><!-- image_wrapper -->
						
						<div class="bio_content">
							
							<h2 class="bio_name">Name</h2>
							
							<span class="location">{somerville, nj}</span><!-- bio_name -->
							
							<span class="bio_position">Position</span><!-- bio_position -->
							
							<span class="read_bio">Read Bio</span><!-- read_bio -->
							
						</div><!-- bio_content -->
						
						<div class="bio_overlay_bg">
							
							<div class="bio_overlay_wrapper">
								
								<span class="bio_overlay_close">X</span><!-- close -->
								
								<h2>Name</h2>
								
								<p><img class="overlay_img" src="<?php bloginfo('template_directory');?>/images/bio_test.png"/>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								
								<p>Connect: <a href="">Twitter</a></p>
								
							</div><!-- bio_overlay_wrapper -->
							
						</div><!-- bio_overlay_bg -->
						
					</div><!-- single_bio_grid -->
					
					
					<div class="single_bio_grid">
						
						<div class="image_wrapper">
							
							<img class="black_white" src="<?php bloginfo('template_directory');?>/images/bio_bw.png"/>
							
							<img class="color" src="<?php bloginfo('template_directory');?>/images/bio_test.png"/>
							
						</div><!-- image_wrapper -->
						
						<div class="bio_content">
							
							<h2 class="bio_name">Name</h2>
							
							<span class="location">{somerville, nj}</span><!-- bio_name -->
							
							<span class="bio_position">Position</span><!-- bio_position -->
							
							<span class="read_bio">Read Bio</span><!-- read_bio -->
							
						</div><!-- bio_content -->
						
						<div class="bio_overlay_bg">
							
							<div class="bio_overlay_wrapper">
								
								<span class="bio_overlay_close">X</span><!-- close -->
								
								<h2>Name</h2>
								
								<p><img class="overlay_img" src="<?php bloginfo('template_directory');?>/images/bio_test.png"/>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								
								<p>Connect: <a href="">Twitter</a></p>
								
							</div><!-- bio_overlay_wrapper -->
							
						</div><!-- bio_overlay_bg -->
						
					</div><!-- single_bio_grid -->
					
					
					<div class="single_bio_grid">
						
						<div class="image_wrapper">
							
							<img class="black_white" src="<?php bloginfo('template_directory');?>/images/bio_bw.png"/>
							
							<img class="color" src="<?php bloginfo('template_directory');?>/images/bio_test.png"/>
							
						</div><!-- image_wrapper -->
						
						<div class="bio_content">
							
							<h2 class="bio_name">Name</h2>
							
							<span class="location">{somerville, nj}</span><!-- bio_name -->
							
							<span class="bio_position">Position</span><!-- bio_position -->
							
							<span class="read_bio">Read Bio</span><!-- read_bio -->
							
						</div><!-- bio_content -->
						
						<div class="bio_overlay_bg">
							
							<div class="bio_overlay_wrapper">
								
								<span class="bio_overlay_close">X</span><!-- close -->
								
								<h2>Name</h2>
								
								<p><img class="overlay_img" src="<?php bloginfo('template_directory');?>/images/bio_test.png"/>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								
								<p>Connect: <a href="">Twitter</a></p>
								
							</div><!-- bio_overlay_wrapper -->
							
						</div><!-- bio_overlay_bg -->
						
					</div><!-- single_bio_grid -->
					
					
					<div class="single_bio_grid">
						
						<div class="image_wrapper">
							
							<img class="black_white" src="<?php bloginfo('template_directory');?>/images/bio_bw.png"/>
							
							<img class="color" src="<?php bloginfo('template_directory');?>/images/bio_test.png"/>
							
						</div><!-- image_wrapper -->
						
						<div class="bio_content">
							
							<h2 class="bio_name">Name</h2>
							
							<span class="location">{somerville, nj}</span><!-- bio_name -->
							
							<span class="bio_position">Position</span><!-- bio_position -->
							
							<span class="read_bio">Read Bio</span><!-- read_bio -->
							
						</div><!-- bio_content -->
						
						<div class="bio_overlay_bg">
							
							<div class="bio_overlay_wrapper">
								
								<span class="bio_overlay_close">X</span><!-- close -->
								
								<h2>Name</h2>
								
								<p><img class="overlay_img" src="<?php bloginfo('template_directory');?>/images/bio_test.png"/>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								
								<p>Connect: <a href="">Twitter</a></p>
								
							</div><!-- bio_overlay_wrapper -->
							
						</div><!-- bio_overlay_bg -->
						
					</div><!-- single_bio_grid -->
										
				
				</div><!-- bio_grid -->