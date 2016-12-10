jQuery(document).ready(function($) {
    $('#navigation li').hover(
        function() {
            $(this).animate({
                borderBottomWidth: '5px'
            }, 250);
        }, function() {
            $(this).animate({
                borderBottomWidth: '0px'
            }, 250);
        }
    );
});
