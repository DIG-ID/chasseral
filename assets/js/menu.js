document.addEventListener('DOMContentLoaded', function() {
  //Sticky navigation
  const header = document.querySelector('.header-main');
  let lastScroll = 0;

  window.addEventListener( 'scroll', () => {
    const currentScroll = window.pageYOffset;
    if ( currentScroll <= 0 ) {
      //console.log('current scroll is ' + currentScroll);
      header.classList.remove( 'header-main--scrolled' );
      return;
    } 
    if ( currentScroll > lastScroll && currentScroll > 0 && ! header.classList.contains('header-main--scrolled') ) {
      //down
      header.classList.remove( 'header-main--scrolled' );
      header.classList.add( 'header-amin--scrolled' );
    } 
    lastScroll = currentScroll;
  });

});
