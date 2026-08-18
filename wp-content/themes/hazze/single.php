<?php
get_header();
?>

<!-- Blog Details Hero Section Begin -->
<section class="blog-hero-section set-bg spad" data-setbg="<?php echo get_field('single_background')['url'] ?>">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 text-center">
                <div class="bh-text">
                    <?php
                    $categories = get_the_category();
                    if ($categories) {
                        foreach ($categories as $category) {
                            echo '<span>' . $category->name . '</span> ';
                        }
                    }
                    ?>
                    <h2><?php the_title(); ?></h2>
                    <ul>
                        <?php
                            global $post;
                            $author_id = get_post_field('post_author', $post->ID);
                            $author_name = get_the_author_meta('display_name', $author_id);
                            ?>
                            <li>By <?php echo $author_name; ?></li>
                            <li><?php echo get_the_date(); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Details Hero Section End -->

<!-- Blog Details Section Begin -->
<section class="blog-details-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 m-auto">
                <div class="bd-text">
                    <div class="custom-content">
                        <?php the_content(); ?>
                    </div>

                    <div class="tag-share">
                        <div class="tags">
                            <div class="tags">
                                <?php
                                $tags = get_the_tags();
                                if ($tags) {
                                    foreach ($tags as $tag) {
                                        echo '<a href="' . get_tag_link($tag->term_id) . '" class="tag-link">' . $tag->name . '</a> ';
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <div class="social-share">
                            <span>Share:</span>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>

                    <?php
                    while (have_posts()) :
                        the_post();
                    ?>
                        <div class="blog-author">
                            <?php echo get_avatar(get_the_author_meta('ID'), 50); ?>
                            <h5><?php the_author() ?></h5>
                            <p><?php the_author_meta('description'); ?></p>
                            <div class="bt-social">
                                <div class="mt-social">
                                    <?php
                                    $postID = get_the_ID();
                                    $authorID = get_post_field('post_author', $postID);
                                    $ourID = 'user_' . $authorID;
                                    if (have_rows('ourteam_repeater', $ourID)):
                                        while (have_rows('ourteam_repeater', $ourID)) : the_row(); ?>
                                            <a href="<?php the_sub_field('link'); ?>"><i class="fa fa-<?php the_sub_field('social'); ?>"></i></a>
                                    <?php
                                        endwhile;
                                    endif;
                                    ?>
                                </div>
                            </div>
                        </div>
                    <?php
                    endwhile;
                    ?>

                    <div class="leave-comment">
                        <h2>Contact Us</h2>
                        <?php echo do_shortcode('[contact-form-7 id="ea9d0a0" title="form Contact Us" html_id="contact-form-1234" html_class="comment-form"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Details Section End -->

<!-- Recommend Section Begin -->
<section class="recommend-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Recommended</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 2,
                'orderby' => 'rand',
            );
            $query = new WP_Query($args);
            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
            ?>
                    <div class="col-md-6">
                        <div class="blog-item">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="bi-pic set-bg" data-setbg="<?php echo get_the_post_thumbnail_url(); ?>"></div>
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
        </div>
    </div>
</section>
<!-- Recommend Section End -->

<?php
get_footer();
