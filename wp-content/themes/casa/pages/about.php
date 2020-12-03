<?php
/*
Template Name: About
*/

get_header();


$page_about_intro_images = get_field('page_about_intro_images');



if($page_about_intro_images[0]['page_about_intro_images_image']){
    $page_about_intro_images_1_url = lsd_get_thumb($page_about_intro_images[0]['page_about_intro_images_image'], 'large');
}

if($page_about_intro_images[1]['page_about_intro_images_image']){
    $page_about_intro_images_2_url = lsd_get_thumb($page_about_intro_images[1]['page_about_intro_images_image'], 'large');
}

if($page_about_intro_images[2]['page_about_intro_images_image']){
    $page_about_intro_images_3_url = lsd_get_thumb($page_about_intro_images[2]['page_about_intro_images_image'], 'large');
}

$page_about_about_text = get_field('page_about_about_text');
$page_about_about_files = get_field('page_about_about_files');

$page_about_agencies = get_field('page_about_agencies');

$page_about_more_text = get_field('page_about_more_text');
$page_about_more_image = get_field('page_about_more_image');

if($page_about_more_image){
    $page_about_more_image_url = lsd_get_thumb($page_about_more_image, 'full');
}

?>

<section class="intro-page about">
    <h2 class="title italic serif big">
        Ginger

        <?php if(isset($page_about_intro_images_1_url) && $page_about_intro_images_1_url): ?>
        <img src="<?= $page_about_intro_images_1_url; ?>" class="img-1 parallax-item" data-gravity="-50" data-parent="intro-page" alt="">
        <?php endif; ?>
    </h2>
    <h2 class="title sans-serif big light text-center world-2">
        Art director
    </h2>
    <h2 class="title serif big light italic text-center end">
        <?php if(isset($page_about_intro_images_2_url) && $page_about_intro_images_2_url): ?>
        <img src="<?= $page_about_intro_images_2_url ?>" class="img-2 parallax-item" data-gravity="-30" alt="">
        <?php endif; ?>
        for life
        <?php if(isset($page_about_intro_images_3_url) && $page_about_intro_images_3_url): ?>
        <img src="<?= $page_about_intro_images_3_url; ?>" class="img-3 parallax-item" data-gravity="-50" alt="">
        <?php endif; ?>
    </h2>
</section>


<section class="about-me">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-5">
                <p class="uppercase small light">
                    About me
                </p>
            </div>
            <div class="col-sm-7">
                <h2 class="title serif medium">
                    In-house
                </h2>
                <h2 class="title serif medium">
                    art director

                    <span class="title serif medium italic">&</span>
                </h2>
                <h2 class="title sans-serif medium">
                    digital designer
                </h2>

                <div class="row info-about-me">
                    <div class="col-sm-6">
                        <?= $page_about_about_text; ?>
                    </div>

                    <?php if($page_about_about_files): ?>
                    <div class="col-sm-5  offset-sm-1">
                        <ul>
                            <?php foreach ($page_about_about_files as $page_about_about_file):
                                $page_about_about_file_label = $page_about_about_file['page_about_about_files_file_name'];
                                $page_about_about_file_document = $page_about_about_file['page_about_about_files_file_document'];

                                if($page_about_about_file_label && $page_about_about_file_document):
                            ?>

                                <li>
                                    <a href="<?= $page_about_about_file_document; ?>" target="_blank" class="sans-serif uppercase small">
                                        <?= $page_about_about_file_label; ?>
                                        <i class="link-externe">
                                            <?= lsd_get_template_part('icons', 'external', 'link'); ?>
                                        </i>
                                    </a>
                                </li>

                            <?php endif; endforeach; ?>
                        </ul>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="work-with-me">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-5">
                <p class="uppercase small light">
                    Agency
                </p>
            </div>
            <div class="col-sm-7">
                <h2 class="title serif medium">
                    They work
                </h2>
                <h2 class="title sans-serif medium">
                    with me
                </h2>
                <?php if($page_about_agencies): ?>
                <div class="row info-about-me">

                    <?php foreach ($page_about_agencies as $page_about_agency):
                        $page_about_agencies_agency_logo_image = $page_about_agency['page_about_agencies_agency_logo'];

                        if($page_about_agencies_agency_logo_image){
                            $page_about_agencies_agency_logo_image_url = lsd_get_thumb($page_about_agencies_agency_logo_image, 'full');
                        }

                        if(isset($page_about_agencies_agency_logo_image_url)):
                    ?>
                        <div class="col-sm-5">
                            <img src="<?= $page_about_agencies_agency_logo_image_url; ?>" class="logo-work-with-me" alt="">
                        </div>
                    <?php endif; endforeach; ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<section class="one-more-thing">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="title light medium serif title-border">
                    One more <span class="title sans-serif medium">thing...</span>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-3 col-4">
                <p class="uppercase small light">
                    Casanova <br/>
                    & Kuoch
                </p>
            </div>

            <div class="col-sm-3 col-4">
                <p class="uppercase small light">
                    Creative pair.
                </p>
            </div>

            <div class="col-sm-3 offset-sm-3 col-4">
                <div class="logo-ck-about">
                    <?php lsd_get_template_part('icons','logo', 'ck'); ?>
                </div>
            </div>
        </div>

        <div class="row align-items-end">
            <div class="col-sm-4 offset-sm-2">
                <a href="" class="uppercase">
                    View Behance
                    <i class="link-externe">
                        <?= lsd_get_template_part('icons', 'external', 'link'); ?>
                    </i>
                </a>
            </div>
            <div class="col-sm-3 offset-sm-3">
                <?= $page_about_more_text; ?>
            </div>
        </div>
        <?php if(isset($page_about_more_image_url) && $page_about_more_image_url): ?>
        <div class="row strate-image-about">
            <div class="col-sm-10 offset-sm-2">
                <div class="container-image-parallax image-one-more-thing">
                    <img src="<?=$page_about_more_image_url; ?>" class="parallax-item" data-gravity="50" data-parent="strate-image-about">
                </div>
            </div>
        </div>
        <?php endif; ?>

        <div class="row">
            <div class="col-sm-10 offset-sm-2">
                <h2 class="title sans-serif small-medium light">
                    Available for freelance work<br/>
                    <a href="" class="has-border title sans-serif light italic small-medium">Send me an email</a>
                </h2>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
