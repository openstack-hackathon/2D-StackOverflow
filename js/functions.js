jQuery(document).ready(function(){
    $(".dropdown").hover(
        function() { $('.dropdown-menu', this).stop().fadeIn("fast");
        },
        function() { $('.dropdown-menu', this).stop().fadeOut("fast");
    });
});


  function initMap() {
        // Create a map object and specify the DOM element for display.
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          scrollwheel: false,
          zoom: 8
        });
      }

/*
 function initMap() {
        // Create a map object and specify the DOM element for display.
        var map = new google.maps.Map(document.getElementById('map'), {
          center: new google.maps.LatLng(20.613863, -103.416875),
          mapTypeId: google.maps.MapTypeId.ROADMAP,
          scrollwheel: false,
          zoom: 8
        });
        map.setCenter(myMarker.position);
		myMarker.setMap(map);	
      }

  var myMarker = new google.maps.Marker({
		position: new google.maps.LatLng(20.613863, -103.416875),
		draggable: true
	});

*/