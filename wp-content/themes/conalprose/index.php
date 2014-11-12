<?php 
/**
 * he Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage ConalProse
 */
get_header(); 
?>                    
<div id="content-wrap"><!-- container -->
<!-- start content -->
            <?php
            if(have_posts()): while(have_posts()): the_post();
            ?>
                <h3><?php the_title() ?></h3>
                <p class="date"><?php the_date(); ?></p>
                <p>By <strong><?php the_author() ?></strong></p>
            	<div class="full-text">
                    <?php 
                    $page_data = get_page($page_id);

                    echo apply_filters('the_content', $page_data->post_content);
                    ?>
            	</div>
                <?php comments_template( '', true ); ?>
            <?php endwhile; endif; ?>
</div><!-- end container -->
<?php get_footer(); ?>