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

      $('div', context).once('hover-add', function() {
        $(this).hover(function(){
          let divs = $('div');
          let index = random_number($('div').length - 1);
          $(divs[index]).attr('style', 'background-color: ' + random_color());
        }, function(){
          let divs = $('div');
          let index = random_number($('div').length - 1);
          $(divs[index]).attr('style', 'color: ' + random_color());
        });
      });


      function random_color() {
        return "rgb(" + random_number(256) + ", " + random_number(256) + ", " + random_number(256) + ")";
      }

      function random_number(value) {
        return Math.floor(Math.random()*value);
      }
    }
  }
})(jQuery, Drupal, this, this.document);
