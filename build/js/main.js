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