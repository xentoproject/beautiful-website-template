window.onscroll = function() {navScroll()};

function navScroll() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    document.getElementByClassName("navbar").style.backgroundFilter = "blur 15px";
  } else {
    document.getElementByClassName("navbar").style.backgroundFilter = "none";
  }
}