<?php
/* Cargado de libreras JS/CSS */  
  require_once("./php/librerias.php");
?>
 <div class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Logo</a>
        </div>
        <div class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
			<li><a href="#">Home</a></li>
			<li class="dropdown menu-large">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Product Listing <b class="caret"></b> </a>
                  <ul class="dropdown-menu megamenu row">
                    <li>
        <div class="col-sm-6 col-md-3">
          <a href="#" class="thumbnail">
			<img src="http://placehold.it/150x120" />
          </a>
        </div>
        <div class="col-sm-6 col-md-3">
		<a href="#" class="thumbnail">
			<img src="http://placehold.it/150x120" />
          </a>
        </div>
        <div class="col-sm-6 col-md-3">
		<a href="#" class="thumbnail">
			<img src="http://placehold.it/150x120" />
          </a>
        </div>
        <div class="col-sm-6 col-md-3">
         <a href="#" class="thumbnail">
			<img src="http://placehold.it/150x120" />
          </a>
	    </div>
					</li>
                  </ul>
            </li>

			<li class="dropdown menu-large">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories <b class="caret"></b></a>				
				<ul class="dropdown-menu megamenu row">
					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header">Glyphicons</li>
							<li><a href="#">Available glyphs</a></li>
							<li class="disabled"><a href="#">How to use</a></li>
							<li><a href="#">Examples</a></li>
							<li class="divider"></li>
							<li class="dropdown-header">Dropdowns</li>
							<li><a href="#">Example</a></li>
							<li><a href="#">Aligninment options</a></li>
							<li><a href="#">Headers</a></li>
							<li><a href="#">Disabled menu items</a></li>
						</ul>
					</li>
					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header">Button groups</li>
							<li><a href="#">Basic example</a></li>
							<li><a href="#">Button toolbar</a></li>
							<li><a href="#">Sizing</a></li>
							<li><a href="#">Nesting</a></li>
							<li><a href="#">Vertical variation</a></li>
							<li class="divider"></li>
							<li class="dropdown-header">Button dropdowns</li>
							<li><a href="#">Single button dropdowns</a></li>
						</ul>
					</li>
					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header">Input groups</li>
							<li><a href="#">Basic example</a></li>
							<li><a href="#">Sizing</a></li>
							<li><a href="#">Checkboxes and radio addons</a></li>
							<li class="divider"></li>
							<li class="dropdown-header">Navs</li>
							<li><a href="#">Tabs</a></li>
							<li><a href="#">Pills</a></li>
							<li><a href="#">Justified</a></li>
						</ul>
					</li>
					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header">Navbar</li>
							<li><a href="#">Default navbar</a></li>
							<li><a href="#">Buttons</a></li>
							<li><a href="#">Text</a></li>
							<li><a href="#">Non-nav links</a></li>
							<li><a href="#">Component alignment</a></li>
							<li><a href="#">Fixed to top</a></li>
							<li><a href="#">Fixed to bottom</a></li>
							<li><a href="#">Static top</a></li>
							<li><a href="#">Inverted navbar</a></li>
						</ul>
					</li>
				</ul>

			</li>
		</ul>
		</div>
      </div>
    </div>
	<!--MAPA GOOGLE-->
    <div id="map"></div>
    <script>
      function initMap() {
      	 var myLatLng = {lat: 20.613863, lng: -103.416875};
      	  
        // Create a map object and specify the DOM element for display.
        var map = new google.maps.Map(document.getElementById("map"), {
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
		  ['Hospital Civil de Guadalajara', 20.687834, -103.343919, 4],
		  ['Hospital Cruz Roja', 20.679704, -103.342234, 5],
		  ['Hospital Alcalde', 20.690855, -103.347631, 3],
		  ['Hospital Civil de Guadalajara Fray antonio Alcalde', 20.687784, -103.344219, 2],
		  ['Hospital General Regional 45', 20.679473, -103.360849, 1],

		  ['Centro Medico siglo XXI', 19.406805, -99.153042, 6],
		  ['Hospital Angeles del pedregal', 19.311251, -99.220849, 7],
		  ['Hospital Central Sur de Alta Especialidad PEMEX', 19.308052, -99.218317, 8],
		  ['Sedna Hospital', 19.303186, -99.174076, 9],
		  ['Hospital Merlos', 19.301994, -99.161621, 10]
		];

		function setMarkers(map) {
		  
		  var image = {
		    url: './images/bloodflag.png',
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
		      '<p>Agendar Cita, <a href="https://en.wikipedia.org/w/index.php?title=Uluru&oldid=297882194">'+
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

	
  </body>
  </html>
<?php
?>