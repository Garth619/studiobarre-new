
jQuery(document).ready(function(){



// Franchise Pages


	 // wrap content under an h2 in a div
  
   $('.slide_text_wrapper h2').each(function(i){ 
    
   
   	var $set = $(this).nextUntil("h2");
    
    $set.wrapAll('<div class="single_slide_text" />');
    
  
		// slide toggle the wrapperd content
		
	
		});
   
   
   
   $('h2').on('click', function(e) {
      
    	$(this).next('.single_slide_text').slideToggle(200);
    	$(this).toggleClass('open');
    
    });
   




}); // Document Ready

