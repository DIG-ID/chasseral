// wait until DOM is ready
document.addEventListener("DOMContentLoaded", () => {
  //wait until images, links, fonts, stylesheets, and js is loaded
  window.addEventListener("load", () => {
    if (document.body.classList.contains("page-template-page-home")) {
      // Create copies for the sliding text
      const parent = document.querySelector('.sliding-text-content');
      const child = parent.querySelector('.sliding-text');
      const numCopies = 5; // Change this to the desired number of copies
      for (let i = 0; i < numCopies; i++) {
        const copy = child.cloneNode(true);
        parent.appendChild(copy);
      }
    }

  }, false);
});
