<!DOCTYPE html>
<html>
  <head>
    <title>Mamba - Free Bootstrap 3 one page template</title>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/style1.css" rel="stylesheet" media="screen">
	<link href="color/default.css" rel="stylesheet" media="screen">
	<script src="js/modernizr.custom.js"></script>
      </head>
  <body>

	  <!-- intro area -->	  
	  <div id="intro">
	  
			<div class="intro-text">
				<div class="container">
					<div class="row">
					
						
					<div class="col-md-4">
			
						<div class="brand">
							<h1><a href=""> <IMG SRC="img/bg-mac.png"> rBank</a></h1>
							
							<p><span></span></p>
						</div>
					</div>
					</div>
				</div>
		 	</div>
			
	 </div>
	  
	 
	  
	  <!-- Services -->
	 <section id="services" class="home-section bg-white">
		<div class="container">
			  <div class="row">
				  <div class="col-md-offset-4">
					<div id="section-heading" class="section-heading">
 					<!--
                        <script>
                          function initMap() {
                            // Create a map object and specify the DOM element for display.
                            var map = new google.maps.Map(document.getElementById("services"), {
                                center: new google.maps.LatLng(20.613863, -103.416875),
                              scrollwheel: false,
                              zoom: 5
                            });
                          }
                        </script>
                        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC9iHyImLPrjVlvdRpgj6oIonptrvkItkM&callback=initMap"async defer></script>    
                    -->  

<script>
      function initMap() {
      	 var myLatLng = {lat: 20.613863, lng: -103.416875};
      	  
        // Create a map object and specify the DOM element for display.
        var map = new google.maps.Map(document.getElementById("services"), {
			center: myLatLng,
          scrollwheel: false,
          zoom: 5
        });

       /* var contentString = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading">Hospital Civil de Guadalajara</h1>'+
      '<div id="bodyContent">'+
      '<p><b>Calle Coronel Calderón 777, El Retiro, 44280 Guadalajara, JAL'+
		'hcg.udg.mx'+
		'01 33 3942 4400 ' +
		'</p>'+
      '<p>Agendar Cita, <a href="https://en.wikipedia.org/w/index.php?title=Uluru&oldid=297882194">'+
      'click Aquí</a> '+
      '</div>'+
      '</div>';

	  var infowindow = new google.maps.InfoWindow({
	    content: contentString
	  });

		var image1 = './images/bloodflag.png';
        var marker = new google.maps.Marker({
		    position: myLatLng,
		    map: map,
		    icon : image1
		  });

        */

		 setMarkers(map);
      }

      var hospitales = [
		  ['Hospital Merlos', 19.301994, -99.161621, 4],
		  ['Hospital Cruz Roja', 20.679704, -103.342234, 5],
		  ['Hospital Alcalde', 20.690855, -103.347631, 3],
		  ['Hospital Civil de Guadalajara Fray antonio Alcalde', 20.687784, -103.344219, 2],
		  ['Hospital General Regional 45', 20.679473, -103.360849, 1],

		  ['Centro Medico siglo XXI', 19.406805, -99.153042, 6],
		  ['Hospital Angeles del pedregal', 19.311251, -99.220849, 7],
		  ['Hospital Central Sur de Alta Especialidad PEMEX', 19.308052, -99.218317, 8],
		  ['Sedna Hospital', 19.303186, -99.174076, 9],
		  ['Hospital Civil de Guadalajara', 20.687834, -103.343919, 10]
		];

		function setMarkers(map) {
		  
		  var image = {
		    url: '../images/bloodflag.png',
		    // This marker is 20 pixels wide by 32 pixels high.
		    size: new google.maps.Size(32, 32),
		    // The origin for this image is (0, 0).
		    origin: new google.maps.Point(0, 0),
		    // The anchor for this image is the base of the flagpole at (0, 32).
		    anchor: new google.maps.Point(0, 32)
		  };
		  
		  var shape = {
		    coords: [1, 1, 1, 20, 18, 20, 18, 1],
		    type: 'poly'
		  };
		  for (var i = 0; i < hospitales.length; i++) {
		    var hospital1 = hospitales[i];
		    var marker = new google.maps.Marker({
		      position: {lat: hospital1[1], lng: hospital1[2]},
		      map: map,
		      icon: image,
		      shape: shape,
		      title: hospital1[0],
		      zIndex: hospital1[3]
		    });

		    //Info tool 

		    

		    var contentString = '<div id="content">'+
		      '<div id="siteNotice">'+
		      '</div>'+
		      '<h1 id="firstHeading" class="firstHeading">Hospital Civil de Guadalajara</h1>'+
		      '<div id="bodyContent">'+
		      '<p><b>Calle Coronel Calderón 777, El Retiro, 44280 Guadalajara, JAL'+
				'hcg.udg.mx'+
				'01 33 3942 4400 ' +
				'</p>'+
		      '<p>Agendar Cita, <a href="cita.php">'+
		      'click Aquí</a> '+
		      '</div>'+
		      '</div>';

			  var infowindow = new google.maps.InfoWindow({
			    content: contentString
			  });

		    marker.addListener('click', function() {
		    	infowindow.open(map, marker);
		 	 });
		  }
		}

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC9iHyImLPrjVlvdRpgj6oIonptrvkItkM&callback=initMap"async defer></script>
                                          
					</div>
				  </div>
			  </div>

	</section>
	
	
		<!-- spacer -->	  
		<section id="spacer1" class="home-section spacer">	
           <div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="color-light">
						<h2 class="wow bounceInDown" data-wow-delay="1s">Regala lo mejor que tienes</h2>
						
						</div>
					</div>				
				</div>
            </div>
		</section>	  
    

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<p>Hackaton GDL</a></p>
				</div>
                <!-- 
                    All links in the footer should remain intact. 
                    Licenseing information is available at: http://bootstraptaste.com/license/
                    You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Mamba
                -->
			</div>		
		</div>	
	</footer>
	 
	 <!-- js -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.smooth-scroll.min.js"></script>
	<script src="js/jquery.dlmenu.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/custom.js"></script>
  	
</html>