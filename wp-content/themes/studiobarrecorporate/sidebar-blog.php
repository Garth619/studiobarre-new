
<div class="sidebar">
	
	<h1 class="header_script"><a href="<?php $mypagelink = get_the_permalink(18);echo $mypagelink ?>">Blog</a></h1><!-- header_script -->
	
	<span class="latest_posts">Latest Posts</span>
	
	
	<ul class="latest_post_list">
	
	<?php $mymain_query = new WP_Query( array( 'post_type' => 'post' ,'posts_per_page' => '4', 'order' => 'DSC' ) ); while($mymain_query->have_posts()) : $mymain_query->the_post(); ?>
	
	
			
		<li>
			
			<span class="sidebar_date"><?php $pfx_date = get_the_date();echo  $pfx_date;?></span>
			
			<a class="" href="<?php the_permalink();?>"><?php the_title();?></a>
		
		</li>
     
    
    
    <?php endwhile; ?>
   <?php wp_reset_postdata(); // reset the query ?>
	
	</ul>
	
	
	
		
		
</div><!-- sidebar -->
			