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
<?php if(get_field('extra_falt_1')){ ?>
<div class="around_wrapper">
    <div class="wrapper_about">
        <div class="classic_massage_full">
            <p><?php the_field('extra_falt_1'); ?></p>
        </div>
    </div>
</div>
<?php } ?>
<?php if(get_field('extra_falt_2')){ ?>
<div class="around_wrapper">
     <div class="wrapper_about">
        <div class="classic_massage_text_full">
            <p><?php the_field('extra_falt_2'); ?></p>
        </div>
    </div>
</div>
<?php } ?>
<?php if(have_rows( 'extra_falt_3' )): ?>
<div class="around_wrapper">
    <div class="wrapper_about">
        <div class="classic_massage_text_full">
            <?php while( have_rows( 'extra_falt_3' ) ): the_row(); ?>
                <h4><?php the_sub_field('rubrik');?></h4>
                    <p><?php the_sub_field('text'); ?></p>
            <?php endwhile; ?>
        </div>
    </div>
</div>
<?php endif; ?>

<?php if(have_rows( 'bilder' )): ?>
<div class="around_wrapper">
    <div class="wrapper_about">
        <div class="classic_massage_text_full">
            <?php while( have_rows( 'bilder' ) ): the_row(); ?>
                <img class="picture_relax" src="<?php the_sub_field('pic'); ?>"/>


            <?php endwhile; ?>
        </div>
    </div>
</div>
<?php endif; ?>




<?php endwhile;endif; ?>

<?php
get_footer();
?>