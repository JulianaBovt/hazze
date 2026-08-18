<?php echo get_field('header_logo')['url'] ?>
<?php echo get_field('header_logo')['alt'] ?>

<?php the_field('field') ?>
<?php the_sub_field('sub_field') ?>

<?php echo get_field('hero_button')['url'] ?>
<?php echo get_field('hero_button')['title'] ?>




//basic loop
<?php
if (have_rows('repeater_field_name')):

    while (have_rows('repeater_field_name')) : the_row(); ?>

        <?php the_sub_field('sub_field'); ?>
<?php
    endwhile;

else :
    echo 'Error, rows not found';
endif;
?>