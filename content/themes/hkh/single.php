<? if (have_posts()) : while (have_posts()) : the_post(); ?>

    <article id="post-<? the_ID(); ?>" <? post_class('cf'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

        <header class="article-header" style="margin-bottom: 2.5em; border-bottom: solid 1px rgba(0,0,0,.1); padding-bottom: .75em;">

            <h1 class="h2 entry-title single-title" itemprop="headline">
                <? the_title(); ?>
            </h1>
            <p class="article-meta" style="font-size: .8em; margin-bottom: 1em;">
                <time class="updated" datetime="<?=get_the_time('Y-m-j')?>" pubdate><?=get_the_time(get_option('date_format'))?></time>
            </p>

        </header>

        <section class="entry-content cf" itemprop="articleBody">
            <? the_content(); ?>
        </section>

        <footer class="article-footer">
            <? the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:' ) . '</span> ', ', ', '</p>' ); ?>

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