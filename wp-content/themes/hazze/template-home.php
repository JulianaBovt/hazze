<?php
/*
Template Name: My main page pattern
*/
get_header();
?>

<!-- Hero Section Begin -->
<section class="hero-section set-bg" data-setbg="<?php echo get_template_directory_uri() ?>/img/hero-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="hs-text">
                    <span><?php the_field('hero_subtitle') ?></span>
                    <h2><?php the_field('hero_title') ?></h2>
                    <p>
                        <?php the_field('hero_description') ?>
                    </p>
                    <a href="<?php echo get_field('hero_button')['url'] ?>" class="primary-btn"><?php echo get_field('hero_button')['title'] ?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- About Us Section Begin -->
<section class="about-us-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="as-pic">
                    <img src="<?php echo get_field('about_image')['url'] ?>" alt="<?php echo get_field('about_image')['alt'] ?>" />
                </div>
            </div>
            <div class="col-lg-6">
                <div class="as-text">
                    <div class="section-title">
                        <span><?php the_field('about_subtitle') ?></span>
                        <h2><?php the_field('about_title') ?></h2>
                    </div>
                    <p class="f-para">
                        <?php the_field('about_description') ?>
                    </p>
                    <p class="f-para">
                        <?php the_field('about_description_copy') ?>
                    </p>
                    <a href="<?php echo get_field('about_button')['url'] ?>" class="primary-btn"><?php echo get_field('about_button')['title'] ?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Us Section End -->

<!-- Services Section Begin -->
<section class="services-section spad">
    <div class="container">
        <div class="row services-custom-row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span><?php the_field('services_subtitle') ?></span>
                    <h2><?php the_field('services_title') ?></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            if (have_rows('services_repeater')):

                while (have_rows('services_repeater')) : the_row(); ?>

                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <img src="<?php the_sub_field('image') ?>" alt="" />
                            <h4><?php the_sub_field('title') ?></h4>
                            <p>
                                <?php the_sub_field('description') ?>
                            </p>
                        </div>
                    </div>

            <?php
                endwhile;

            else :
                echo 'Error, rows not found';
            endif;
            ?>

        </div>
    </div>
</section>
<!-- Services Section End -->

<!-- Portfolio Section Begin -->
<section class="portfolio-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>Our Portfolio</span>
                    <h2>Turn Your Dream Into Reality</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div
                    class="portfolio-item set-bg large-item"
                    data-setbg="<?php echo get_field('ourport_image_1')['url'] ?>">
                    <div class="pi-hover">
                        <a href="#" class="chain-icon"><i class="fa fa-chain"></i></a>
                        <a
                            href="<?php echo get_field('ourport_image_1')['url'] ?>"
                            class="search-icon image-popup"><i class="fa fa-search"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div
                    class="portfolio-item set-bg"
                    data-setbg="<?php echo get_field('ourport_image_2')['sizes']['hazze-custom'] ?>">
                    <div class="pi-hover">
                        <a href="#" class="chain-icon"><i class="fa fa-chain"></i></a>
                        <a
                            href="<?php echo get_field('ourport_image_2')['url'] ?>"
                            class="search-icon image-popup"><i class="fa fa-search"></i></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div
                            class="portfolio-item set-bg"
                            data-setbg="<?php echo get_field('ourport_image_3')['url'] ?>">
                            <div class="pi-hover">
                                <a href="#" class="chain-icon"><i class="fa fa-chain"></i></a>
                                <a
                                    href="<?php echo get_field('ourport_image_3')['url'] ?>"
                                    class="search-icon image-popup"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div
                            class="portfolio-item set-bg"
                            data-setbg="<?php echo get_field('ourport_image_4')['url'] ?>">
                            <div class="pi-hover">
                                <a href="#" class="chain-icon"><i class="fa fa-chain"></i></a>
                                <a
                                    href="<?php echo get_field('ourport_image_4')['url'] ?>"
                                    class="search-icon image-popup"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Portfolio Section End -->

