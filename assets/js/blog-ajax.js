window.$ = window.jQuery = require('jquery');
// wait until DOM is ready
document.addEventListener("DOMContentLoaded", () => {
  //wait until images, links, fonts, stylesheets, and js is loaded
  window.addEventListener("load", () => {
    if (document.body.classList.contains("blog")) {
      var page = 1;
      var postPerPage = 10;
      var postsContainer = $('.blog-grid');

      function loadBlogPosts() {
        var data = {
          action: 'get_blog_posts',
          page: page,
          post_per_page: postPerPage
      };
      
      $.ajax({
        url: blog_ajax_object.ajax_url,
        type: 'POST',
        data: data,
        success: function(response) {
          postsContainer.append(response);
          page++;
        },
        error: function(xhr, ajaxOptions, thrownError) {
          console.log(thrownError);
        }
      });
    }
    
    loadBlogPosts();

    }
  }, false);
});
