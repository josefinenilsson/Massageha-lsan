<?php 
get_header();
?>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
    <div class="around_wrapper">
        <div class="wrapper_about">
            <h2><?php the_title(); ?></h2>
                <p><?php the_content(); ?></p>
        </div>
    </div>
    <div class="around_wrapper">
        <div class="wrapper_about">
                <p><?php the_field('text_field_products1'); ?></p>
        </div>
    </div>
    <div class="around_wrapper">
        <div class="wrapper_about">
        <?php if(have_rows( 'picture_products' )): ?>
            <?php while( have_rows( 'picture_products' ) ): the_row(); ?>
                <img class="picture_relax" src="<?php the_sub_field('picture'); ?>"/>


            <?php endwhile; ?>
        <?php endif; ?>
        </div>  
    </div>
    <?php if(get_field('text_field_products2')){ ?>
    <div class="around_wrapper">
        <div class="wrapper_about">
            <p><?php the_field('text_field_products2'); ?></p>
        </div>
    </div>
    <?php } ?>
<?php endwhile; endif; ?>
<?php
get_footer();
?>