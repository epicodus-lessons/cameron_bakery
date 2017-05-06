/**
 * @file
 * A JavaScript file for the theme.
 *
 * In order for this JavaScript to be loaded on pages, see the instructions in
 * the README.txt next to this file.
 */

// JavaScript should be made compatible with libraries other than jQuery by
// wrapping it with an "anonymous closure". See:
// - https://drupal.org/node/1446420
// - http://www.adequatelygood.com/2010/3/JavaScript-Module-Pattern-In-Depth
(function ($, Drupal, window, document) {

  'use strict';

  // To understand behaviors, see https://drupal.org/node/756722#behaviors
  Drupal.behaviors.my_custom_behavior = {
    attach: function (context, settings) {

      jQuery(document).ready(function($) {

        $('img.header__logo-image').hover(
          function () {
            setRotation($(this), 222);
          },
          function () {
            setRotation($(this), 0);
          }
        );

        $('a.header__site-link').hover(
          function () {
            $(this).css({'background-color': 'pink'});
          },
          function () {
            $(this).css({'background-color': 'black'});
          }
        );

        // From: https://jsfiddle.net/Dunkel85/d4c9d6en/
        function setRotation(target, deg) {
          target.css({    // rotate element via css
            '-webkit-transform': 'rotate(' + deg + 'deg)',
            '-moz-transform': 'rotate(' + deg + 'deg)',
            '-ms-transform': 'rotate(' + deg + 'deg)',
            'transform': 'rotate(' + deg + 'deg)'
          });
        }
      });

    }
  };

})(jQuery, Drupal, this, this.document);
