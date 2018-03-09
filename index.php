<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cr12_Andrzej_Kusznir_traveler
 */

get_header(); ?>
<div class="container">
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<div class="row">
			<div class="col-sm-9 col-md-9">
            <?php while(have_posts()) : the_post(); ?>
            
              <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                  
                  <div class="caption">
                    <h3 class="text-center"><?php the_title(); // blog post title ?></h3>
                    <?php if(has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail(); ?>
                    <?php endif;?>
                    <h4><?php the_content(); // blog post content ?></h4>
                    <hr>
                    <!--<p><?php the_permalink(); // href to a specific blog post ?></p>-->
                    <h4><?php the_date(); // blog post date ?></h4>
                    <h4><?php the_time(); // blog post time ?></h4>
                    <h4><?php the_author(); // blog post author ?></h4>
                    <!--<p><?php echo get_author_posts_url(get_the_author_meta('ID')); // href to author posts ?></p>-->
                    <?php comments_template(); ?>
                  </div>
                </div>
              </div>
            
          
            <?php endwhile; ?>
            </div>
            <!-- this code just for check if i have posts or not -->
            <?php
            if(have_posts()): ?>

            <?php else:  ?>
            <p><?php echo "No Posts Found"; ?></p>
            <?php endif; ?>
            
<?php comments_template(); ?>
		
	

<div class="col-md-3 col-sm-3">
<?php 
	 if(is_active_sidebar('sidebar')):
       dynamic_sidebar('sidebar');
       endif;
?>
</div>
</div>
</main><!-- #main -->
</div>
<?php
get_footer();
