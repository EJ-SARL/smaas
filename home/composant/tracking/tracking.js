/**
 * @license
 * Copyright 2019 Google LLC. All Rights Reserved.
 * SPDX-License-Identifier: Apache-2.0
 */
// [START maps_map_simple]
let map;


setInterval(function initMap() {  

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
       const obj = JSON.parse(this.responseText);
      latitude = obj.latitude;
       longitude =obj.longitude;
       vitesse = obj.vitesse;
    
       lati=  Number(latitude);
       longi=  Number(longitude);
    

           // The location of Uluru
  const uluru = { lat: lati, lng: longi };
  map = new google.maps.Map(document.getElementById("map"), {
    center:  uluru,
    zoom: 19,
   // mapTypeId: google.maps.MapTypeId.SATELLITE
  });

  var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';
  // The marker, positioned at Uluru
  const marker = new google.maps.Marker({
   position: uluru,
   map: map,
   icon: iconBase + "bus.png",
   //icon: iconBase + "cabs.png",
 });

      }
    }
    xmlhttp.open("GET", "get_gps.php", true);
    xmlhttp.send();
},5000)


window.initMap = initMap;
// [END maps_map_simple]