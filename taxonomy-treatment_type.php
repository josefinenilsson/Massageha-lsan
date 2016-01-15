<?php
get_header();
?>
<div class="wrapper">
<?php if(have_posts()): while(have_posts()): the_post(); ?>

<a class="treatment_box" href="<?php the_permalink();?>">
                <div class="treatment_category">
                    <?php if(get_the_post_thumbnail()){
                        the_post_thumbnail();
                        }
                    
                    ?>
                    
                    <h2><?php the_title();?></h2>
                    <p><?php the_excerpt();?></p>
                </div>
            </a>
   
<?php endwhile; endif; ?>
</div>
<?php
get_footer();
?>