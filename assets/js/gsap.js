import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

// wait until DOM is ready
document.addEventListener("DOMContentLoaded", () => {
  //wait until images, links, fonts, stylesheets, and js is loaded
  window.addEventListener("load", () => {
    if (document.body.classList.contains("page-template-page-home")) {

    }
    
    /* menu open/close */
    const toggleBtn = document.querySelector('.mega-menu-toggle');
    let togglerTl = gsap.timeline({
      defaults: {
        duration: 0.6,
        ease: 'ease-in-out'
      },
    });
    togglerTl.to('.navigation-widget, .menu-top-level', {y:' 100%', opacity: 0, ease: 'back.in'});
    togglerTl.to('.mega-menu-navigation', {height: 'calc( 100vh - 75px )'}, '<0.25');
    togglerTl.from('.mega-menu-title, .mega-menu-description', {y: '-50px', opacity: 0, stagger: 0.25}, '<');
    togglerTl.from('.mega-links a', {y: '-50px', opacity: 0, stagger: 0.25}, '<0.25');

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
  }, false);
});





