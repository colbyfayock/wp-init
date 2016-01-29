<?
/**
 * Template Name: Investigations
 *
 * @package WordPress
 * @subpackage The Kim Law Firm
 * @since The Kim Law Firm 1.0
 */

?>

 <? if (have_posts()) : ?>
    <? while (have_posts()) : the_post(); ?>

        <? $parent = get_post($post->post_parent); ?>

        <div class="row">

            <? if ( is_page() && !empty( $post->post_parent ) ) : ?>

                <h2 class="page-title-parent twelvecol"><?= get_the_title( $post->post_parent ) ?></h2>

            <? endif; ?>

            <article id="post-<? the_ID(); ?>" class="eightcol" role="article" itemscope itemtype="http://schema.org/BlogPosting">

                <header class="twelvecol article-header">

                    <h1 class="page-title" itemprop="headline">
                        <? the_title(); ?>
                    </h1>

                </header>

                <section class="twelvecol entry-content cf" itemprop="articleBody">
                    <? the_content(); ?>
                </section>

            </article>

            <aside class="fourcol last">
               <? dynamic_sidebar( 'sidebar-press' ); ?>
            </aside>
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