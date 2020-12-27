var cord, map, vmap;

cord = new google.maps.LatLng( 23.2413,44.1210);
map = new google.maps.Map(document.getElementById('map'), {
  center: cord,
  zoom: 5,
  mapTypeId: google.maps.MapTypeId.ROADMAP
});


// Create the search box and link it to the UI element.
var input = document.getElementById('location_navigator');
var searchBox = new google.maps.places.SearchBox(input);
// Bias the SearchBox results towards current map's viewport.
map.addListener('bounds_changed', function() {
  searchBox.setBounds(map.getBounds());
});
var markers = [];
// Listen for the event fired when the user selects a prediction and retrieve
// more details for that place.
searchBox.addListener('places_changed', function() {
  var places = searchBox.getPlaces();
  if (places.length == 0) {
    return;
  }
  // Clear out the old markers.
  markers.forEach(function(marker) {
    marker.setMap(null);
  });
  markers = [];
  // For each place, get the icon, name and location.
  var bounds = new google.maps.LatLngBounds();
  places.forEach(function(place) {
    // Create a marker for each place.
    markers.push(new google.maps.Marker({
      map: map,
      title: place.name,
      position: place.geometry.location
    }));
    if (place.geometry.viewport) {
      // Only geocodes have viewport.
      bounds.union(place.geometry.viewport);
    } else {
      bounds.extend(place.geometry.location);
    }
    var loc = place.geometry.location;
    latlng = String(loc);
    var point = latlng.match( /-?\d+\.\d+/g );
    $('#location').val(point);
  });
  map.fitBounds(bounds);
});
google.maps.event.addListener(map, 'zoom_changed', function(event) {
  //console.log(map.getZoom())
  $('#zmap').val(map.getZoom());
  });
google.maps.event.addListener(map, 'click', function(event) {
  var loc = event.latLng;
  console.log(loc);
  latlng = String(loc);
  var point = latlng.match( /-?\d+\.\d+/g );
  $('#location').val(point);
  ozoom = map.getZoom();
  $('#zmap').val(ozoom);
  });
  var ozoom;
  $('#mapzoomin').on('click', function(){
    ozoom = map.getZoom();
    map.setZoom(ozoom+1);
    $('#zmap').val(ozoom+1);
  });
  $('#mapzoomout').on('click', function(){
    ozoom = map.getZoom();
    map.setZoom(ozoom-1)
    $('#zmap').val(ozoom+1);
  });
