<? if (have_posts()) : while (have_posts()) : the_post(); ?>

    <article id="post-<? the_ID(); ?>" <? post_class('cf'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

        <header class="article-header">

            <h1 class="entry-title single-title" itemprop="headline"><? the_title(); ?></h1>
            <p class="article-meta">
                <time class="updated" datetime="<?=get_the_time('Y-m-j')?>" pubdate><?=get_the_time(get_option('date_format'))?></time>
                by <span class="author"><?=get_the_author()?></span>
                to <?= get_the_category_list(', ')?>
            </p>

        </header>

        <section class="entry-content cf" itemprop="articleBody">
            <? the_content(); ?>
        </section>

        <footer class="article-footer" style="margin-top: 1em;border-top: solid 1px #eef2f2;padding-top: 2em;">
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

    </article>

<? endwhile; ?>

<? else : ?>

    <article id="post-not-found" class="hentry cf">
            <header class="article-header">
                <h1><? _e( 'Oops, Post Not Found!' ); ?></h1>
            </header>
            <section class="entry-content">
                <p><? _e( 'Uh Oh. Something is missing. Try double checking things.' ); ?></p>
            </section>
            <footer class="article-footer">
                    <p><? _e( 'This is the error message in the single.php template.' ); ?></p>
            </footer>
    </article>

<? endif; ?>