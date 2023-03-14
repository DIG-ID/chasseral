import Swiper from 'swiper/bundle';
// wait until DOM is ready
document.addEventListener("DOMContentLoaded", () => {
  //wait until images, links, fonts, stylesheets, and js is loaded
  window.addEventListener("load", () => {

    if (document.body.classList.contains("page-template-page-home")) {
      const agendaEventsSwiper = new Swiper('.swiper-agenda-events', {
        loop: true,
        //effect: 'flip',
        speed: 800,
        // Navigation arrows
        navigation: {
          nextEl: '.swiper-button-next.agenda-events-button-next',
          prevEl: '.swiper-button-prev.agenda-events-button-prev',
        },
      });
    }

    if (document.body.classList.contains("page-template-page-jura")) {
      const institutionenEventsSwiper = new Swiper('.swiper-institutionen', {
        loop: false,
        slidesPerView: '3.8',
        spaceBetween: 20,
        direction: 'horizontal',
        speed: 800,
        // Navigation arrows
        navigation: {
          nextEl: '.swiper-button-next.institutionen-button-next',
          prevEl: '.swiper-button-prev.institutionen-button-prev',
        },
      });
    }

    if (document.body.classList.contains("page-template-page-activities")) {
      const summerEventsSwiper = new Swiper('.swiper-act-summer', {
        loop: false,
        slidesPerView: '3',
        spaceBetween: 20,
        direction: 'horizontal',
        speed: 800,
        // Navigation arrows
        navigation: {
          nextEl: '.swiper-button-next.act-summer-button-next',
          prevEl: '.swiper-button-prev.act-summer-button-prev',
        },
      });
      const winterEventsSwiper = new Swiper('.swiper-act-winter', {
        loop: false,
        slidesPerView: '3',
        spaceBetween: 20,
        direction: 'horizontal',
        speed: 800,
        // Navigation arrows
        navigation: {
          nextEl: '.swiper-button-next.act-winter-button-next',
          prevEl: '.swiper-button-prev.act-winter-button-prev',
        },
      });
    }

  }, false);
});
