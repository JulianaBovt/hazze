<!-- Footer Section Begin -->
<section class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="footer-option">
                    <div class="fo-logo">
                        <a href="/">
                            <img src="<?php echo get_field('header_logo', 'option')['url'] ?>" alt="<?php echo get_field('header_logo', 'option')['alt'] ?>">
                        </a>
                    </div>
                    <?php
                    if (have_rows('footer_repeater', 'options')):
                        while (have_rows('footer_repeater', 'options')) : the_row(); ?>
                            <ul>
                                <?php if (!get_sub_field('is_link', 'options')) { ?>
                                    <li><?php the_sub_field('first_text', 'options'); ?> <?php the_sub_field('second_text', 'options'); ?></li>
                                <?php } else { ?>
                                    <li><?php the_sub_field('first_text', 'options'); ?> <a href="<?php echo get_sub_field('link', 'options')['url']; ?>"><?php echo get_sub_field('link', 'options')['title']; ?></a></li>
                                <?php } ?>
                            </ul>
                    <?php
                        endwhile;
                    else :
                        echo 'Error, rows not found';
                    endif;
                    ?>
                    <!-- <ul>
                        <li>Address: 60-49 Road 11378 New York</li>
                        <li>Phone: +65 11.188.888</li>
                        <li>Email: hello.colorlib@gmail.com</li>
                    </ul> -->
                    <div class="fo-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-widget fw-links">
                    <h5><?php the_field('menu_name', 'option') ?></h5>
                    <?php
                    wp_nav_menu(array(
                        'container'       => '',           // (string) Контейнер меню. Обворачиватель ul. Указывается тег контейнера (по умолчанию в тег div)            // (string) Текст после анкора (текста) ссылки
                        'depth'           => 0,               // (integer) Глубина вложенности (0 - неограничена, 2 - двухуровневое меню)
                        'theme_location'  => 'footer'               // (string) Расположение меню в шаблоне. (указывается ключ которым было зарегистрировано меню в функции register_nav_menus)
                    ));
                    ?>
                    <!-- <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Model</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Serivius</a></li>
                    </ul> -->
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                    <!-- <h5>Join The Newsletter</h5>
                    <p>Get E-mail updates about our latest shop and special offers.</p>
                    <form action="#" class="news-form">
                        <input type="text" placeholder="Enter your mail">
                        <button type="submit">Subscribe</button>
                    </form> -->

                    <?php echo do_shortcode('[contact-form-7 id="1234" title="Contact form 1" html_id="contact-form-1234" html_class="news-form"]'); ?>

                    <!-- <?php echo do_shortcode('<h5>Join The Newsletter</h5>
<p>Get E-mail updates about our latest shop and special offers.</p>
[email* email-355 placeholder "Enter your email"]
[submit "Subscribe"]') ?> -->
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                    <h5>Instagram</h5>
                    <div class="insta-pic">
                        <?php
                        $images = get_field('footer_gallery', 'options');
                        if ($images): ?>
                            <?php foreach ($images as $image): ?>
                                <img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-text">
    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        <?php the_field('footer_copyright', 'option'); ?><?php the_field('footer_copyright') ?> &copy;<script>
            document.write(new Date().getFullYear());
        </script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
</div>
    </div>
</section>
<!-- Footer Section End -->


<?php wp_footer(); ?>

</body>

</html>