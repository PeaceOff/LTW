$(document).ready( function() {

    var btn = $("input[name='SearchButton']");
    btn.click(updateResults);

    fillTypesDropDown();
});

function fillTypesDropDown(){
  var typeDropDown = $("select[name='type']");

  //clear last results
  typeDropDown.empty();
  typeDropDown.append('<option value=-1> All types </option>');

  $.ajax({
    type:'GET',
    url: '../requests/showTypes.php',
    success: function(types) {
      $.each(JSON.parse(types),function(i,type){
          typeDropDown.append('<option value=' + type.id + '>' + type.content + '</option>');
     });
    }
  });

}

function updateResults(){
  var restaurantList= $('#restaurants');
  var searched = $("input[name='search']").val();
  var typeId = $("select[name='type']").val();
  var jsonInfo = '../requests/showResults.php?search=' + searched + '&typeId=' + typeId;

  //clear last results
  restaurantList.empty();

  $.ajax({
    type:'GET',
    url:jsonInfo,
    success: function(restaurants) {

      $.each(JSON.parse(restaurants),function(i,restaurant){
          var link = "../pages/show_restaurant.php?id=" + restaurant.id;
          restaurantList.append('<li> Name: ' + restaurant.name + '</br>'
                                  + 'Description: ' + restaurant.description +
                                  '</br>' + 'Type Id: ' + restaurant.type_id + '</li>');
          restaurantList.append('<a href=' + link + '> View Restaurant Info </a>');
      });
    }
  });

}
