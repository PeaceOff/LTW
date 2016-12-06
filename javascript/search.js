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

  //clear last results
  restaurantList.empty();

  $.ajax({
    type:'GET',
    url:jsonInfo,
    success: function(restaurants) {
      sugestions.empty();
      $.each(JSON.parse(restaurants),function(i,restaurant){
          var restaurantId;

          if(typeId == -1)
              restaurantId = restaurant.id;
          else
              restaurantId = restaurant.restaurant_id;

          var link="../pages/show_restaurant.php?id=" + restaurantId;

          if(sugestion){
            sugestions.append('<li><a href=' + link + '>' + restaurant.name + '</a></li>');

          }
          else{
          restaurantList.append('<li> <p> Restaurant ' + restaurant.name + '</p>'
                                + '<a href=' + link + '> View Restaurant Info </a>'
                                +  '<img src="' + restaurant.picture_path + '"/>' + '</li>');

        }
      });
    },
      async : false
  });

}
