// SVG Map





jQuery(document).ready(function($){



	$('#usa_map path.active_state').on('click', function(e) {
	  
		
		$('#usa_map path.active_state').removeClass('current_state');
		$(this).addClass('current_state');
	
	});
	
	
	
/*
	
	$('#usa_map path path.active_state').click(function() {
    this.classList.add('current_state');
	});
*/




}); // Document Ready





function initMap() {
   
   var uluru = {lat: -25.363, lng: 131.044};
   
   var map = new google.maps.Map(document.getElementById('map'), {
     zoom: 4,
     center: uluru
   });
   
   var marker = new google.maps.Marker({
      position: uluru,
      map: map
   });

}

