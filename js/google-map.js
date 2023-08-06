
// var google;

// function init() {
//     // Basic options for a simple Google Map
//     // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
//     // var myLatlng = new google.maps.LatLng(40.71751, -73.990922);
//     var myLatlng = new google.maps.LatLng(34.097598, 74.82319);
//     // 39.399872
//     // -8.224454
    
//     var mapOptions = {
//         // How zoomed in you want the map to start at (always required)
//         zoom: 7,

//         // The latitude and longitude to center the map (always required)
//         center: myLatlng,

//         // How you would like to style the map. 
//         scrollwheel: false,
//         // styles: [
//         //     {
//         //         "featureType": "administrative.country",
//         //         "elementType": "geometry",
//         //         "stylers": [
//         //             {
//         //                 "visibility": "simplified"
//         //             },
//         //             {
//         //                 "hue": "#ff0000"
//         //             }
//         //         ]
//         //     }
//         // ]
//     };

    

//     // Get the HTML DOM element that will contain your map 
//     // We are using a div with id="map" seen below in the <body>
//     var mapElement = document.getElementById('map');

//     // Create the Google Map using out element and options defined above
//     var map = new google.maps.Map(mapElement, mapOptions);
    
//     var addresses = ['Srinagar'];

//     for (var x = 0; x < addresses.length; x++) {
//         debugger;
//         $.getJSON('http://maps.googleapis.com/maps/api/geocode/json?address='+addresses[x]+'&sensor=false', null, function (data) {
//             var p = data.results[0].geometry.location
//             var latlng = new google.maps.LatLng(p.lat, p.lng);
//             new google.maps.Marker({
//                 position: latlng,
//                 map: map,
//                 icon: 'images/loc.png'
//             });

//         });
//     }
    
// }
// google.maps.event.addDomListener(window, 'load', init);

function initMap() {
  var mapCenter = { lat: 34.07800, lng: 74.8090 }; // 34.07820348759185, 74.80908012009604
  var map = new google.maps.Map(document.getElementById("map"), {
    zoom: 18,
    center: mapCenter,
  });

  // Create a marker at the map center with a default icon and animation
  var marker = new google.maps.Marker({
    position: mapCenter,
    map: map,
    animation: google.maps.Animation.BOUNCE,
    // icon: "https://maps.google.com/mapfiles/kml/shapes/info-i_maps.png",
  });
}
