<?
/*
This file handles the admin area and functions.
You can use this file to make changes to the
dashboard.
*/

/*
3. library/admin.php
    - adding custom login css
    - changing text in footer of admin
*/

/************* CUSTOM LOGIN PAGE *****************/

// Include custom login.css

function setLoginStylesheet() {
	wp_enqueue_style( 'setLoginStylesheet', get_template_directory_uri() . '/login.css', false );
}


// Change primary login screen logo to home

function setLoginLogoUrl() {
    return home_url();
}

// changing the alt text on the logo to show your site name
function setLoginLogoAlt() {
    return get_option( 'blogname' );
}

// calling it only on the login page

add_action( 'login_enqueue_scripts', 'setLoginStylesheet', 10 );
add_filter( 'login_headerurl', 'setLoginLogoUrl' );
add_filter( 'login_headertitle', 'setLoginLogoAlt' );