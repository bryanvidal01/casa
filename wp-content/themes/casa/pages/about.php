<?php
/*
Template Name: About
*/

get_header();
?>

<section class="intro-page about">
    <h2 class="title italic serif big">
        Ginger
        <img src="https://images.pexels.com/photos/5277082/pexels-photo-5277082.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img-1 parallax-item" data-gravity="450" alt="">
    </h2>
    <h2 class="title sans-serif big light text-center world-2">
        Art director
    </h2>
    <h2 class="title serif big light italic text-center end">
        <img src="https://images.pexels.com/photos/5828718/pexels-photo-5828718.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="img-2 parallax-item" data-gravity="150" alt="">
        for life
        <img src="https://images.pexels.com/photos/5821470/pexels-photo-5821470.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="img-3 parallax-item" data-gravity="100" alt="">
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
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                    <div class="col-sm-5  offset-sm-1">
                        <ul>
                            <li>
                                <a href="" class="sans-serif uppercase small">
                                    Curriculum vitae
                                    <i class="link-externe">
                                        <?= lsd_get_template_part('icons', 'external', 'link'); ?>
                                    </i>
                                </a>
                            </li>
                            <li>
                                <a href="" class="sans-serif uppercase small">
                                    Book 2020
                                    <i class="link-externe">
                                        <?= lsd_get_template_part('icons', 'external', 'link'); ?>
                                    </i>
                                </a>
                            </li>
                            <li>
                                <a href="" class="sans-serif uppercase small">
                                    Mobile 2020
                                    <i class="link-externe">
                                        <?= lsd_get_template_part('icons', 'external', 'link'); ?>
                                    </i>
                                </a>
                            </li>
                        </ul>
                    </div>
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

                <div class="row info-about-me">
                    <div class="col-sm-5">
                        <img src="http://fakeimg.pl/400x200/" class="logo-work-with-me" alt="">
                    </div>
                    <div class="col-sm-5">
                        <img src="http://fakeimg.pl/400x200/" class="logo-work-with-me" alt="">
                    </div>
                    <div class="col-sm-5">
                        <img src="http://fakeimg.pl/400x200/" class="logo-work-with-me" alt="">
                    </div>
                    <div class="col-sm-5">
                        <img src="http://fakeimg.pl/400x200/" class="logo-work-with-me" alt="">
                    </div>
                    <div class="col-sm-5">
                        <img src="http://fakeimg.pl/400x200/" class="logo-work-with-me" alt="">
                    </div>
                    <div class="col-sm-5">
                        <img src="http://fakeimg.pl/400x200/" class="logo-work-with-me" alt="">
                    </div>
                    <div class="col-sm-5">
                        <img src="http://fakeimg.pl/400x200/" class="logo-work-with-me" alt="">
                    </div>
                    <div class="col-sm-5">
                        <img src="http://fakeimg.pl/400x200/" class="logo-work-with-me" alt="">
                    </div>
                </div>
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
                <p class="no-margin">
                    Two creative designer who create original & useful interface for digital brand with love.
                </p>
            </div>
        </div>

        <div class="row strate-image-about">
            <div class="col-sm-10 offset-sm-2">
                <div class="container-image-parallax image-one-more-thing">
                    <img src="https://images.pexels.com/photos/3906084/pexels-photo-3906084.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="parallax-item" data-gravity="50" data-parent="strate-image-about">
                </div>
            </div>
        </div>

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
