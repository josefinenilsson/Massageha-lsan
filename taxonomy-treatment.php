<?php 
get_header();
?>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
<?php the_content(); ?>
<?php 

    function get_current_post_taxonomies(){
        global $post;

        $taxonomy_names = get_object_taxonomies( $post );
        print_r( $taxonomy_names );
    }

    add_action('wp_head','get_current_post_taxonomies');

?>
<?php endwhile; endif; ?>
<?php
get_footer();
?>