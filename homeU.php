<?php include_once "views/userhead.php"; ?>
<?php include_once "php/queries.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8">
					<div id="map" style="width:100%;height:500px"></div>

	<!--MAPA GOOGLE-->
    <div id="map"></div>
    <script>
      function initMap() {
      	 var myLatLng = {lat: 20.733121, lng: -103.455787};
      	  
        // Create a map object and specify the DOM element for display.
        var map = new google.maps.Map(document.getElementById("map"), {
		center: myLatLng,
		scrollwheel: false,
		zoom: 12
        });

		 setMarkers(map);
      }


		function setMarkers(map) {
			
			
			
		var hospitales = [
		<?php 
		$resultado = GetInstitucionesU();
		$rowcount = mysqli_num_rows($resultado);
		$i = 0;
		while ($fila = $resultado->fetch_assoc()){
		?>
			
		['<?php echo $fila["Nombre"]; ?>', <?php echo $fila["Latitud"]; ?>, <?php echo $fila["Longitud"]; ?>, <?php echo $fila["PKInstitucion"]; ?>,'<?php echo $fila["Direccion"]; ?>']
		<?php 
		if($rowcount-1 != $i){ echo ","; } 
		$i+=1; 
		} ?>];  
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
		coords: [1, 2, 2, 4, 18, 20, 18, 1],
		type: 'poly'
		};
		
		for (var i = 0; i < hospitales.length; i++) {
		var hospital1 = hospitales[i];
		var marker = new google.maps.Marker({
		position: {lat: hospital1[1], lng: hospital1[2]},
		map: map,
		icon: image,
		//shape: shape,
		title: hospital1[0],
		zIndex: hospital1[3]
		});

		    //Info tool 
		    var contentString = '<div id="content"><div id="siteNotice"></div>'+
		      '<h1 id="firstHeading" class="firstHeading">'+hospital1[0]+'</h1>'+
		      '<div id="bodyContent">'+
		      '<p><b>'+hospital1[4]+'</b></p>'+
		      '<p>Agendar Cita, <a href="php/agendarcita.php?v=ac&pki='+hospital1[3]+'">click Aquí</a></p>'+
		      '</div></div>';

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
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->	
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
