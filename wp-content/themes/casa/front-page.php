<?php
/*
Template Name: Homepage
*/

get_header();


$page_home_intro_images = get_field('page_home_intro_images');



if($page_home_intro_images[0]['page_home_intro_images_image']){
    $page_home_intro_images_1_url = lsd_get_thumb($page_home_intro_images[0]['page_home_intro_images_image'], 'large');
}

if($page_home_intro_images[1]['page_home_intro_images_image']){
    $page_home_intro_images_2_url = lsd_get_thumb($page_home_intro_images[1]['page_home_intro_images_image'], 'large');
}

if($page_home_intro_images[2]['page_home_intro_images_image']){
    $page_home_intro_images_3_url = lsd_get_thumb($page_home_intro_images[2]['page_home_intro_images_image'], 'large');
}

$page_home_showreel_text = get_field('page_home_showreel_text');
$page_home_showreel_video = get_field('page_home_showreel_video');
$page_home_showreel_image = get_field('page_home_showreel_image');

if($page_home_showreel_image){
    $page_home_showreel_image_url = lsd_get_thumb($page_home_showreel_image, 'full');
}
$page_home_showreel_url = get_field('page_home_showreel_url');

$page_home_about_text = get_field('page_home_about_text');
$page_home_about_skills = get_field('page_home_about_skills');

$page_home_works_articles = get_field('page_home_works_articles');
?>


<section class="intro-page home">
    <h2 class="title italic serif big parallax-item" data-gravity="-10" data-parent="">
        <div class="masque" data-delay="400">
            <div class="masque-hide has-padding">
                Brand
            </div>
        </div>
    </h2>
    <h2 class="title sans-serif big light text-center world-2">
        <div class="masque parallax-item d-none d-md-inline-block" data-gravity="-45" data-parent="" data-delay="700">
            <?php if(isset($page_home_intro_images_1_url) && $page_home_intro_images_1_url): ?>
            <div class="masque-hide">
                <img src="<?= $page_home_intro_images_1_url; ?>" class="img-1" alt="">
            </div>
            <?php endif; ?>
        </div>
        <div class="masque" data-delay="60">
            <div class="masque-hide">
                experience
            </div>
        </div>
        <div class="masque d-none d-md-inline-block" data-delay="400">
            <?php if(isset($page_home_intro_images_2_url) && $page_home_intro_images_2_url): ?>
            <div class="masque-hide">
                <img src="<?= $page_home_intro_images_2_url; ?>" class="img-2 parallax-item" data-gravity="-40" data-parent="" alt="">
            </div>
            <?php endif; ?>
        </div>
    </h2>
    <h2 class="last">
        <span class="title sans-serif big light">
            <div class="masque" data-delay="420">
                <div class="masque-hide">
                &
                </div>
            </div>
        </span>
        <span class="title italic serif big">
            <div class="masque" data-delay="640">
                <div class="masque-hide">
                    Digital
                </div>
            </div>
        </span>
        <span class="title sans-serif big light">
            <div class="masque" data-delay="530">
                <div class="masque-hide">
                    design.
                </div>
            </div>
        </span>
    </h2>

    <?php if(isset($page_home_intro_images_3_url) && $page_home_intro_images_3_url): ?>
    <div class="masque-hide">
        <img src="<?= $page_home_intro_images_3_url; ?>" class="img-3 parallax-item" data-gravity="-100" data-parent="" alt="">
    </div>
    <?php endif; ?>
</section>



<section class="section-video-full">
    <?php if($page_home_showreel_video): ?>
        <video src="<?= $page_home_showreel_video; ?>" autoplay muted controls="true" loop class="parallax-item" data-gravity="50" data-parent="section-video-full"></video>
    <?php endif; ?>
    <?php if(isset($page_home_showreel_image_url) && $page_home_showreel_image_url): ?>
        <img src="<?= $page_home_showreel_image_url; ?>" class="image-background-mobile parallax-item" data-gravity="50" data-parent="section-video-full" alt="">
    <?php endif; ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-6">
                <p class="uppercase small light">
                    Casanova <br/>
                    & Kuoch
                </p>
            </div>

            <div class="col-sm-6 col-6">
                <p class="uppercase small light">
                    Member Creative pair.
                </p>
            </div>

            <div class="col-sm-3 text-right">
                <div class="light last-text">
                    <?= $page_home_showreel_text; ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 text-center">
                <?php if($page_home_showreel_url): ?>
                <a href="<?= $page_home_showreel_url; ?>" target="_blank" class="button-round white">
                    <div class="round"></div>
                    <div class="text uppercase sans-serif light">
                        Showreel
                    </div>
                </a>
                <?php endif; ?>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="author-letter">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/c-k.svg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>


