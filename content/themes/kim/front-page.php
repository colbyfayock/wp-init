<? if (have_posts()) : ?>
    <? while (have_posts()) : the_post(); ?>

        <?
            $hero = array(
                'title' => get_post_meta($post->ID, 'hero-title', true),
                'copy'  => get_post_meta($post->ID, 'hero-copy', true)
            );
        ?>

        <div id="hero-main" class="container">

            <div class="content cf">

                <div class="row">
                    <div class="eightcol center">
                        <h1 class="text-center color-yellow"><?=$hero['title']?></h1>
                        <p class="text-center color-grey-light">
                            <?=$hero['copy']?>
                        </p>
                        <div class="text-center">
                            <a class="button-yellow push-right" href="/contact-us/">Contact Us</a>
                            <a class="button-yellow-outline" href="/services/">Learn More</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div id="hero-links" class="container">

            <div class="content content-bare cf">

                <div class="row">
                    <div class="twelvecol nav-links">
                        <?=setHomeLinks('text-center')?>
                    </div>
                </div>

            </div>

        </div>

        <section class="container">
            <div class="content content-full cf">
                <div class="eightcol last center" role="main">

                    <article id="post-<? the_ID(); ?>" class="row" role="article" itemscope itemtype="http://schema.org/BlogPosting">

                        <section class="twelvecol entry-content cf text-center" itemprop="articleBody">
                            <? the_content(); ?>
                        </section>

                        <section class="text-center" style="margin-top: 2em;">

                            <span class="display-ib push-right">
                                <iframe src="//www.distinguishedcounsel.org/badges/richard-kim/16348/" width="100" height="100" frameborder="0" scrolling="no"></iframe>
                            </span>

                            <span class="display-ib push-right" style="vertical-align:top;margin-top:6px;">
                                <!-- begin super lawyers badge -->
                                <div id="super_lawyers_badge" style="margin:0; padding:0; line-height:1; font-size:1em; font:100 0.8em/1em 'Arial',sans-serif; position:relative; outline:none; border: none;">
                                <div id="sl_badge_container_small" style="height:90px; width:120px; background-image:url('http://i.superlawyers.com/shared/badge/lawyer/basic/small_name_white-orange.png'); text-align:center; outline:none; border: none;">
                                <a href="http://www.superlawyers.com/redir?r=http://www.superlawyers.com&amp;c=basic_small_white-orange_badge&amp;i=home_page" title="Visit the official website of Super Lawyers" alt="Visit the official website of Super Lawyers" style="height:20px;; width:120px; display:block; text-decoration:none; margin:0; padding:0; line-height:1; font-size:100%; outline:none; border:none;">&#160;</a>
                                <a href="http://www.superlawyers.com/redir?r=http://www.superlawyers.com/pennsylvania/lawyer/Richard-H-Kim/e5464d8e-84ea-4e7c-9365-168cd55354aa.html&amp;c=basic_smallwhite-orange_badge&amp;i=e5464d8e-84ea-4e7c-9365-168cd55354aa" title="View the profile of Pennsylvania Business Litigation Attorney Richard H. Kim" style="height:45px; width:120px; display:block; text-decoration:none; margin:0; padding:36px 0 0 0 ; outline:none; border:none; text-decoration:none; font-size:14px; line-height:1; color:rgb(255,145,0);">Richard H. Kim</a>
                                </div></div><div style="display:none;"><img src="http://www.superlawyers.com/services/badge/beacon/e5464d8e-84ea-4e7c-9365-168cd55354aa/l/10.gif" width="1" height="1" border="0" /></div>
                                <!-- end super lawyers badge -->
                            </span>

                            <span class="display-ib" style="vertical-align: top;margin-top: 8px;">
                                <a href="http://www.avvo.com/attorneys/19107-pa-richard-kim-4570532.html">
                                    <img width="95" height="84" src="http://thekimlawfirmllc.com/wp-content/themes/kim/assets/images/avvo.png">
                                </a>
                            </span>
                        </section>

                        <? if ( is_page() && $page_children = getCurrentChildren( get_the_ID(), 'menu_order' ) ) : ?>
                            <footer>
                                <ul>
                                <? foreach( $page_children as $page_child ) : ?>
                                    <li>
                                        <a href="<?=$page_child[post_name]?>"><?=$page_child[post_title]?></a>
                                    </li>
                                <? endforeach; ?>
                                </ul>
                            </footer>
                        <? endif; ?>

                    </article>

                </div>
            </div>
        </section>

        <section class="container container-primary">
            <div class="content content-full cf">
                <?
                    $moreinfo = array();
                    if ( get_post_meta($post->ID, 'moreinfo-1-title', true) ) {
                        $moreinfo[] = array(
                            'title' => get_post_meta($post->ID, 'moreinfo-1-title', true),
                            'copy'  => get_post_meta($post->ID, 'moreinfo-1-copy', true),
                            'link'  => get_post_meta($post->ID, 'moreinfo-1-link', true),
                        );
                    }
                    if ( get_post_meta($post->ID, 'moreinfo-2-title', true) ) {
                        $moreinfo[] = array(
                            'title' => get_post_meta($post->ID, 'moreinfo-2-title', true),
                            'copy'  => get_post_meta($post->ID, 'moreinfo-2-copy', true),
                            'link'  => get_post_meta($post->ID, 'moreinfo-2-link', true),
                        );
                    }
                ?>
                <? if ( count($moreinfo) === 1 ) : ?>
                    <div class="threecol"></div>
                    <div class="sixcol text-center">
                        <h3><?=$moreinfo[0]['title']?></h3>
                        <p><?=$moreinfo[0]['copy']?></p>
                        <p>
                            <a class="button-primary button-small" href="<?=$moreinfo[0]['link']?>">Learn More</a>
                        </p>
                    </div>
                    <div class="threecol mobile-hide last"></div>
                <? elseif ( count($moreinfo) === 2 ) : ?>
                    <div class="twocol"></div>
                    <div class="fourcol text-center">
                        <h3><?=$moreinfo[0]['title']?></h3>
                        <p><?=$moreinfo[0]['copy']?></p>
                        <p>
                            <a class="button-primary button-small" href="<?=$moreinfo[0]['link']?>">Learn More</a>
                        </p>
                    </div>
                    <div class="fourcol text-center">
                        <h3><?=$moreinfo[1]['title']?></h3>
                        <p><?=$moreinfo[1]['copy']?></p>
                        <p>
                            <a class="button-primary button-small" href="<?=$moreinfo[1]['link']?>">Learn More</a>
                        </p>
                    </div>
                    <div class="twocol mobile-hide last"></div>
                <? endif; ?>
            </div>
        </section>

        <? include 'partials/peer-endorsements.php'; ?>

    <? endwhile; ?>

<?else : ?>

    <section class="container">
        <div class="content content-full cf">
            <div class="eightcol last center" role="main">

                <article id="post-not-found" class="row hentry">
                    <header class="twelvecol article-header">
                        <h1>Oops, Post Not Found!</h1>
                    </header>
                    <section class="twelvecol entry-content">
                        <p>Uh Oh. Something is missing. Try double checking things.</p>
                    </section>
                    <footer class="twelvecol article-footer">
                        <p>This is the error message in the page.php template.</p>
                    </footer>
                </article>

            </div>
        </div>
    </section>

<? endif; ?>