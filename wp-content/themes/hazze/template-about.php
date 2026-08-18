<?php
/*
Template Name: About us pattern
*/
get_header();
?>

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="breadcrumb-option">
                    <?php if (function_exists('kama_breadcrumbs')) kama_breadcrumbs(''); ?>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 text-right">
                <div class="breadcrumb-text">
                    <h3><?php the_title(); ?></h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- About Us Section Begin -->
<section class="about-us-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="as-pic">
                    <img src="<?php echo get_template_directory_uri() ?>/img/about-us.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="as-text ap-text">
                    <div class="section-title">
                        <span><?php the_field('story_subtitle') ?></span>
                        <h2><?php the_field('story_title') ?></h2>
                    </div>
                    <p class="f-para"><?php the_field('story_description') ?></p>
                    <p class="f-para"><?php the_field('story_description2') ?></p>
                    <div class="about-counter">
                        <div class="about-counter">
                            <?php if (have_rows('story_counter')): ?>
                                <?php while (have_rows('story_counter')) : the_row(); ?>
                                    <div class="ac-item">
                                        <h2 class="ab-count"><?php the_sub_field('count'); ?></h2>
                                        <p><?php the_sub_field('name'); ?></p>
                                    </div>
                            <?php
                                endwhile;

                            else :
                                echo 'Error, rows not found';
                            endif; ?>

                        </div>
                        <!-- <div class="ac-item">
                            <h2 class="ab-count">8384</h2>
                            <p>Member</p>
                        </div>
                        <div class="ac-item">
                            <h2 class="ab-count">6880</h2>
                            <p>Partner</p>
                        </div>
                        <div class="ac-item">
                            <h2 class="ab-count">1546</h2>
                            <p>Branch</p>
                        </div>
                        <div class="ac-item">
                            <h2 class="ab-count">4677</h2>
                            <p>Designs</p>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Us Section End -->

<!-- Member Section Begin -->
<section class="member-section spad ap-member">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span><?php the_field('about_subtitle'); ?></span>
                    <h2><?php echo get_field('about_title') ?: 'Default Title'; ?></h2>
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
                'posts_per_page' => get_field('about_members-amount'),
                'post_type' => 'our-team',
            );

            $query = new WP_Query($args);

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

<!-- Call To Action Section Begin -->
<?php echo do_shortcode('[pink-banner]'); ?>
<!-- Call To Action Section End -->

<?php get_footer(); ?>