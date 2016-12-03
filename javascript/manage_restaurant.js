$(document).ready( function() {


  $( "form#restaurantForm" ).submit(function( event ) {
      $("form#restaurantForm input[name='latitude']").val(latitude);
      $("form#restaurantForm input[name='longitude']").val(longitude);
  });


  initMap();

});



var latitude= 41.17808888750157;
var longitude= -8.596266215344258;



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


  var marker = new google.maps.Marker({
    map: map,
    position:  {lat: latitude, lng:  longitude},
    draggable:true
  });



  google.maps.event.addListener(marker, 'dragend', function(evt){
    latitude= evt.latLng.lat();
    longitude=  evt.latLng.lng();
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
