<? if (have_posts()) : ?>
    <? while (have_posts()) : the_post(); ?>

        <article id="post-<? the_ID(); ?>" class="row" role="article" itemscope itemtype="http://schema.org/BlogPosting">

            <section class="twelvecol entry-content cf" itemprop="articleBody">
                <? the_content(); ?>
            </section>

        </article>

        <div class="row">

            <div class="fourcol home-recentposts">

                <h3>Recent blog posts!</h3>

                <ul>

                    <?
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 3,
                        );
                    ?>

                    <? $the_query = new WP_Query( $args ) ?>

                    <? if ( $the_query->have_posts() ) : ?>
                        
                        <? while ( $the_query->have_posts() ) : ?>

                            <? $the_query->the_post() ?>
                            <li>
                                <h4>
                                    <a href="<? the_permalink() ?>">
                                        <? the_title(); ?>
                                    </a>
                                </h4>
                            </li>

                        <? endwhile; ?>
                    <? else : ?>

                        <li>
                            <h4>No recent posts!</h4>
                        </li>

                    <? endif; ?>

                    <? wp_reset_postdata() ?>

                </ul>

                <p class="home-more">
                    <a href="#">View All</a>
                </p>

            </div>

            <div class="fourcol">

                <h3>About Me</h3>

                <p>Over at the About Me page, you can find more information about, well, me! Whether you're an old friend or a new customer, there's always something new to learn. See what's going on by clicking the link below or check out my blog!</p>

                <p class="home-more">
                    <a href="#">Read More</a>
                </p>

            </div>

            <div class="fourcol last">

                <h3>Get in touch</h3>

                <p>Have a question or need some more information about a particular topic? Or maybe you just want to say hello! Head over to the contact page by clicking the link below and send me a message. I will get back to you as soon as I can with the requested information.</p>

                <p class="home-more">
                    <a href="#">Contact Me</a>
                </p>

            </div>

        </div>

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