<?php
/*
Template Name: Contact pattern
*/
get_header();
?>

<!-- Map Section Begin -->
<?php echo get_field('map'); ?>
<!-- Map Section End -->

<!-- Contact Section Begin -->
<section class="contact-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="contact-text">
                    <h4>Contacts Us</h4>
                    <div class="ct-item">
                        <div class="ci-icon">
                            <span class="ti-location-pin"></span>
                        </div>
                        <div class="ci-text">
                            <ul>
                                <li>
                                    <span>Our Location</span>
                                    60-49 Road 11378 New York
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="ct-item">
                        <div class="ci-icon">
                            <span class="ti-mobile"></span>
                        </div>
                        <div class="ci-text">
                            <ul>
                                <li>
                                    <span>Phone:</span>
                                    +65 11.188.888
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="ct-item">
                        <div class="ci-icon">
                            <span class="ti-email"></span>
                        </div>
                        <div class="ci-text">
                            <ul>
                                <li>
                                    <span>Mail</span>
                                    hellocolorlib@gmail.com
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="contact-option">
                    <h4>Leave Us A Meggase</h4>
                    <?php echo do_shortcode('[contact-form-7 id="ea9d0a0" title="form Contact Us" html_id="contact-form-1234" html_class="comment-form contact-form"]'); ?>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->



<?php
get_footer();
?>