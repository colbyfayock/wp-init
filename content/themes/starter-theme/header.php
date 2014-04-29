<nav id="nav" class="container cf" role="navigation">

    <div class="content">

        <div class="row">
            <div class="sixcol nav-logo">
                <? if(is_home()) : ?>
                    <h1 class="h1">
                        <a href="<?=home_url()?>">
                            <? bloginfo('name'); ?>
                        </a>
                    </h1>
                    <span class="tagline">
                        <? bloginfo('description'); ?>
                    </span>
                <? else : ?>
                    <span class="h1">
                        <a href="<?=home_url()?>">
                            <? bloginfo('name'); ?>
                        </a>
                    </span>
                    <span class="tagline">
                        <? bloginfo('description'); ?>
                    </span>
                <? endif; ?>
            </div>
            <div class="sixcol last nav-links">
            <?=setPrimaryNav()?>
            </div>
        </div>

    </div>

</nav>
