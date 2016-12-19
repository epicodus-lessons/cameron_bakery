jQuery(document).ready(function($) {
	jQuery('#spawn').click(function(){
		var min = -100;
		var max = 600;
		var top = Math.floor(Math.random() * (max - min + 1) + min);
		var left = Math.floor(Math.random() * (max - min + 1) + min);
		jQuery('.fun-container').append('<img src="sites/all/themes/alex_custom/logo.png" style="height: 100px; width: 100px; margin-top: ' + top + '; margin-left: ' + left + ';">');
	});
});
