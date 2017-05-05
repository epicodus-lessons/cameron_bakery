(function ($, Drupal, window, document) {

    'use strict';

    // To understand behaviors, see https://drupal.org/node/756722#behaviors
    Drupal.behaviors.my_custom_behavior = {
        attach: function (context, settings) {
            $(document).ready(function() {
                $('#header h1').addClass('animated pulse');
                $('#header img').addClass('animated rollIn');
            });
            $("a").click(function() {
                $('#header img').removeClass('animated rollIn');
                $('#header img').addClass('animated flipOutX');
            });
        }
    };
})(jQuery, Drupal, this, this.document);
