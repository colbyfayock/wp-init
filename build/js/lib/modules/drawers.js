define(function() {
    var drawer = function(formElement) {

        // Drawer toggle
		$(formElement).click(function(e){
			e.preventDefault();
			var	handle = $(this);
				dresser = $(this).parent(),
				drawer = dresser.find('.drawer');

			if(dresser.hasClass('active')) {
				drawer.slideToggle('fast', function() {
					dresser.removeClass('active');
				});
			} else {
				dresser.addClass('active');
				drawer.slideToggle('fast');
			}
		});

    };
    return {
        drawer: drawer
    };
});