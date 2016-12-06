$(document).ready( function() {
  $('.flexslider').flexslider({
   animation: "slide"
 });


});



function initMap() {

  var latitude = parseFloat($('#map').attr('lat'));
  var longitude = parseFloat($('#map').attr('lng'));
  var name = $('#restaurant_name').text();
  var description = $('#restaurant_description').text();


  var map = new google.maps.Map(document.getElementById('map'), {
  zoom: 15,
  center:  {lat: latitude, lng: longitude}
  });

  var contentString =
   '<p><b>Restaurant ' + name + '</b> </br>' +
   description + '</p>';

  var infowindow = new google.maps.InfoWindow({
  content: contentString
  });

  var marker = new google.maps.Marker({
  position: {lat: latitude, lng: longitude},
  icon : "../images/icon/restaurantIcon.png",
  map: map,
  title: name
  });
  marker.addListener('click', function() {
  infowindow.open(map, marker);
  });

}
