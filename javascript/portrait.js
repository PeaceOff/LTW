var first = true;

console.log("Here:"+ scroll);
$(window).scroll(function(){
  var scroll = $(this).scrollTop();
  console.log("Here:"+ scroll);
  $(".intro").css({

    'transform' : 'translate(0px, '+ scroll/2 + 'px )'

  });

  $(".foreground").css({

    'transform' : 'translate(0px, -'+ scroll/8 + 'px )'

  });

});
