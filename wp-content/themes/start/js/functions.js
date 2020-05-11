jQuery(function($){

  $('#toggle').click(function() {
    $('#hamburger-menu').toggleClass('none');
    $(this).toggleClass('active');
  });
});
