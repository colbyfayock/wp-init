<div class="row">
    <div class="eightcol center alert-message">
        <h2 class="text-center">Hair by Diane has joined with The Hair Connection</h2>
        <p class="text-center">331 N. Market St, Berwick, PA</p>
        <h3 class="text-center">For appointments call 570-759-3331</h3>
    </div>
</div>

<div class="row">
    <div class="eightcol center welcome-message">
        <h2>Welcome!</h2>
        <p>Hair by Diane is a full service hairstyling studio for men, women, and children. I provide a friendly and relaxed atmosphere with cheerful, professional service. Having over 25 years of experience, I am committed to giving you the excellence you deserve in hair, skin, makeup, and nails.</p>
        <p>To keep your hair looking beautiful and healthy, the following products used and recommended are Matrix, Biolage, Sebastian, Paul Mitchell, Clairol, It's A 10, OPI and Pharmagel.</p>
    </div>
</div>

<div class="row">
    <div class="eightcol center">
        <? if (have_posts()) : ?>
            <? while (have_posts()) : the_post(); ?>

                <article id="post-<? the_ID(); ?>" class="row post" role="article">

                    <header class="twelvecol article-header">

                        <h2 class="h2">
                            <a href="<? the_permalink() ?>" rel="bookmark" title="<? the_title_attribute(); ?>">
                                <? the_title(); ?>
                            </a>
                        </h2>

                        <p class="article-meta">
                            <time class="updated" datetime="<?=get_the_time('Y-m-j')?>" pubdate><?=get_the_time(get_option('date_format'))?></time>
                            by <span class="author"><?=get_the_author()?></span>
                            to <?= get_the_category_list(', ')?>
                        </p>

                    </header>

                    <section class="twelvecol entry-content cf">
                        <? the_excerpt(); ?>
                    </section>

                </article>

            <? endwhile; ?>


            <div class="row">
                <? if ( function_exists( 'getPagination' ) ) : ?>
                    <nav class="twelvecol pagination">
                        <?=getPagination()?>
                    </nav>
                <? else : ?>
                    <nav class="twelvecol pagination">
                        <ul>
                            <li class="prev-link">
                                <? next_posts_link( __( 'Older' )) ?>
                            </li>
                            <li class="next-link">
                                <? previous_posts_link( __( 'Newer' )) ?>
                            </li>
                        </ul>
                    </nav>
                <? endif; ?>
            </div>

        <? else : ?>

            <article id="post-not-found" class="row post">
                <header class="twelvecol article-header">
                    <h1>We can't find what you're looking for!</h1>
                </header>
                <section class="twelvecol entry-content">
                    <p>
                        Try double checking the page url and if you're still having
                        problems, head back to the <a href="/">home page</a> or
                        <a href="/contact-us">contact us</a> for more info.
                    </p>
                </section>
            </article>

        <? endif; ?>
    </div>
</div>