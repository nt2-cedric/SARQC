window.onscroll = function() {stickyMenu()};
var header = document.querySelector("header");
var sticky = header.offsetTop;

const stickyMenu = () => {
  if (window.pageYOffset > sticky) {
    header.setAttribute('class','navbar navbar-expand-lg animated slideInDown affix sticky');
  } else {
    header.setAttribute('class','navbar navbar-expand-lg affix-top');
  }

}


$(".owl-carousel").owlCarousel({
    itemsTablet:[768,1],
    itemsDesktopSmall:[979,2],
    itemsDesktop:[1199,3],
    items:3,
    responsiveRefreshRate:0,
     autoHeight : true
});