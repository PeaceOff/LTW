var first = true;

document.addEventListener("DOMContentLoaded", function(){

  disableScroll();
  window.scrollTo(0, 0);
});

function disableScroll() {
  if (window.addEventListener) // older FF
      window.addEventListener('DOMMouseScroll', preventDefault, false);
  window.onwheel = preventDefault; // modern standard
  window.onmousewheel = document.onmousewheel = preventDefault; // older browsers, IE
  window.ontouchmove  = preventDefault; // mobile
  document.onkeydown  = preventDefaultForScrollKeys;
}

function enableScroll() {
    if (window.removeEventListener)
        window.removeEventListener('DOMMouseScroll', preventDefault, false);
    window.onmousewheel = document.onmousewheel = null;
    window.onwheel = null;
    window.ontouchmove = null;
    document.onkeydown = null;
}

function preventDefault(e) {

  e = e || window.event;
  if (e.preventDefault)
      e.preventDefault();
  e.returnValue = false;

  if(e.deltaY > 0){
    enableScroll();
    window.scrollTo(0, 0);
    $(".portrait").addClass("deselect");
  }
}

function preventDefaultForScrollKeys(e) {
  console.log(e);
    if (keys[e.keyCode]) {
        preventDefault(e);
        return false;
    }
}


function reset(){
  window.scrollTo(0, 0);
}
