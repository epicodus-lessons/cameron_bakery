jQuery(document).ready(function($) {
    $("li.menu__item.is-leaf.last.leaf").hover(
        function() {
            $(this).css('background-color', '#ff0')
        }, function() {
            $(this).css('background-color', '')
    });
});
