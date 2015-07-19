(function($, undefined) {

  $(function() {
    $('.tickets-link').on('mouseenter', function() {
      $(this).find('img').attr('src', '/wp-content/themes/vncc2015/images/tickets-button-hover.png');
    });

    $('.tickets-link').on('mouseleave', function() {
      $(this).find('img').attr('src', '/wp-content/themes/vncc2015/images/tickets-button.png');
    });
  });

}(window.jQuery));