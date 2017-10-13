
jQuery(document).ready(function(){



// Franchise Pages


	 // wrap content under an h2 in a div
  
   $('.slide_text_wrapper h3').each(function(i){ 
    
   
   	var $set = $(this).nextUntil("h3");
    
    $set.wrapAll('<div class="single_slide_text" />');
    
  
		// slide toggle the wrapperd content
		
	
		});
   
   
   
   $('h3').on('click', function(e) {
      
    	$(this).next('.single_slide_text').slideToggle(200);
    	$(this).toggleClass('open');
    
    });
   




}); // Document Ready

