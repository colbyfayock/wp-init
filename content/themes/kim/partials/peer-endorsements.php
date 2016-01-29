<section id="peer-endorsements" class="container">
    <div class="content content-full cf">
        <h2 class="text-center section-title">Peer Endorsements</h2>
        <div class="row">
            
            <? $endorsements = getRandomEndorsements( 3 ); ?>

            <? $i = 0; ?>

            <? foreach( $endorsements as $endorsement ) : ?>

                <? $i++ ?>

                <div class="fourcol text-center <?= $i == 3 ? 'last' : '' ?>">
                    <span class="endorsements-avatar" style="background-image: url('<?= $endorsement['img'] && $endorsement['img'] !== '' ? $endorsement['img'] : get_template_directory_uri() . '/assets/images/avatar.jpg' ?>')"></span>
                    <p><?=$endorsement['quote']?></p>
                    <h4><?=$endorsement['name']?></h4>
                    <h5>
                        <?=$endorsement['occupation']?>
                        <br>
                        <?=$endorsement['location']?>
                    </h5>
                </div>

            <? endforeach; ?>

        </div>
        <div class="endorsements-cta">
            <p class="text-center">
                <a class="button-primary button-small button-skinny" href="http://www.avvo.com/attorneys/19107-pa-richard-kim-4570532/endorsements.html">See What People Are Saying</a>
            </p>
        </div>
    </div>
</section>