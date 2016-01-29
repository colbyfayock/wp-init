<<<<<<< HEAD
require({
    paths: {

        // Plug-ins
        'validate'   : 'lib/jquery-validate-1.12.0pre.min',
        'hippify'    : 'lib/hippify.min',
        'magnific'   : 'lib/jquery.magnific-popup.min',

        // Modules
        'functions'  : 'lib/functions'

    }
})

require(['hippify']);


require(['magnific'], function() {
	$('.magnific').magnificPopup({type:'image'});
});


// Modules

require(['lib/modules/header'], function(paraHeader) {
    paraHeader.paraHeader();
});


require(['lib/modules/forms'], function(forms) {
    forms.formValidate('form');
});

require(['lib/modules/drawers'], function(drawers) {
	drawers.drawer('.dresser .handle');
});
=======
$(function() {

    var navMobile = $('.nav-mobile'),
        navSearch = $('.nav-search'),
<<<<<<< HEAD
        navLinks = $('.nav-links');
=======
        navLinks = $('#nav .nav-links');
>>>>>>> 145289c1c9eab92c0cc1ff44ba841d39002419a3

    navMobile.find('span').click(function() {
        navLinks.toggleClass('open');
        navMobile.toggleClass('open');
    });

    navSearch.find('a').click(function() {
        var that = $(this);

        if( navSearch.hasClass('active') ) {
            navSearch.find('form').submit();
        } else {
            navSearch.addClass('active');
            return false;
        }
    });

    var navParent = $('.menu-item-has-children');

    navParent.children('a').append('<i class="fa-caret-down"></i>');
    navParent.children('a').find('i').click(function() {
        $(this).closest('.menu-item-has-children').toggleClass('active');
        return false;
    });

});
>>>>>>> 78adeb471b5863cf56ace850fbc45868c4dbac8c
