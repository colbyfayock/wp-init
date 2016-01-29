<? if(is_front_page()) : ?>
    <div id="hero-main" class="container">

        <div class="content cf">

            <div class="row">
                <div class="twelvecol">
                    <h1 class="h1">
                        <img src="<?= get_template_directory_uri() ?>/assets/images/hkh-logo-color.png" alt="<? bloginfo('name'); ?>"/>
                    </h1>
                </div>
            </div>

        </div>
    </div>
    <nav id="nav" class="container" role="navigation">

        <div class="content cf">

            <div class="row">
                <div class="nav-mobile">
                    <span>
                        <i class="fa-bars"></i> Menu
                    </span>
                </div>
                <div class="twelvecol nav-links">
                    <?=setPrimaryNav()?>
                </div>
            </div>

        </div>

    </nav>
<? else : ?>
    <nav id="nav" class="container" role="navigation">

        <div class="content cf">

            <div class="row">
                <div class="nav-mobile">
                    <span>
                        <i class="fa-bars"></i>
                    </span>
                </div>
                <div class="fourcol nav-logo">
                    <span class="h1">
                        <a href="<?=home_url()?>">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/hkh-logo-color-small@2x.png" alt="<? bloginfo('name'); ?>"/>
                        </a>
                    </span>
                </div>
                <div class="eightcol last nav-links">
                    <?=setPrimaryNav()?>
                </div>
            </div>

        </div>

    </nav>
<? endif; ?>