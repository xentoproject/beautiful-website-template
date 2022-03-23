//navbar scroll styles

/*window.onscroll = function() {navScroll()};

function navScroll() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    document.getElementByClassName("navbar").style.backgroundFilter = "blur 15px";
  } else {
    document.getElementByClassName("navbar").style.backgroundFilter = "none";
  }
}*/

// navbar scroll blur

//open mobile nav

function openNav() {
  document.getElementById("myNav").style.width = "100%";
}
function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
