<? if (have_posts()) : ?>
    <? while (have_posts()) : the_post(); ?>

    <?php
        $mediaImages = get_post_meta($post->ID, 'media-images', true);
        $mediaImages = json_decode($mediaImages, true);

        $mediaLinks = get_post_meta($post->ID, 'media-links', true);
        $mediaLinks = json_decode($mediaLinks, true);
    ?>

    <article id="post-<? the_ID(); ?>" <? post_class() ?>>

        <? if(is_front_page()): ?>
        <h3><a href="<? the_permalink() ?>" rel="bookmark"><? the_title(); ?></a></h3>
        <? else: ?>
        <h1 class="h3"><a href="<? the_permalink() ?>" rel="bookmark"><? the_title(); ?></a></h1>
        <? endif; ?>

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
                <span><? the_time('M j') ?></span>
                <span><? the_time('Y') ?></span>
            </time>
        </aside>

        <span class="cat"><?php the_category(', ') ?><?php edit_post_link('Edit', ' - '); ?>

        <? the_content(); ?>

        <? if(!empty($mediaImages) || !empty($mediaLinks)): ?>
            <footer class="dresser">
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
                <a class="handle" href="#"><i class="icon-picture"></i><span>View Image<span></a>
                <div class="drawer">
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
            </footer>
        <? endif; ?>
    </article>

    <? endwhile; ?>

    <nav class="posts-nav clear">
        <? next_posts_link('Older') ?>
        <? previous_posts_link('Newer') ?>
    </nav>

<? else : ?>

    <h2>Not Found</h2>
    <p>Sorry, but you are looking for something that isn't here.</p>
    <? get_search_form(); ?>

<? endif; ?>