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

window.onscroll = function() {stickyMenu()};

function stickyMenu() {
  if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) {
      document.getElementsByTagName("nav").classList.add("sticky-blur");
  } else {
      document.getElementsByTagName("nav").classList.remove("sticky-blur");
  }
}

//open mobile nav

function openNav() {
  document.getElementById("myNav").style.width = "100%";
}
function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
