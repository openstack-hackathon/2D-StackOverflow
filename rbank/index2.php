<!doctype html>
<!--
  Material Design Lite
  Copyright 2015 Google Inc. All rights reserved.

  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at

      https://www.apache.org/licenses/LICENSE-2.0

  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License
-->

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Introducing Lollipop, a sweet new take on Android.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Android</title>

    <!-- Page styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
    #view-source {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 40px;
      margin-bottom: 40px;
      z-index: 900;
    }
    </style>
  </head>
  <body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <div class="android-header mdl-layout__header mdl-layout__header--waterfall">
        <div class="mdl-layout__header-row">
          <span class="android-title mdl-layout-title">

          </span>
          <!-- Add spacer, to align navigation to the right in desktop -->
          <div class="android-header-spacer mdl-layout-spacer"></div>
          <div class="android-search-box mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right mdl-textfield--full-width">
            <label class="mdl-button mdl-js-button mdl-button--icon" for="search-field">
                <img class="android-logo-image" src="images/1473541964_blood_drop_no_shadow.png">
            </label>
            <div class="mdl-textfield__expandable-holder">
              <input class="mdl-textfield__input" type="text" id="search-field">
            </div>
          </div>
          <!-- Navigation -->
          <div class="android-navigation-container">
            <nav class="android-navigation mdl-navigation">
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="perfil.php">Perfil</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="amigos.php">Amigos</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="cita.php">Cita</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="configuracion.php">Configuración</a>
            </nav>
          </div>
        </div>
      </div>

      <div class="android-drawer mdl-layout__drawer">
        <span class="mdl-layout-title">
          <img class="android-logo-image" src="images/1473541964_blood_drop_no_shadow.png">
        </span>
        <nav class="mdl-navigation">
          <a class="mdl-navigation__link mdl-typography--text-uppercase" href="perfil.php">Perfil</a>
          <a class="mdl-navigation__link mdl-typography--text-uppercase" href="amigos.php">Amigos</a>
          <a class="mdl-navigation__link mdl-typography--text-uppercase" href="cita.php">Cita</a>
          <a class="mdl-navigation__link mdl-typography--text-uppercase" href="configuracion.php">Configuración</a>
        </nav>
      </div>

      <div class="android-content mdl-layout__content" id="services">
       
       
       <!-- Services -->
   <section class="home-section bg-white">
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
    <script src="https://code.getmdl.io/1.2.1/material.min.js"></script>
  </body>
</html>
