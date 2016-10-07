<!DOCTYPE html>

<html <? language_attributes(); ?>>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>
        <?
            if (is_home()) {
                echo 'Colby Fayock - Front-end Developer and Designer';
            } else {
                wp_title('-', true, 'right');
                echo ' Colby Fayock';
            }
        ?>
    </title>

    <meta name="viewport" content="width=device-width">

    <meta property="og:title" content="<? echo get_bloginfo('name'); ?>" />
    <meta property="og:description" content="<? echo get_bloginfo('name'); ?>" />
    <meta property="og:url" content="url" />
    <meta property="og:site_name" content="<? echo get_bloginfo('name'); ?>" />
    <meta property="fb:page_id" content="10893981495" />

    <link rel="apple-touch-icon-precomposed" href="<?=home_url()?>/touchicon.png" />
    <link rel="icon" href="<?=home_url()?>/favicon.png">
    <!--[if IE]><link rel="shortcut icon" href="<?=home_url()?>/favicon.ico"><![endif]-->
    <meta name="msapplication-TileColor" content="#007079">
    <meta name="msapplication-TileImage" content="<?=home_url()?>/win8icon.png">

    <link rel="alternate" type="application/rss+xml" title="<? echo get_bloginfo('name'); ?> Feed" href="<? echo home_url(); ?>/feed/">

    <link rel="stylesheet" href="<?=auto_version('/style.css')?>">

    <? wp_head(); ?>

</head>

<body class="<?=getBodyClass()?>">

    <? if ( strpos(getBodyClass(), 'not') === false ): ?>
        <? get_header(zurg_template_base()); ?>
    <? else: ?>
        <? get_header('secondary'); ?>
    <? endif; ?>

    <main id="main" class="content-wrapper">
        <div>
            <? include zurg_template_path(); ?>
        </div>
    </main>

    <footer id="footer" class="content-wrapper">
        <div>
            <? get_footer( zurg_template_base() ); ?>
        </div>
    </footer>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="http://cdn.colbyfayock.com/js/jquery-1.9.1.min.js"><\/script>')</script>

     <script data-main="http://cdn.colbyfayock.com/js/cf-main.min" src="//cdnjs.cloudflare.com/ajax/libs/require.js/2.1.5/require.min.js"></script>

     <!-- Google Tag Manager -->
    <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-NJ75NM" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <script>
    (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NJ75NM');
    </script>
    <!-- End Google Tag Manager -->

    <script type="text/javascript">
    setTimeout(function(){var a=document.createElement("script");
    var b=document.getElementsByTagName("script")[0];
    a.src=document.location.protocol+"//script.crazyegg.com/pages/scripts/0028/5501.js?"+Math.floor(new Date().getTime()/3600000);
    a.async=true;a.type="text/javascript";b.parentNode.insertBefore(a,b)}, 1);
    </script>

    <? wp_footer(); ?>

</body>

</html>
