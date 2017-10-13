<?php
	
	/* Template Name: Franchising */
	
	get_header(); ?>


<div class="inner_main">
		
		
		<?php get_sidebar(); ?>
		
		<div class="inner_container">
			
			
			
			<div class="content_wrapper content">
			
				
				<div class="franchise_header_wrapper">
				
<!--
				<?php if(get_field('back')) { ?>
					
					<a class="top_buttons" href="<?php the_field('back');?>"><</a>
						
					<?php }?>
-->
					
					
					<h1 class="franchise_title"><?php the_field( 'h1_titles_first_word' ); ?> <span>{<?php the_field( 'h1_titles_word_in_brackets' ); ?>}</span></h1>
					
					
<!--
					<?php if(get_field('next')) { ?>
					
					<a class="top_buttons" href="<?php the_field('next');?>">></a>
						
					<?php }?>
-->
					
					</div><!-- franchise_header_wrapper -->
					
					
			
			
					<?php the_field( 'video' ); ?>		
					
				
				
				
				
				<?php if(get_field('sections_franchise')): ?>
				 
					<?php while(has_sub_field('sections_franchise')): ?>
				 
						
				    
							<div class="franchise_section">
					
					
								<?php if(get_sub_field('h2_first_word')):?>
								
									<h2><?php the_sub_field( 'h2_first_word' ); ?> <span>{<?php the_sub_field( 'h2_word_in_brackets' ); ?>}</span></h2>
								
								<?php endif; ?>
					
					
								<?php the_sub_field( 'section_content' ); ?>
					
								
				
							</div><!-- franchise_section -->
					
					
					
					
					
					
					<?php endwhile; ?>
				 
				<?php endif; ?>
				
				
				
				
				
					
<!--
					<p>Studio Barre is a true representation of the partnership created when dancers and fitness professionals came together to work as a team.   This business is truly the culmination of years of professional dance experience, a strong focus on personal training, health and wellness, and a desire to create a program appealing to all fitness levels. The success of the Studio Barre program is quite simple – it creates results. Barre technique has been modified to allow all levels to participate, a fun atmosphere has been added to encourage instructors to add their own personality and personal touch to each class, and physical transformations among the clients are a common occurrence.</p>

					<div class="slide_text_wrapper">
	
						<h3>why Studio Barre</h3>

						<p>There are few scenarios that can boast such independence as a franchise opportunity does for the owner, while ensuring that the business provides proven products, methods and experiences that have already been designed and tested.   Studio design, staffing, class format, training, music, choreography, studio atmosphere, business management – these are just a few of your responsibilities as an owner.  The beauty of becoming a member of the Studio Barre Family is that you’re not expected to create this all on your own. You have a framework, you have training, you have guidance, you have support, and you have a voice within Studio Barre.</p>

						<h3>industry and market overview</h3>

						<p>The fitness industry boasted $21.8 billion in total revenue in 2012 (IHRSA). This is a sector that has shown significant growth year over year, and one which financial analysts predict will continue to do so.  Barre-based businesses have increased in number within the past 5 years, and consumers are demanding fitness professionals who are knowledgeable and create results, with a clear preference for smaller boutique studio settings that deliver personalized attention.   There will never be a shortage of people wanting to look better, feel stronger, and live healthier, happier lives in more beautiful bodies.</p>

						<h3>company mission and vision</h3>

						<p>As a Studio Barre Franchisee, you are in the advantageous position of owning your own business, but not being left on your own. Your success is important to us. You are part of a family that wants to grow and pass along its vision, and as in any newer business opportunity, securing your spot on the ground floor is critical. Studio Barre has been built on a an absolute dedication to customer service, and a staff that understands and supports the need for experience, training, and a commitment to providing each and every member with the full barre experience.</p>

					</div>
-->

				



	
<!--
	
	<h2>about <span>{you}</span></h2>


<p>Imagine having the privilege of transforming bodies and lives by providing a service that helps clients gain confidence and create beautiful physiques.  Imagine a business that excites you every single day and allows you to work a schedule that truly compliments your lifestyle, and a place where friendships are built and strengthened.  And imagine an opportunity that truly rewards you for your hard work with a desirable income that enables you to follow your dreams, both in and outside of the studio.</p>

<div class="slide_text_wrapper">

	<h3>ideal candidate profile</h3>

	<p>An ideal Studio Barre Franchise Candidate understands the attention a young franchise requires. This franchise model provides you with a phenomenal team of mentors along with structure and guidance on a daily basis, but it absolutely requires your own personal touch. A successful studio is one where clients directly and immediately experience results. The demand for more is organic – it occurs all on its own - and that demand (along with your clientele) grows with the right attention and perseverance. This is not just a job, this is an absolute lifestyle. Please email us at <a title="franchising@studiobarre.com" href="mailto:franchising@studiobarre.com" target="_blank">franchising@studiobarre.com</a> for an application.</p>

	<h3>minimal financial requirements</h3>

	<p>The Minimum financial requirements to open your own Studio Barre including the franchise fee and beyond ranges from $100,000 to $150,025.  This includes $34,000 -$36,300 that you must pay us before you open.</p>

	<h3>territory</h3>

	<p>The territory protection will be deemed upon the submission of your location.</p>


</div>
-->

	
	
<!--
	<h2>next <span>{steps}</span></h2>



<p><strong>The first step is completing the <a class="get_started_content">Get Started</a> form and you will be connected by a member of the studio barre team. </strong></p>

<p>From there, we will discuss an overview of the studio barre opportunity along with expectations from both parties for our discovery process.</p>



<div class="slide_text_wrapper">

	 	<h3>Complete Application</h3>
	 	
	 	<p>If you choose to proceed, we’ll ask you for a bit more information so we can get to know you. We’ll call to schedule a convenient time to discuss your background and objectives, explain more about training and support, and answer any additional questions. <a title="Application" href="http://studiobarre-demo.com/franchising/wp-content/uploads/sites/3/2017/09/StudioBarreFranchiseApplication.pdf" target="_blank" rel="noopener">Click here to download our application</a>.</p>
	 	
 	<h3>Disclosure</h3>
 	
 	<p>At this step in our discovery process, you'll be invited to speak with Lauren Gregory, Director of Operations, and receive our Franchise Disclosure Document (FDD). From here, we really dig into the details of the opportunity and continue the process to help you move forward with your due diligence.</p>
 	
 	<h3>Join the Team Day</h3>
 	
 	<p>When we get to this step and we’ve both determined that this looks like we are a good match, we’ll invite you to our corporate location in sunny La Costa, California! This day will be informative and exciting with a tour of the La Costa studio, meeting with Shannon Higgins and confirmation of everything discussed during our discovery process. At the conclusion of your visit, we’ll both make a decision about awarding you a franchise to join the Studio Barre team.</p>

<p>Let’s get started! Briefly tell us who you are on the form to the left and we look forward to speaking with you.</p>


</div>
-->		
				
				<div class="button_wrapper" style="display: none;">
					
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
