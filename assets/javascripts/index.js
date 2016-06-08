$( document ).ready(function() {
	// smooth scrolling to anchors
	$('a').click(function(){
	    $('html, body').animate({
	        scrollTop: $( $(this).attr('href') ).offset().top - 55
	    }, 500);
	    return false;
	});
});


// initialize map
function initializeMap() {
	var center = new google.maps.LatLng(47.6152372,-122.3227216);
	var map = document.getElementById("map");
	var pano = document.getElementById("pano");
    var map = new google.maps.Map(map,{
        zoom: 12,
        center: center,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        scrollwheel: false
    });
	var panorama = new google.maps.StreetViewPanorama(pano,{
	    position: center,
	    scrollwheel: false,
        addressControl: false,
	    pov: {
	      heading: 180,
	      pitch: 5,
	      zoom: 0
	    }
	  });
	map.setStreetView(panorama);
}
google.maps.event.addDomListener(window, "load", initializeMap);

