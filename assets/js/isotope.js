import Isotope from 'isotope-layout';
// wait until DOM is ready
document.addEventListener("DOMContentLoaded", () => {
  //wait until images, links, fonts, stylesheets, and js is loaded
  window.addEventListener("load", () => {

    if (document.body.classList.contains("blog")) {
      var elem = document.querySelector('.grid');
      var iso = new Isotope( elem, {
        // options
        itemSelector: '.grid-item',
        layoutMode: 'fitRows'
      });
    }

  }, false);
});