<section class="skills">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4">

                <?php if($page_home_about_skills): ?>
                <p class="sans-serif small">
                    Skills
                </p>

                <ul class="list-skills">

                    <?php foreach ($page_home_about_skills as $page_home_about_skill):
                        $page_home_about_skill_label = $page_home_about_skill['page_home_about_skills_skill_label'];
                        $page_home_about_skill_image_ID = $page_home_about_skill['page_home_about_skills_skill_image'];

                        if($page_home_about_skill_image_ID){
                            $page_home_about_skill_image_url = lsd_get_thumb($page_home_about_skill_image_ID, 'large');
                        }
                    ?>
                    <li>
                        <div class="image-follow">
                            <div class="sans-serif uppercase small"><?= $page_home_about_skill_label; ?></div>

                            <?php if(isset($page_home_about_skill_image_url) && $page_home_about_skill_image_url): ?>
                            <img src="<?= $page_home_about_skill_image_url; ?>" width="250" class="follow-image" alt="">
                            <?php endif; ?>
                        </div>
                    </li>
                    <?php endforeach; ?>
                </ul>
                <?php endif; ?>
            </div>

            <div class="col-sm-8 text-right">
                <a href="#" class="title big serif has-border uppercase">
                    About
                </a>

                <?php if($page_home_about_text): ?>
                <div class="container-text">
                    <div class="text-about">
                        <div class="sans-serif">
                            <?= $page_home_about_text; ?>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<section class="latest-work">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 col-6">
                <p class="no-margin">Latest <span class="sans-serif italic">work</span></p>
            </div>

            <div class="col-sm-6 col-6 text-right">
                <ul class="nav-date no-margin">
                    <li class="is-active">
                        <a href="" class="serif">
                            2019
                        </a>
                    </li>
                    <li>
                        <a href="" class="serif">
                            2020
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <?php if($page_home_works_articles): ?>
            <div class="row">
                <div class="col-sm-12">
                    <?php
                    foreach ($page_home_works_articles as $page_home_works_article):
                        $post_work_name_1 = get_field('post_work_name_1', $page_home_works_article);
                        $post_work_name_2 = get_field('post_work_name_2', $page_home_works_article);
                        $post_work_name_3 = get_field('post_work_name_3', $page_home_works_article);

                        $post_work_name_agency = get_field('post_work_name_agency', $page_home_works_article);
                        $post_work_year = get_field('post_work_year', $page_home_works_article);
                        $post_work_resume = get_field('post_work_resume', $page_home_works_article);

                        $post_work_thumbnail = get_field('post_work_thumbnail', $page_home_works_article);

                        if($post_work_thumbnail){
                            $post_work_thumbnail_url = lsd_get_thumb($post_work_thumbnail, 'full');
                        }
                        $post_work_background = get_field('post_work_background', $page_home_works_article);
                        if($post_work_background){
                            $post_work_background_url = lsd_get_thumb($post_work_background, 'full');
                        }


                        $post_work_link_url = get_the_permalink($page_home_works_article);

                    ?>
                    <div class="push-project push-project-1">
                        <img src="<?= $post_work_background_url; ?>" class="background-project parallax-item" data-gravity="50" data-parent="push-project-1" alt="">
                        <div class="content-project-info">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h2 class="title italic serif big color-beige"><?= $post_work_name_1; ?></h2>
                                    <h2 class="title sans-serif big light text-center color-beige">
                                        <?= $post_work_name_2; ?>
                                    </h2>
                                    <h2 class="title italic serif big color-beige"><?= $post_work_name_3; ?></h2>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-5">
                                    <img src="<?= $post_work_thumbnail_url; ?>" class="image-shadow" alt="">
                                </div>
                                <div class="col-sm-5 offset-md-1">
                                    <div class="content-project">
                                        <a href="<?= $post_work_link_url; ?>" class="button-round white">
                                            <div class="round"></div>
                                            <div class="text uppercase sans-serif light">
                                                View Case
                                            </div>
                                        </a>

                                        <div class="info-project">
                                            <span class="date sans-serif"><?= $post_work_year; ?></span>
                                            <span class="lieu sans-serif">Agency : <?= $post_work_name_agency; ?></span>
                                            <div class="description sans-serif">
                                                <?= $post_work_resume ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>


        <div class="row">
            <div class="col-sm-12 text-center">
                <div class="more-studies">
                    <div class="image-follow">
                        <a href="<?php echo get_post_type_archive_link('works'); ?>" class="title sans-serif italic medium has-border">
                            See all case studies
                        </a>
                        <div class="follow-image multiples">
                            <img src="https://images.pexels.com/photos/5496586/pexels-photo-5496586.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" width="250" height="350"  alt="">
                            <img src="https://images.pexels.com/photos/4993100/pexels-photo-4993100.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" width="250" height="350" alt="">
                            <img src="https://images.pexels.com/photos/4862663/pexels-photo-4862663.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" width="250" height="350"  alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
get_footer();
