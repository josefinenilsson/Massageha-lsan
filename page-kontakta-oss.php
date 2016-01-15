<?php 
get_header();
?>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
<div class="wrapper">
            <div class="contact_info">
                <div class="contact_us">
                    <h3> <?php the_title(); ?></h3>
                    <p><?php the_content(); ?></p>
                </div>
                <div class="find_us">
                    <h3><?php the_field('find_us_heading'); ?></h3>
                        <p><?php the_field('find_us');?></p>
                </div>
            </div>
            <div class="contact_form">
                <?php 
                    if( function_exists( 'ninja_forms_display_form' ) ){ 
                        ninja_forms_display_form( 6 ); 
                    }
                ?>
            </div>
        </div>
        <div class="contact_map">
            <a href="https://www.google.se/maps/place/Kanalgatan+13A,+553+22+J%C3%B6nk%C3%B6ping/@57.7806116,14.1805444,15z/data=!4m2!3m1!1s0x465a6d95d926767f:0x43c25cad265dda0f"><img src="<?php the_field('map_image'); ?>"/></a>
        </div>
   
<?php endwhile; endif; ?>

<?php
get_footer();
?>

