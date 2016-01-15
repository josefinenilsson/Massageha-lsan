<?php 
get_header();
?>
<img class="top_image" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
<section class="top_info">
            <div class="wrapper">
                <?php if(have_posts()): while(have_posts()): the_post(); ?>
                    <h3><?php the_title(); ?></h3>
                    <?php the_content(); ?>
                
            </div><!-- #wrapper -->
        </section>
        <section class="index_grey">
            <div class="wrapper_special_start">
                <!-- <h3>Behandlingar</h3> -->
                <?php if(have_rows( 'info_box_front_page' )): ?>
                    <?php while( have_rows( 'info_box_front_page' ) ): the_row(); ?>
                        <div class="quick_box">
                            <img src="<?php the_sub_field('image_repeaterbox'); ?>" />
                            <h4><?php the_sub_field( 'heading_repeaterbox' ); ?></h4>
                            <p><?php the_sub_field( 'text_repeaterbox' ); ?></p>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
               
            </div><!-- #wrapper -->
        </section>
 
<?php endwhile; endif; ?>

<?php
get_footer();
?>