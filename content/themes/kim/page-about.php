<? if (have_posts()) : ?>
    <? while (have_posts()) : the_post(); ?>

        <header class="twelvecol article-header">

            <h1 class="page-title" itemprop="headline">
                <? the_title(); ?>
            </h1>

        </header>

        <? if ( !empty( the_content() ) ) : ?>
            
            <article class="row" role="article" itemscope itemtype="http://schema.org/BlogPosting">

                <? the_content() ?>

            </article>
            
            <hr style="margin: 4em auto;">

        <? endif; ?>

        <article class="row" role="article" itemscope itemtype="http://schema.org/BlogPosting">

            <? $aboutImgRich = get_post_meta($post->ID, 'about-image-rich', true); ?>
            <? $aboutCopyRich = get_post_meta($post->ID, 'about-copy-rich', true); ?>

            <section class="ninecol entry-content cf" itemprop="articleBody">
                
                <h2 class="page-title-parent">Richard H. Kim</h2>
                
                <?=$aboutCopyRich?>

                <div style="margin-top: 3em;">
                    <span class="display-ib push-right">
                        <iframe src="//www.distinguishedcounsel.org/badges/richard-kim/16348/" width="90" height="90" frameborder="0" scrolling="no"></iframe>
                    </span>
                    <span class="display-ib push-right">
                        <a href="http://www.avvo.com/attorneys/19107-pa-richard-kim-4570532.html">
                            <img style="width:100px!important;height:88px!important;" width="100" height="88" src="http://thekimlawfirmllc.com/wp-content/themes/kim/assets/images/avvo.png">
                        </a>
                    </span>
                    <span class="display-ib" style="vertical-align: top;">
                        <!-- begin super lawyers badge -->
                        <div id="super_lawyers_badge" style="margin:0; padding:0; line-height:1; font-size:1em; font:100 0.8em/1em 'Arial',sans-serif; position:relative; outline:none; border: none;">
                        <div id="sl_badge_container_small" style="height:90px; width:120px; background-image:url('http://i.superlawyers.com/shared/badge/lawyer/basic/small_name_white-orange.png'); text-align:center; outline:none; border: none;">
                        <a href="http://www.superlawyers.com/redir?r=http://www.superlawyers.com&amp;c=basic_small_white-orange_badge&amp;i=home_page" title="Visit the official website of Super Lawyers" alt="Visit the official website of Super Lawyers" style="height:20px;; width:120px; display:block; text-decoration:none; margin:0; padding:0; line-height:1; font-size:100%; outline:none; border:none;">&#160;</a>
                        <a href="http://www.superlawyers.com/redir?r=http://www.superlawyers.com/pennsylvania/lawyer/Richard-H-Kim/e5464d8e-84ea-4e7c-9365-168cd55354aa.html&amp;c=basic_smallwhite-orange_badge&amp;i=e5464d8e-84ea-4e7c-9365-168cd55354aa" title="View the profile of Pennsylvania Business Litigation Attorney Richard H. Kim" style="height:45px; width:120px; display:block; text-decoration:none; margin:0; padding:36px 0 0 0 ; outline:none; border:none; text-decoration:none; font-size:14px; line-height:1; color:rgb(255,145,0);">Richard H. Kim</a>
                        </div></div><div style="display:none;"><img src="http://www.superlawyers.com/services/badge/beacon/e5464d8e-84ea-4e7c-9365-168cd55354aa/l/10.gif" width="1" height="1" border="0" /></div>
                        <!-- end super lawyers badge -->
                    </span> 
                </div>

            </section>

            <aside class="threecol last">
                <div class="wp-caption">
                    <img class="wp-image-86 size-medium" src="<?=$aboutImgRich?>" alt="Richard H. Kim Photo">
                    <h4 class="wp-caption-text text-left flat-bottom push-top">
                        Richard H. Kim
                    </h4>
                    <p class="wp-caption-text text-left">
                        855-996-6342<br>
                        <a href="mailto:rkim@thekimlawfirmllc.com">rkim@thekimlawfirmllc.com</a>
                    </p>
                </div>
                <div>
                </div>
            </aside>

        </article>

        <hr style="margin: 4em auto;">

        <article class="row" role="article" itemscope itemtype="http://schema.org/BlogPosting">

            <? $aboutImgLisa = get_post_meta($post->ID, 'about-image-lisa', true); ?>
            <? $aboutCopyLisa = get_post_meta($post->ID, 'about-copy-lisa', true); ?>

            <section class="ninecol entry-content cf" itemprop="articleBody">
                
                <h2 class="page-title-parent">Lisa Buckalew</h2>
                
                <?=$aboutCopyLisa?>

            </section>

            <aside class="threecol last">
                <div class="wp-caption">
                    <img class="wp-image-86 size-medium" src="<?=$aboutImgLisa?>" alt="Richard H. Kim Photo">
                    <h4 class="wp-caption-text text-left flat-bottom push-top">
                        Lisa Buckalew
                    </h4>
                    <p class="wp-caption-text text-left">
                        855-996-6342<br>
                        <a href="mailto:lbuckalew@thekimlawfirmllc.com">lbuckalew@thekimlawfirmllc.com</a>
                    </p>
                </div>
            </aside>

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