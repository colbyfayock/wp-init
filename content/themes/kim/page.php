<? if (have_posts()) : ?>
    <? while (have_posts()) : the_post(); ?>

        <article id="post-<? the_ID(); ?>" class="row" role="article" itemscope itemtype="http://schema.org/BlogPosting">

            <? if( !is_front_page()) : ?>
                <header class="twelvecol article-header">

                    <? if ( get_the_title($post->post_parent) == 'Services' ) : ?>

                        <span class="display-bl right">
                            <a href="http://www.avvo.com/attorneys/19107-pa-richard-kim-4570532.html">
                                <img width="95" height="84" src="<?= get_template_directory_uri() ?>/assets/images/avvo.png">
                            </a>
                        </span>

                        <span class="display-bl push-right right">
                            <!-- begin super lawyers badge -->
                            <div id="super_lawyers_badge" style="margin:0; padding:0; line-height:1; font-size:1em; font:100 0.8em/1em 'Arial',sans-serif; position:relative; outline:none; border: none;">
                            <div id="sl_badge_container_small" style="height:90px; width:120px; background-image:url('http://i.superlawyers.com/shared/badge/lawyer/basic/small_name_white-orange.png'); text-align:center; outline:none; border: none;">
                            <a href="http://www.superlawyers.com/redir?r=http://www.superlawyers.com&amp;c=basic_small_white-orange_badge&amp;i=home_page" title="Visit the official website of Super Lawyers" alt="Visit the official website of Super Lawyers" style="height:20px;; width:120px; display:block; text-decoration:none; margin:0; padding:0; line-height:1; font-size:100%; outline:none; border:none;">&#160;</a>
                            <a href="http://www.superlawyers.com/redir?r=http://www.superlawyers.com/pennsylvania/lawyer/Richard-H-Kim/e5464d8e-84ea-4e7c-9365-168cd55354aa.html&amp;c=basic_smallwhite-orange_badge&amp;i=e5464d8e-84ea-4e7c-9365-168cd55354aa" title="View the profile of Pennsylvania Business Litigation Attorney Richard H. Kim" style="height:45px; width:120px; display:block; text-decoration:none; margin:0; padding:36px 0 0 0 ; outline:none; border:none; text-decoration:none; font-size:14px; line-height:1; color:rgb(255,145,0);">Richard H. Kim</a>
                            </div></div><div style="display:none;"><img src="http://www.superlawyers.com/services/badge/beacon/e5464d8e-84ea-4e7c-9365-168cd55354aa/l/10.gif" width="1" height="1" border="0" /></div>
                            <!-- end super lawyers badge -->
                        </span> 

                        <span class="display-bl right push-right">
                            <iframe src="//www.distinguishedcounsel.org/badges/richard-kim/16348/" width="84" height="84" frameborder="0" scrolling="no"></iframe>
                        </span>

                    <? endif; ?>

                    <? if ( is_page() && !empty( $post->post_parent ) ) : ?>

                        <h2 class="page-title-parent"><?= get_the_title( $post->post_parent ) ?></h2>

                    <? endif; ?>

                    <h1 class="page-title" itemprop="headline">
                        <? the_title(); ?>
                    </h1>

                </header>
            <? endif; ?>
            
            <? $parent = get_post($post->post_parent); ?>
            <? if ( is_page() && !empty( $post->post_parent ) && $parent->post_name === 'current-investigations' ) : ?>

                <?
                    $pressData = array(
                        'press-type' => get_post_meta($post->ID, 'press-type', true),
                    );
                ?>

                <? if ( is_active_sidebar( 'sidebar-press' ) || is_active_sidebar( 'sidebar-press-security' )  ) : ?>

                    <div class="eightcol cf">
                        <section class="entry-content" itemprop="articleBody">
                            <? the_content(); ?>
                        </section>
                    </div>
                    
                    <aside class="fourcol last">
                        <? if ( $pressData['press-type'] == 'security' ) : ?>
                            <? dynamic_sidebar( 'sidebar-press-security' ); ?>
                        <? else: ?>
                            <? dynamic_sidebar( 'sidebar-press' ); ?>
                        <? endif; ?>
                    </aside>

                <? else : ?>

                    <section class="twelvecol entry-content cf" itemprop="articleBody">
                        <? the_content(); ?>
                    </section>

                <? endif; ?>

            <? else : ?>

                <section class="twelvecol entry-content cf" itemprop="articleBody">
                    <? the_content(); ?>
                </section>

                <? if ( is_page() && $page_children = getCurrentChildren( get_the_ID(), 'menu_order' ) ) : ?>
                    <? if ( !in_array_r('attachment', $page_children, true) ) : ?>
                        <footer>
                            <ul>
                            <? foreach( $page_children as $page_child ) : ?>
                                <? if ( $page_child[post_type] !== 'attachment' ) : ?>
                                    <li>
                                        <a href="<?=$page_child[post_name]?>/"><?=$page_child[post_title]?></a>
                                    </li>
                                <? endif; ?>
                            <? endforeach; ?>
                            </ul>
                        </footer>
                    <? endif; ?>
                <? endif; ?>

            <? endif; ?>

             <? if ( get_post_meta($post->ID, 'show-contact-footer', true) === 'yes' ) : ?>
                <footer class="article-footer" style="margin-top: 1em;border-top: solid 1px #eef2f2;padding-top: 2em;">
                    <h3>Contact an experienced lawyer now</h3>
                    <p>
                        The Kim Law Firm assists businesses and individuals with
                        various litigation matters involving business disputes,
                        civil litigation actions, consumer protection laws,
                        consumer class actions, personal injury lawsuits, and
                        employment related controversies.
                    </p>
                    <p>
                        <strong>To contact The Kim Law Firm, <a href="/contact-us/">click here</a> or call (855) 996-6342.</strong>
                    </p>
                    <p>
                        <em>Disclaimer: each case result depends on a variety of factors, and prior results do not guarantee a similar outcome.</em>
                    </p>
                </footer>
            <? endif; ?>

        </article>

    <? endwhile; ?>
<?else : ?>

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

<? endif; ?>