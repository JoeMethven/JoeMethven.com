var map;
function initialize() {
  var mapOptions = {
    disableDefaultUI: true,
    zoom: 9,
    center: new google.maps.LatLng(51.692308, 0.510695),
    draggable: false,
    scaleControl: false,
    navigationControl: false,
    mapTypeControl: false
  };
  var map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);
}

google.maps.event.addDomListener(window, 'load', initialize);