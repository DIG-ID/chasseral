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

    if (document.body.classList.contains("page-template-page-gallery")) {
      // Video slider
      var videoGalleryThumbnails = new Swiper(".video-swiper-thumbnail", {
        spaceBetween: 2,
        slidesPerView: 6,
        freeMode: true,
        watchSlidesProgress: true,
      });
      var videoGallery = new Swiper(".video-swiper", {
        spaceBetween: 2,
        navigation: {
          nextEl: ".videos-button-next",
          prevEl: ".videos-button-prev",
        },
        thumbs: {
          swiper: videoGalleryThumbnails,
        },
      });
      // SZL slider
      var szlThumbnails = new Swiper(".szl-swiper-thumbnail", {
        spaceBetween: 2,
        slidesPerView: 6,
        freeMode: true,
        watchSlidesProgress: true,
      });
      var szlGallery = new Swiper(".szl-swiper", {
        spaceBetween: 2,
        navigation: {
          nextEl: ".szl-button-next",
          prevEl: ".szl-button-prev",
        },
        thumbs: {
          swiper: szlThumbnails,
        },
      });
      // Hotel slider
      var hotelThumbnails = new Swiper(".hotel-swiper-thumbnail", {
        spaceBetween: 2,
        slidesPerView: 6,
        freeMode: true,
        watchSlidesProgress: true,
      });
      var hotelGallery = new Swiper(".hotel-swiper", {
        spaceBetween: 2,
        navigation: {
          nextEl: ".hotel-button-next",
          prevEl: ".hotel-button-prev",
        },
        thumbs: {
          swiper: hotelThumbnails,
        },
      });
      // Jura slider
      var juraThumbnails = new Swiper(".jura-swiper-thumbnail", {
        spaceBetween: 2,
        slidesPerView: 6,
        freeMode: true,
        watchSlidesProgress: true,
      });
      var juraGallery = new Swiper(".jura-swiper", {
        spaceBetween: 2,
        navigation: {
          nextEl: ".jura-button-next",
          prevEl: ".jura-button-prev",
        },
        thumbs: {
          swiper: juraThumbnails,
        },
      });
    }

    // Top of Jura Sliders
    if (document.body.classList.contains("page-template-page-jura")) {
      const institutionenEventsSwiper = new Swiper('.swiper-institutionen', {
        breakpoints: {
          576: {
            slidesPerView: 1,
            spaceBetween: 30,
          },
          768: {
            slidesPerView: 1.4,
            spaceBetween: 30,
          },
          992: {
            slidesPerView: 2.4,
            spaceBetween: 30,
          },
          1200: {
            slidesPerView: 3.8,
            spaceBetween: 30,
          },
        },
        loop: false,
        slidesPerView: '1',
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
    if (document.body.classList.contains("single-perfekt_fur")) {
      var juraThumbnails = new Swiper(".jura-swiper-thumbnail", {
        spaceBetween: 2,
        slidesPerView: 6,
        freeMode: true,
        watchSlidesProgress: true,
      });
      var juraGallery = new Swiper(".jura-swiper", {
        spaceBetween: 2,
        navigation: {
          nextEl: ".jura-button-next",
          prevEl: ".jura-button-prev",
        },
        thumbs: {
          swiper: juraThumbnails,
        },
      });
    }
    if (document.body.classList.contains("page-template-page-szl")) {
      const szlBannerSwiper = new Swiper('.banner-szl-swiper', {
        loop: true,
        spaceBetween: 2,
        direction: 'horizontal',
        speed: 800,
        // Navigation arrows
        navigation: {
          nextEl: '.swiper-button-next.banner-szl-button-nextt',
          prevEl: '.swiper-button-prev.banner-szl-button-prev',
        },
      });
    }
    // Hotel Restaurant - Zimmer Slider
    if (document.body.classList.contains("single-zimmer")) {
      var juraThumbnails = new Swiper(".zimmer-swiper-thumbnail", {
        spaceBetween: 2,
        slidesPerView: 6,
        freeMode: true,
        watchSlidesProgress: true,
      });
      var juraGallery = new Swiper(".zimmer-swiper", {
        spaceBetween: 2,
        thumbs: {
          swiper: juraThumbnails,
        },
      });
    }
  }, false);
});
