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
  var restaurantList= $('#restaurants');
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
          var link;

          if(typeId == -1)
              link = "../pages/show_restaurant.php?id=" + restaurant.id;
          else
              link = "../pages/show_restaurant.php?id=" + restaurant.restaurant_id;

          if(sugestion){
            sugestions.append('<li><a href=' + link + '>' + restaurant.name + '</a></li>');

          }
          else{
          restaurantList.append('<li> Name: ' + restaurant.name + '</br>'
                                  + 'Description: ' + restaurant.description +
                                  '</br>' + 'Type Id: ' + restaurant.type_id + '</li>');
          restaurantList.append('<a href=' + link + '> View Restaurant Info </a>');
        }
      });
    },
      async : false
  });

}
