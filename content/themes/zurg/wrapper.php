<!doctype html>

<html>

    <head>
        <meta charset="utf-8">

        <title><?= wp_title('', false) ? wp_title('', false) . ' - ' : '' ?><? bloginfo('name'); ?></title>

        <meta name="description" content="">

        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <!--<link rel="apple-touch-icon" href="<?= get_template_directory_uri() ?>/library/images/apple-icon-touch.png">-->
        <!--<link rel="icon" href="<?= get_template_directory_uri() ?>/favicon.png">-->
        <!--[if IE]>
            <link rel="shortcut icon" href="<?= get_template_directory_uri() ?>/favicon.ico">
        <![endif]-->
        <!--<meta name="msapplication-TileColor" content="#f01d4f">-->
        <!--<meta name="msapplication-TileImage" content="<?= get_template_directory_uri() ?>/library/images/win8-tile-icon.png">-->

        <link rel="pingback" href="<? bloginfo('pingback_url'); ?>">

        <link rel="stylesheet" href="<?=ZurgHelpers::auto_version( ZurgHelpers::get_relative_url() . '/style.css' )?>">

        <? wp_head(); ?>

    </head>

    <body <? body_class(); ?>>

        <? get_header( ZurgWrapper::zurg_template_base() ); ?>

        <section class="container cf">
            <div class="content">
                <div id="main" role="main" class="main-wide">
                    <? include ZurgWrapper::zurg_template_path(); ?>
                </div>
            </div>
        </section>

        <? get_footer( ZurgWrapper::zurg_template_base() ); ?>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?=get_template_directory_uri()?>/assets/js/jquery.min.js"><\/script>')</script>

        <script src="<?= get_template_directory_uri(); ?>/assets/js/wp-init.min.js"></script>

        <? wp_footer(); ?>

        <? if( $google_analytics_id = ZurgHelpers::get_google_analytics_id() ) : ?>
            <script>
                (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
                function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
                e=o.createElement(i);r=o.getElementsByTagName(i)[0];
                e.src='//www.google-analytics.com/analytics.js';
                r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
                ga('create','<?= $google_analytics_id ?>');ga('send','pageview');
            </script>
        <? endif; ?>

    </body>

</html>
