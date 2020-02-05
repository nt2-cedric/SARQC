window.onscroll = function() { stickyMenu() };
var header = document.querySelector("header");
var sticky = header.offsetTop;
let sarqcLogo = document.querySelector('.brand');
const stickyMenu = () => {
    if (window.pageYOffset > sticky) {
        header.setAttribute('class', 'navbar navbar-expand-lg animated slideInDown affix sticky');
        sarqcLogo.style.display = 'inline-block';
    } else {
        header.setAttribute('class', 'navbar navbar-expand-lg affix-top');
        sarqcLogo.style.display = 'none';

    }

}


$(".owl-carousel").owlCarousel({
    itemsTablet: [768, 1],
    itemsDesktopSmall: [979, 2],
    itemsDesktop: [1199, 3],
    items: 3,
    responsiveRefreshRate: 0,
    autoHeight: true
});

const openModal = () => {
    let modal = document.querySelector('#propos-page');
    modal.style.display = 'block';
}
const closeModal = () => {
    let modal = document.querySelector('#propos-page');
    modal.style.display = 'none';
}