//swiper slide header
var swiper = new Swiper(".home-slider", {
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
        delay: 7500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    loop: true,
});
// screen loading waiting
function loader() {
    document.querySelector(".loader-container").classList.add("fade-out");
}

function fadeOut() {
    setInterval(loader, 2000);
}
window.onload = fadeOut;

//open mutli account
function openMulti() {
    if (document.querySelector(".selectWrapper").style.pointerEvents == "all") {
      document.querySelector(".selectWrapper").style.opacity = 0;
      document.querySelector(".selectWrapper").style.pointerEvents = "none";
      resetAllMenus();
    } else {
      document.querySelector(".selectWrapper").style.opacity = 1;
      document.querySelector(".selectWrapper").style.pointerEvents = "all";
    }
  }
  
