<?php 
get_header();
?>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
<div class="around_wrapper">
    <div class="wrapper_about">
        <h2><?php the_title(); ?></h2>
        <p><?php the_content();?></p>
    </div>
</div>
    <?php if(have_rows( 'about_us_site' )): ?>
        <?php while( have_rows( 'about_us_site' ) ): the_row(); ?>
        <div class="around_wrapper">
            <div class="wrapper_about">
                <h2><?php the_sub_field( 'heading' ); ?></h2>
                <p><?php the_sub_field( 'content_field' ); ?></p>
            </div>
        </div>
        <?php endwhile; ?>
    <?php endif; ?>
<?php endwhile; endif; ?>
<?php
get_footer();
?>