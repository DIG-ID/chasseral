import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

// wait until DOM is ready
document.addEventListener("DOMContentLoaded", () => {
  //wait until images, links, fonts, stylesheets, and js is loaded
  window.addEventListener("load", () => {
    if (document.body.classList.contains("page-template-page-home")) {
      /* menu open/close */
      const toggleBtn = document.querySelector('.mega-menu-toggle');
      toggleBtn.addEventListener( 'click', (e) => {
        document.body.classList.toggle('mega-menu-open');
      });
    }
  }, false);
});