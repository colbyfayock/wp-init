<nav id="nav" class="container cf" role="navigation">

    <div class="content">

        <div class="row">

            <div class="twelvecol">
                <? if(is_home()) : ?>
                    <h1 class="h1">
                        <a href="<?=home_url()?>">
                            WP-Init
                        </a>
                    </h1>
                <? else : ?>
                    <span class="h1">
                        <a href="<?=home_url()?>">
                            WP-Init
                        </a>
                    </span>
                <? endif; ?>
                <p class="tagline">
                    <? bloginfo('description'); ?>
                </p>
            </div>

            <div class="twelvecol">
                <?=ZurgMenus::get_primary_nav()?>
            </div>

        </div>

    </div>

</nav>