import Swiper from 'swiper/bundle';

$(function() {
  if (document.body.classList.contains("zimmer-template-default")) {
    /*var zimmerThumbSwiper = new Swiper(".zimmer-thumb-swiper", {
      loop: true,
      spaceBetween: 0,
      slidesPerView: 6,
      freeMode: true,
      watchSlidesProgress: true,
    });*/
    var zimmerSwiper = new Swiper(".zimmer-swiper", {
      loop: true,
      spaceBetween: 10,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      /*thumbs: {
        swiper: zimmerThumbSwiper,
      },*/
    });
  };
  if (document.body.classList.contains("page-template-page-services")) {
    var breakfastSwiper = new Swiper(".breakfast-swiper", {
      loop: true,
      spaceBetween: 10,
      navigation: {
        nextEl: ".b-swiper-button-next",
        prevEl: ".b-swiper-button-prev",
      },
    });
    var gymSwiper = new Swiper(".gym-swiper", {
      loop: true,
      spaceBetween: 10,
      navigation: {
        nextEl: ".g-swiper-button-next",
        prevEl: ".g-swiper-button-prev",
      },
    });
  }
});