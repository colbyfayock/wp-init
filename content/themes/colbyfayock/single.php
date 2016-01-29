<? if (have_posts()) : ?>
    <? while (have_posts()) : the_post(); ?>

    <?
        $mediaImages = get_post_meta($post->ID, 'media-images', true);
        $mediaImages = json_decode($mediaImages, true);

        $mediaLinks = get_post_meta($post->ID, 'media-links', true);
        $mediaLinks = json_decode($mediaLinks, true);
    ?>

    <article id="post-<? the_ID(); ?>" <? post_class() ?>>

        <aside>
            <a class="thumb" href="#">
                <? if (has_post_thumbnail()): ?>
                    <? the_post_thumbnail(); ?>
                <? elseif (!empty($mediaImages)): ?>
                    <i class="icon-picture"></i>
                <? elseif (!empty($mediaLinks)): ?>
                    <i class="icon-link"></i>
                <? endif; ?>
            </a>
            <time>
                <? the_time('M j') ?><br>
                <? the_time('Y') ?>
            </time>
        </aside>

        <header>
            <? if(is_front_page()): ?>
            <h3><a href="<? the_permalink() ?>" rel="bookmark"><? the_title(); ?></a></h3>
            <? else: ?>
            <h1 class="h3"><a href="<? the_permalink() ?>" rel="bookmark"><? the_title(); ?></a></h1>
            <? endif; ?>
            <span class="cat"><? the_category(', ') ?><? edit_post_link('Edit', ' - '); ?>
        </header>
        <? the_content(); ?>

        <? if(!empty($mediaImages) || !empty($mediaLinks)): ?>
            <section class="dresser">
                <? if(!empty($mediaLinks)): ?>
                    <? if(is_array($mediaLinks)): ?>
                        <? foreach($mediaLinks as $title => $link): ?>
                            <a href="<?=$link?>"><i class="icon-link"></i><span><?=$title?><span></a>
                        <? endforeach; ?>
                    <? else: ?>
                        Incorrect data type
                    <? endif; ?>
                <? endif; ?>
                <? if(!empty($mediaImages)): ?>
                <div class="drawer drawer-single">
                    <? if(is_array($mediaImages)): ?>
                        <? foreach($mediaImages as $alt => $image): ?>
                            <a class="img magnific" href="<?=$image;?>">
                            	<img src="<?=$image;?>" alt="<?=$alt?>" />
                            </a>
                        <? endforeach; ?>
                    <? else: ?>
                        Incorrect data type
                    <? endif; ?>
                </div>
                <? endif; ?>
            </section>
        <? endif; ?>
    </article>

    <? endwhile; ?>

    <nav class="clear">
        <div class="older"><? next_posts_link('Older') ?></div>
        <div class="newer"><? previous_posts_link('Newer') ?></div>
    </nav>

<? else : ?>

    <h2>Not Found</h2>
    <p>Sorry, but you are looking for something that isn't here.</p>
    <? get_search_form(); ?>

<? endif; ?>