<!-- Counter Section Begin -->
<section class="counter-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="counter-text">
                    <div class="section-title">
                        <span>Number Speaks</span>
                        <h2>We have a lot of <br />experience</h2>
                    </div>
                    <a href="#" class="primary-btn">Read More</a>
                </div>
            </div>
            <div class="col-lg-6">
                <?php
                if (have_rows('numbers_achivments_repeater')):

                    while (have_rows('numbers_achivments_repeater')) : the_row(); ?>
                        <div class="counter-item">
                            <div class="ci-number count"><?php the_sub_field('number') ?>
                            </div>
                            <div class="ci-text">
                                <h4><?php the_sub_field('title') ?>
                                </h4>
                                <p>
                                    <?php the_sub_field('description') ?>

                                </p>
                            </div>
                        </div>
                <?php
                    endwhile;

                else :
                    echo 'Error, rows not found';
                endif;
                ?>
                <!-- <div class="counter-item">
                    <div class="ci-number count">2034</div>
                    <div class="ci-text">
                        <h4>Successful projects</h4>
                        <p>
                            Since its establishment in 2005, Fashion has been focusing on
                            project management & implementation through cooperation.
                        </p>
                    </div>
                </div>
                <div class="counter-item">
                    <div class="ci-number count">1054</div>
                    <div class="ci-text">
                        <h4>Events</h4>
                        <p>
                            Since its establishment in 2005, Fashion has been focusing on
                            project management & implementation through cooperation.
                        </p>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</section>
<!-- Counter Section End -->

<!-- Testimonial Section Begin -->

<!-- 

span color: #fff;
p color: #fff;

-->

<section class="testimonial-section spad">
    <div class="container">
        <div class="row testimonial-slider owl-carousel">
            <?php
            $i = 1;
            if (have_rows('numbers_slider_repeater')):

                while (have_rows('numbers_slider_repeater')) : the_row();
                    $isEven = false;
                    if ($i % 2 === 0) $isEven = true;
            ?>
                    <div class="col-lg-6">
                        <div class="testimonial-item" <?php if ($isEven) echo 'style="background: #e32869"' ?>>
                            <div class="ti-pic">
                                <img src="<?php echo get_sub_field('profile_picture')['sizes']['thumbnail']; ?>" alt="<?php echo get_sub_field('profile_picture')['alt']; ?>">
                            </div>
                            <div class="ti-text">
                                <div class="ti-title">
                                    <h4><?php the_sub_field('name') ?>
                                    </h4>
                                    <span <?php if ($isEven) echo 'style="color: #fff"' ?>><?php the_sub_field('position') ?>
                                    </span>
                                </div>
                                <p <?php if ($isEven) echo 'style="color: #fff"' ?>>
                                    <?php the_sub_field('description') ?>

                                </p>
                            </div>
                        </div>
                    </div>
            <?php
                    $i++;
                endwhile;

            else :
                echo 'Error, rows not found';
            endif;
            ?>
        </div>
    </div>


</section>
<!-- Testimonial Section End -->

<?php echo do_shortcode('[pink-banner]') ?>


<style></style>

<!-- Member Section Begin -->
<section class="member-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span><?php the_field('team_subtitle') ?></span>
                    <h2><?php the_field('team_title') ?></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            function get_card_class($is_colored)
            {
                if ($is_colored) {
                    return 'item_back_color';
                }
                return '';
            }

            $args = array(
                'posts_per_page' => 3,
                'post_type' => 'our-team',
            );

            $query = new WP_Query($args);

            // Цикл
            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();

                    $is_colored = get_field('ourteam_back-color');
                    $card_class = get_card_class($is_colored);
            ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="member-item set-bg <?php echo $card_class; ?>"
                            data-setbg="<?php echo get_the_post_thumbnail_url(); ?>">
                            <div class="mi-text">
                                <?php the_content(); ?>
                                <div class="mt-title">
                                    <h4><?php the_title(); ?></h4>
                                    <span><?php the_field('ourteam_position'); ?></span>
                                </div>
                                <div class="mt-social">
                                    <?php
                                    if (have_rows('ourteam_repeater')):
                                        while (have_rows('ourteam_repeater')) : the_row(); ?>
                                            <a href="<?php the_sub_field('link'); ?>"><i class="fa fa-<?php the_sub_field('social'); ?>"></i></a>
                                    <?php
                                        endwhile;
                                    endif;
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
                }
            }
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>
<!-- Member Section End -->

