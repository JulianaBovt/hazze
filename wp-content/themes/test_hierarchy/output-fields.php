<?php 
/*
Template Name: ACF output fields pattern
*/
get_header();
?>
<?php 
// the_field("text_field"); 
echo get_field("text_field"); 
the_field("text_area");
?>
<?php 
get_footer();
