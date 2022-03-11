<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package bioxim
 */

 /*
    Template Name: privacy
    Template Post Type: page
*/
 
get_header();

?>
	<main>
		<section class="privacy__section">
            <div class="privacy__section-container container">
                <div class="privacy__section-body">
                   
                <?php if (have_posts()){  while (have_posts()) { the_post(); ?>
                        <h1 class="privacy__section-title section-title"><?php the_title(); ?></h1>
                         <?php the_content(); ?> 
                    <?php }  
                } ?>

                </div>
            </div>
		</section> 
	</main> 

<?php

get_footer();

 
 
