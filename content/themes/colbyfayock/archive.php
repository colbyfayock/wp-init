<h1 class="h2">Showing <em><?php single_cat_title(); ?></em></h1>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

    <?php
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
            <h2 class="h3"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
            <span class="cat"><?php the_category(', ') ?><?php edit_post_link('Edit', ' - '); ?>
        </header>
        <?php the_content(); ?>
        <?php
            $mediaImages = get_post_meta($post->ID, 'media-images', true);
            $mediaImages = json_decode($mediaImages, true);

            $mediaLinks = get_post_meta($post->ID, 'media-links', true);
            $mediaLinks = json_decode($mediaLinks, true);
        ?>
        <?php if(!empty($mediaImages) || !empty($mediaLinks)): ?>
            <section class="dresser">
                <?php if(!empty($mediaLinks)): ?>
                    <?php if(is_array($mediaLinks)): ?>
                        <?php foreach($mediaLinks as $title => $link): ?>
                            <a href="<?=$link?>"><i class="icon-link"></i><span><?=$title?><span></a>
                        <?php endforeach; ?>
                    <?php else: ?>
                        Incorrect data type
                    <?php endif; ?>
                <?php endif; ?>
                <?php if(!empty($mediaImages)): ?>
                <a class="handle" href="#"><i class="icon-picture"></i><span>View Image<span></a>
                <div class="drawer">
                    <?php if(is_array($mediaImages)): ?>
                        <?php foreach($mediaImages as $alt => $image): ?>
                            <a class="img magnific" href="<?=$image;?>">
                            	<img src="<?=$image;?>" alt="<?=$alt?>" />
                            </a>
                        <?php endforeach; ?>
                    <?php else: ?>
                        Incorrect data type
                    <?php endif; ?>
                </div>
                <?php endif; ?>
            </section>
        <?php endif; ?>
    </article>

    <?php endwhile; ?>

    <nav class="posts-nav clear">
        <? next_posts_link('Older') ?>
        <? previous_posts_link('Newer') ?>
    </nav>

<?php else : ?>

    <h2>Not Found</h2>
    <p>Sorry, but you are looking for something that isn't here.</p>

<?php endif; ?>