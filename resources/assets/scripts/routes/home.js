export default {
  init() {
    // JavaScript to be fired on the home page
    $('#show-more').on('click', function(e){
      e.preventDefault();
      $('.hidden-text').toggleClass('shown');
    })
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
