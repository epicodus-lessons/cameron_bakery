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

      $('div').once('hover-event', function() {
        $(this).hover(function(){
          randomize_header();
        }, function(){
          randomize_header();
        });
      });

      function randomize_header() {
        let header = $('.header__site-name a span');
        let alphabet = 'abcdefghijklmnopqrstuvwxyz ,!?\'';
        alphabet = alphabet.split('');
        let length = header.text().length;
        let index = Math.floor(Math.random() * length);
        let text = header.text();
        console.log(text.substr(0, index));
        text = text.substr(0, index) + alphabet[Math.floor(Math.random() * 31)] + text.substr(index+1);
        console.log(text);
        header.text(text);
      }

    }
  };

})(jQuery, Drupal, this, this.document);
