$(document).ready( function() {

  $("#searchForm").submit(function( event ) {

      updateResults(false);
      return false;
    });

    $("#searchBox").keyup(function(event) {
      if(event.keyCode == 13)
        $("#searchBtn").click();
      else
        updateResults(true);
    });


});



function updateResults(sugestion){
  var sugestions= $('#sugestions');
  var restaurantList= $('.restaurantList');
  var searched = $("input[name='search']").val();
  var typeId = $("select[name='type']").val();
  var jsonInfo = '../requests/showResults.php?search=' + searched + '&typeId=' + typeId + '&sugestion=' + sugestion;


  $.ajax({
    type:'GET',
    url:jsonInfo,
    success: function(restaurants) {
      sugestions.empty();
      if(!sugestion)
        restaurantList.empty();

      $.each(JSON.parse(restaurants),function(i,restaurant){
          var restaurantId;

          restaurantId = restaurant.id;


          var link="../pages/show_restaurant.php?id=" + restaurantId;

          if(sugestion){
            sugestions.append('<li><a href=' + link + '>' + restaurant.name + '</a></li>');

          }
          else{
          restaurantList.append('<a href=' +  link + '>' + '<li> <p> Restaurant ' + restaurant.name
                                +  '</p><img src="' + restaurant.picture_path + '"/>' + '</li> </a>');

        }
      });
    },
      async : false
  });

}
