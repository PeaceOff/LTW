$(document).ready( function() {

    var btn = $("input[name='SearchButton']");
    btn.click(updateResults);
});

function updateResults(){
  var restaurantList= $('#restaurants');
  var searched = $("input[name='search']").val();
  var jsonInfo = 'showResults.php?search=' + searched;

  //clear last results
  restaurantList.empty();

  $.ajax({
    type:'GET',
    url:jsonInfo,
    success: function(restaurants) {

      $.each(JSON.parse(restaurants),function(i,restaurant){
          var link = "../Pages/show_restaurant.php?id=" + restaurant.id;
          restaurantList.append('<li> Name: ' + restaurant.name + '</br>' + 'Description: ' + restaurant.description +'</li>');
          restaurantList.append('<a href=' + link + '> View Restaurant Info </a>');
      });
    }
  });

}
