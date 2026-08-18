<?php
/*
Template Name: Blog pattern
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

<!-- Blog Section Begin -->
<div class="blog-section spad">
    <div class="container">
        <div class="row">
            <?php
            $args = array(
                'posts_per_page' => 6,
                'post_type' => 'post',
            );

            $query = new WP_Query($args);
            $count = 1;

            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
            ?>

                    <?php if ($count % 3 !== 0) { ?>
                        <div class="col-lg-6">
                            <div class="blog-item">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="bi-pic set-bg" data-setbg="<?php echo get_the_post_thumbnail_url(); ?>"></div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="bi-text">
                                            <ul>
                                                <li><i class="fa fa-calendar-o"></i> <?php echo get_the_date('F j, Y'); ?></li>
                                            </ul>
                                            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                            <p><?php echo wp_trim_words(get_the_excerpt(), 15); ?></p>
                                            <div class="bt-author">
                                                <div class="ba-pic">
                                                    <?php echo get_avatar(get_the_author_meta('ID'), 50); ?>
                                                </div>
                                                <div class="ba-text">
                                                    <h5><?php the_author(); ?></h5>
                                                    <span><?php the_author_meta('role'); ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } else { ?>
                        <div class="col-lg-6">
                            <div class="blog-item solid-bg">
                                <div class="bi-text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> <?php echo get_the_date('F j, Y'); ?></li>
                                    </ul>
                                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                    <p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                                    <div class="bt-author">
                                        <div class="ba-pic">
                                            <?php echo get_avatar(get_the_author_meta('ID'), 50); ?>
                                        </div>
                                        <div class="ba-text">
                                            <h5><?php the_author(); ?></h5>
                                            <span><?php the_author_meta('role'); ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

            <?php
                    $count++;
                }
            }
            wp_reset_postdata();
            ?>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="blog-btn">
                    <a href="#" class="primary-btn">Work With Us</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog Section End -->

<?php get_footer(); ?>