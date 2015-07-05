<nav id="nav" class="container cf" role="navigation">

    <div class="content">

        <div class="row">
            <div class="fourcol nav-logo">
                <? if(is_home()) : ?>
                    <h1 class="h1">
                        <a href="<?=home_url()?>">
                            <img width="150" src="<?= get_template_directory_uri() ?>/assets/images/hair-by-diane-logo.png" alt="<? bloginfo('name'); ?>">
                        </a>
                    </h1>
                <? else : ?>
                    <span class="h1">
                        <a href="<?=home_url()?>">
                            <img width="150" src="<?= get_template_directory_uri() ?>/assets/images/hair-by-diane-logo.png" alt="<? bloginfo('name'); ?>">
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


<!-- <span class="tagline">
    <? bloginfo('description'); ?>
</span> -->