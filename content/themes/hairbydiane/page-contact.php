<? if (have_posts()) : ?>
    <? while (have_posts()) : the_post(); ?>

        <article id="post-<? the_ID(); ?>" class="row" role="article" itemscope itemtype="http://schema.org/BlogPosting">

            <header class="twelvecol article-header">

                <h1 class="page-title" itemprop="headline">
                    <? the_title(); ?>
                </h1>

            </header>

            <section class="sixcol entry-content cf" itemprop="articleBody">
                <? the_content(); ?>
            </section>

            <div class="sixcol last">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d24069.177836028288!2d-76.222986!3d41.054843!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c59daafe5b5b03%3A0xb5959c6ec30efe15!2s423+3rd+St%2C+Nescopeck%2C+PA+18635!5e0!3m2!1sen!2sus!4v1411841756868" width="600" height="450" frameborder="0" style="border:0"></iframe>
            </div>

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