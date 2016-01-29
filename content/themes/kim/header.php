<style>
#hero-links .nav-links > ul > li {
    vertical-align: top;
}
#hero-links .nav-links > ul > li:hover {
    background-color: black;
}
</style>

<nav id="nav" class="container" role="navigation">

    <div class="content cf">

        <div class="row">
            <div class="nav-mobile">
                <span>
                    <i class="fa-bars"></i>
                </span>
            </div>
            <div class="fourcol nav-logo">
                <? if(is_front_page()) : ?>
                    <h1 class="h1">
                        <a href="<?=home_url()?>">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/kim-logo-158x40@2x.png" alt="<? bloginfo('name'); ?>"/>
                        </a>
                    </h1>
                <? else: ?>
                    <span class="h1">
                        <a href="<?=home_url()?>">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/kim-logo-158x40@2x.png" alt="<? bloginfo('name'); ?>"/>
                        </a>
                    </span>
                <? endif; ?>
            </div>
            <div class="eightcol last nav-links">
                <?=setPrimaryNav()?>
            </div>
        </div>

    </div>

</nav>