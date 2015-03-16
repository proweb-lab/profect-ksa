
(function ($, Drupal, window, document, undefined) {
  Drupal.behaviors.profect = {
    attach: function (context, settings) {
    $('.portfolio-item').hover(
              function () {
                $(this).find('.portfolio-overlay').show();
               
              },
              function () {
               $(this).find('.portfolio-overlay').hide();
              }
      );
    }}     
    
})(jQuery, Drupal, this, this.document);
    