<!-- Blog Section Begin -->
<div class="blog-section latest-blog spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>Latest Blog</span>
                    <h2>From Our Blog</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php

            $args = array(
                'posts_per_page' => 2,
                'post_type' => 'post',
            );

            $query = new WP_Query($args);

            // Цикл
            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();

            ?>

                    <div class="col-md-6">
                        <div class="blog-item">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div
                                        class="bi-pic set-bg"
                                        data-setbg="<?php echo get_the_post_thumbnail_url(); ?>"></div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="bi-text">
                                        <ul>
                                            <li><i class="fa fa-calendar-o"></i><?php echo get_the_date('F j Y') ?></li>
                                        </ul>
                                        <h4>
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </h4>
                                        <?php the_excerpt() ?>
                                        <div class="bt-author">
                                            <div class="ba-pic">
                                                <?php global $post;
                                                $url = get_avatar_url($post, "size=100&default=monsterid");
                                                $img = '<img alt="" src="' . $url . '">';
                                                echo $img; ?>
                                            </div>
                                            <div class="ba-text">
                                                <h5><?php the_author() ?></h5>
                                                <span><?php echo wp_roles()->roles['administrator']['name']; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

            <?php }
            }
            wp_reset_postdata();
            ?>
            <!-- <div class="col-md-6">
                <div class="blog-item">
                    <div class="row">
                        <div class="col-lg-6">
                            <div
                                class="bi-pic set-bg"
                                data-setbg="<?php echo get_template_directory_uri() ?>/img/blog/blog-1.jpg"></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="bi-text">
                                <ul>
                                    <li><i class="fa fa-calendar-o"></i> August 9, 2019</li>
                                    <li><i class="fa fa-commenting-o"></i> 0</li>
                                </ul>
                                <h4>
                                    <a href="#">Every Single Way You Can Wear Pastel Makeup This
                                        Spring</a>
                                </h4>
                                <p>Never ever think of giving up. Winners never quit and</p>
                                <div class="bt-author">
                                    <div class="ba-pic">
                                        <img src="<?php echo get_template_directory_uri() ?>/img/blog/author-1.jpg" alt="" />
                                    </div>
                                    <div class="ba-text">
                                        <h5>Jeff Rodriguez</h5>
                                        <span>Designer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="blog-item">
                    <div class="row">
                        <div class="col-lg-6">
                            <div
                                class="bi-pic set-bg"
                                data-setbg="<?php echo get_template_directory_uri() ?>/img/blog/blog-2.jpg"></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="bi-text">
                                <ul>
                                    <li><i class="fa fa-calendar-o"></i> August 9, 2019</li>
                                    <li><i class="fa fa-commenting-o"></i> 0</li>
                                </ul>
                                <h4>
                                    <a href="#">Everything Coming to Netflix Canada in May 2019</a>
                                </h4>
                                <p>Never ever think of giving up. Winners never quit and</p>
                                <div class="bt-author">
                                    <div class="ba-pic">
                                        <img src="<?php echo get_template_directory_uri() ?>/img/blog/author-1.jpg" alt="" />
                                    </div>
                                    <div class="ba-text">
                                        <h5>Aaron Russell</h5>
                                        <span>Content</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</div>
<!-- Blog Section End -->

<?php
get_footer();
?>