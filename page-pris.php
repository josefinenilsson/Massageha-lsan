<?php 
get_header();
?>
<div class="around_wrapper">
    <div class="wrapper_about">
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <div class="price_box">
                <h3><?php the_field('heading_price_massage');?></h3>
                    <table>
                    <?php if(have_rows('pricelist_massage')): ?>
                        <?php while( have_rows('pricelist_massage') ): the_row(); ?>
                        <tr class="price_list">
                            <td><?php the_sub_field('massage_time'); ?></td>
                            <td><?php the_sub_field('massage_price'); ?></td>
                        </tr>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    </table>
                </div>
                <div class="price_box">
                    <h3><?php the_field('heading_price_vaxning');?></h3>
                    <table>
                    <?php if(have_rows('pricelist_vaxning')): ?>
                        <?php while( have_rows('pricelist_vaxning') ): the_row(); ?>
                        <tr class="price_list">
                            <td><?php the_sub_field('vaxning_style'); ?></td>
                            <td><?php the_sub_field('vaxning_price'); ?></td>
                        </tr>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    </table>
                </div>
        </div>
</div>
<div class="around_wrapper">
    <div class="wrapper_about">
         <div class="price_box_full">
            <h3><?php the_field('heading_price_aromatherapy');?></h3>
                <table>
                <?php if(have_rows('pricelist_aromatherapy')): ?>
                    <?php while( have_rows('pricelist_aromatherapy') ): the_row(); ?>
                    <tr class="price_list">
                        <td><?php the_sub_field('aroma_style'); ?></td>
                        <td><?php the_sub_field('aroma_price'); ?></td>
                    </tr>
                    <?php endwhile; ?>
                <?php endif; ?>
                </table>
        </div>
        <div class="price_box_full">
            <h3><?php the_field('heading_price_foottherapy');?></h3>
                <table>
                <?php if(have_rows('pricelist_foottherapy')): ?>
                    <?php while( have_rows('pricelist_foottherapy') ): the_row(); ?>
                    <tr class="price_list">
                        <td><?php the_sub_field('foot_style'); ?></td>
                        <td><?php the_sub_field('foot_price'); ?></td>
                    </tr>
                    <?php endwhile; ?>
                <?php endif; ?>
                </table>
        </div>
        <div class="price_box_full">
            <h3><?php the_field('heading_price_relaxbath');?></h3>
                <table>
                <?php if(have_rows('pricelist_relaxbath')): ?>
                    <?php while( have_rows('pricelist_relaxbath') ): the_row(); ?>
                    <tr class="price_list">
                        <td><?php the_sub_field('relax_style'); ?></td>
                        <td><?php the_sub_field('relax_price'); ?></td>
                    </tr>
                    <?php endwhile; ?>
                <?php endif; ?>
                </table>
        </div>
    </div>
</div>    
<?php endwhile; endif; ?>
<?php
get_footer();
?>