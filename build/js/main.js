$(function() {

    var navMobile = $('.nav-mobile'),
        navSearch = $('.nav-search'),
        navLinks = $('#nav .nav-links');

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