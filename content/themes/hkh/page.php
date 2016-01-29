<? if (have_posts()) : ?>
    <? while (have_posts()) : the_post(); ?>

        <article id="post-<? the_ID(); ?>" class="row" role="article" itemscope itemtype="http://schema.org/BlogPosting">

            <? if( !is_front_page()) : ?>
                <header class="twelvecol article-header">

                    <? if ( is_page() && !empty( $post->post_parent ) ) : ?>

                        <h2 class="page-title-parent"><?= get_the_title( $post->post_parent ) ?></h2>

                    <? endif; ?>

                    <h1 class="page-title" itemprop="headline">
                        <? the_title(); ?>
                    </h1>

                </header>
            <? endif; ?>
            
            <? $parent = get_post($post->post_parent); ?>
            <? if ( is_page() && !empty( $post->post_parent ) && $parent->post_name === 'investigations-cases' ) : ?>

                <?
                    $pressData = array(
                        'press-type' => get_post_meta($post->ID, 'press-type', true),
                    );
                ?>

                <? if ( is_active_sidebar( 'sidebar-press' ) || is_active_sidebar( 'sidebar-press-security' )  ) : ?>

                    <section class="eightcol entry-content cf" itemprop="articleBody">
                        <? the_content(); ?>
                    </section>
                    
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

                <? $page_children = getCurrentChildren( get_the_ID(), 'menu_order' ); ?>

                <? if ( is_page() && $page_children && !empty($page_children) ) : ?>
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