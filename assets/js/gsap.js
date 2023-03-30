import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

// wait until DOM is ready
document.addEventListener("DOMContentLoaded", () => {
  //wait until images, links, fonts, stylesheets, and js is loaded
  window.addEventListener("load", () => {


    let $getheader = $("#header-main");

    if ( $getheader.hasClass('header-main--szl') || $getheader.hasClass('header-main--hotel') || $getheader.hasClass('header-main--jura') ) {
      /* menu open/close */
      const toggleBtn = document.querySelector('.mega-menu-toggle');

      let togglerTl = gsap.timeline({
        defaults: {
          duration: 0.6,
          ease: 'ease-in-out'
        },
      });
      togglerTl.to('.main-menu-top-level', {y:' 100%', opacity: 0, ease: 'back.in'});
      togglerTl.to('.mega-menu-navigation', {height: 'calc(var(--vh, 1vh) * 100 - 75px) ', opacity:1}, '<0.4');
      togglerTl.from('.site-root-title', {y: '-50px', opacity: 0}, '<');
      togglerTl.from('.mega-menu-content .mega-menu--menus .mega-menu-top .menu-item', {y: '-50px', opacity: 0, stagger: 0.10}, '<');
      togglerTl.from('.mega-menu-content .mega-menu--menus .mega-menu-bottom .menu-item', {y: '-50px', opacity: 0, stagger: 0.10}, '<');
      togglerTl.from('.mega-menu-content .mega-links-xl .mega-link', {x: '-50px', opacity: 0, stagger: 0.25}, '<');

      togglerTl.paused(true);

      toggleBtn.addEventListener( 'click', (e) => {
        document.body.classList.toggle('mega-menu-open');
        if (togglerTl.paused()) {
          togglerTl.play();
        } else if (togglerTl.reversed()) {
          togglerTl.restart().timeScale(1);
        } else {
          togglerTl.timeScale(2).reverse();
        }

      });

    } else {
      /* menu open/close */
      const toggleBtn = document.querySelector('.mega-menu-toggle');

      let togglerTl = gsap.timeline({
        defaults: {
          duration: 0.6,
          ease: 'ease-in-out'
        },
      });

      togglerTl.to('.main-menu-top-level', {y:' 100%', opacity: 0, ease: 'back.in'});
      togglerTl.to('.mega-menu-navigation', {height: 'calc(var(--vh, 1vh) * 100 - 75px) ', opacity:1}, '<0.4');
      togglerTl.from('.site-root-title', {y: '-50px', opacity: 0}, '<');
      togglerTl.from('.mega-menu-content .mega-menu--menus .mega-menu-top .menu-item', {y: '-50px', opacity: 0, stagger: 0.10}, '<');
      togglerTl.from('.mega-menu-content .see-webcam, .mega-menu-content .service-status, .mega-menu-content .notification', {y: '-50px', opacity: 0, stagger: 0.25}, '<');
      togglerTl.from('.mega-menu-title, .mega-menu-description', {y: '-50px', opacity: 0, stagger: 0.25}, '<');
      togglerTl.from('.mega-menu-content .mega-links > a', {y: '-50px', opacity: 0, stagger: 0.25}, '<');

      togglerTl.paused(true);


      toggleBtn.addEventListener( 'click', (e) => {
        document.body.classList.toggle('mega-menu-open');
        if (togglerTl.paused()) {
          togglerTl.play();
        } else if (togglerTl.reversed()) {
          togglerTl.restart().timeScale(1);
        } else {
          togglerTl.timeScale(2).reverse();
        }
      });
    }

    if (document.body.classList.contains("page-template-page-home")) {

    } 

  }, false);
});





