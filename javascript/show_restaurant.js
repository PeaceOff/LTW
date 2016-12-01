$(document).ready( function() {


  initMap();

});



var latitude= 41.17808888750157;
var longitude= -8.596266215344258;



function initMap() {

 var map = new google.maps.Map(document.getElementById('map'), {
   zoom: 15,
   center:  {lat: latitude, lng: longitude}
 });

 var contentString =
     '<p><b>Restaurant</b>' + 'restaurant description </p>';

 var infowindow = new google.maps.InfoWindow({
   content: contentString
 });

 var marker = new google.maps.Marker({
   position: {lat: latitude, lng: longitude},
   map: map,
   title: 'RestaurantName'
 });
 marker.addListener('click', function() {
   infowindow.open(map, marker);
 });
}
