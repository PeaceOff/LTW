$(document).ready( function() {
  latitude = parseFloat($("form#restaurantForm input[name='latitude']").val());
  longitude = parseFloat($("form#restaurantForm input[name='longitude']").val());
  console.log(latitude, longitude);
  if(!latitude)
    latitude = 41.17808888750157;

  if(!longitude)
    longitude = -8.596266215344258;

  console.log("StartCoords:" + latitude + "|" + longitude);
  $( "form#restaurantForm" ).submit(function( event ) {
      $("form#restaurantForm input[name='latitude']").val(latitude);
      $("form#restaurantForm input[name='longitude']").val(longitude);
  });
  //updateMarketPosition();
  initMap();
});

var latitude = 2;
var longitude = 2;

var marker;

function initMap() {

  var map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: latitude, lng: longitude},
    zoom: 17
  });

  var infowindow = new google.maps.InfoWindow();
  var searchBox = new google.maps.places.SearchBox(document.getElementById('mapSearch'));

  map.addListener('bounds_changed', function() {
          searchBox.setBounds(map.getBounds());
        });


  marker = new google.maps.Marker({
    map: map,
    position:  {lat: latitude, lng:  longitude},
    draggable:true
  });

  google.maps.event.addListener(marker, 'dragend', function(evt){
    latitude= evt.latLng.lat();
    longitude=  evt.latLng.lng();
    console.log("Coords:" + latitude + "|" + longitude);
  });

  searchBox.addListener('places_changed', function() {
           var places = searchBox.getPlaces();

           var bounds = new google.maps.LatLngBounds();

            places.forEach(function(place) {

            latitude= place.geometry.location.lat();
            longitude= place.geometry.location.lng();

            bounds.extend(place.geometry.location);
            marker.setPosition(place.geometry.location);

           });

           map.fitBounds(bounds);
           map.setZoom(17);
         });
}
