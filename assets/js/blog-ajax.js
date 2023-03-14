window.$ = window.jQuery = require('jquery');
// wait until DOM is ready
document.addEventListener("DOMContentLoaded", () => {
  //wait until images, links, fonts, stylesheets, and js is loaded
  window.addEventListener("load", () => {
    if (document.body.classList.contains("blog")) {
			var ajaxurl = blog_ajax_object.ajax_url;
			function loadBlogPosts(page){
				// Start the transition
				$(".blog-grid--loading").fadeIn().css('background','#ccc');
				// Data to receive from our server
				// the value in 'action' is the key that will be identified by the 'wp_ajax_' hook
				var data = {
					page: page,
					action: "get_blog_posts"
				};
				// Send the data
				$.post(ajaxurl, data, function(response) {
					// If successful Append the data into our html container
					$(".blog-grid--container").html(response);
					// End the transition
					$(".blog-grid--loading").css({'background':'none', 'transition':'all 1s ease-out'});
				});
			}
			// Load page 1 as the default
			loadBlogPosts(1);
			// Handle the clicks
			$('body').on('click', '.blog-grid--container .blog-grid-pagination li.active', function(e){
				var page = $(this).attr('p');
				loadBlogPosts(page);
			});
    }
  }, false);
});
