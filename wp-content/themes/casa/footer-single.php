<?php
    $prev_post = get_previous_post();
    $prev_post_ID = $prev_post->ID;
    $post_work_background = get_field('post_work_background', $prev_post_ID);

    if($post_work_background){
        $post_work_background_url = lsd_get_thumb($post_work_background, 'full');
    }

    $post_work_name_1 = get_field('post_work_name_1', $prev_post_ID);
    $post_work_name_2 = get_field('post_work_name_2', $prev_post_ID);
    $post_work_name_3 = get_field('post_work_name_3', $prev_post_ID);
?>

<footer class="single single-footer">
    <img src="<?= $post_work_background_url; ?>" alt="" class="image-footer parallax-item" data-gravity="50" data-parent="single-footer">
    <div class="paginate">
        <div class="container-fluid">
            <div class="row">
                <div class="col-4">
                    <p class="small light label">
                        Next case
                    </p>
                </div>
                <div class="col-8 text-right">
                    <h3 class="title medium serif italic">
                        <?= $post_work_name_1 ?>
                    </h3>
                    <h3 class="title medium sans-serif light">
                        <?= $post_work_name_2 . ' ' . $post_work_name_3; ?>
                    </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-10 text-center">
                    <a href="<?= get_the_permalink($prev_post_ID); ?>" class="button-round white">
                        <div class="round"></div>
                        <div class="text uppercase sans-serif light">
                            View Case
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid container-footer-bottom">
        <div class="row">
            <div class="col-sm-3">
                <ul class="nav-footer">
                    <li>
                        <a class="sans-serif uppercase small" href="">Twitter</a>
                    </li>
                    <li>
                        <a class="sans-serif uppercase small" href="">Behance</a>
                    </li>
                    <li>
                        <a class="sans-serif uppercase small" href="">Dribbble</a>
                    </li>
                    <li>
                        <a class="sans-serif uppercase small" href="">Instagram</a>
                    </li>
                    <li>
                        <a class="sans-serif uppercase small" href="">Linkedin</a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-6">
                <p class="sans-serif uppercase small">
                    Available for freelance work<br/>
                    Send me an email
                </p>
            </div>
            <div class="col-sm-3">
                <p class="sans-serif">
                Independent art director
                & digital designer specialized in Interaction Design, Mobile application
                & Brand strategy
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-3">
                <p class="sans-serif uppercase small align-bottom-absolute">code by <a href="https://orizon.paris">Orizon</a></p>
            </div>
            <div class="col-sm-3">
                <a href="" class="sans-serif uppercase small align-bottom-absolute back-to-top">Back to top</a>
            </div>
            <div class="col-sm-6 text-right">
                <div class="container-year">
                    <div class="logo-year">
                        <?php lsd_get_template_part('icons','footer', 'logo'); ?>
                    </div>
                    <div class="title serif big">
                        2020
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="loader-container">
    <div class="text-loader sans-serif uppercase small">
        i got 99 problems<br/>
        but a portfolio ain't one
    </div>

    <div class="percent-number serif italic" id="percent-load">
        0
    </div>

    <div class="masque" id="masque"></div>
</div>

        <?php wp_footer(); ?>

    </body>
</html>
