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
                <p><?php the_field('text_field'); ?></p>
        </div>
    </div>
    <div class="around_wrapper">
        <div class="wrapper_about">
        <?php if(have_rows( 'picture_relax' )): ?>
            <?php while( have_rows( 'picture_relax' ) ): the_row(); ?>
                <img class="picture_relax" src="<?php the_sub_field('picture'); ?>"/>


            <?php endwhile; ?>
        <?php endif; ?>
        </div>
</div>
<?php endwhile; endif; ?>
<?php
get_footer();
?>