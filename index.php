<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Midterm_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts()) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>





        <div class"home-columns clearfix">

             <div class="post">
			<?php  /*Start the post Loop*/  
               $Post= new WP_Query('cat=1&posts_per_page=1');
          
               if($Post->have_posts()):

			   while ($Post->have_posts()) :$Post->the_post();?>
			      <h2><a href="<?php the_permalink();?>"> <?php the_title();?></a> </h2>

				<?endwhile;
					

					else:

						endif; 
					wp_reset_postdata();?>
                </div>


                  <div class="post2">
			  <?php  /*Start the post 2 Loop*/
               $Post2= new WP_Query('cat=10&posts_per_page=1');
          
               if($Post2->have_posts()):

			   while ($Post2->have_posts()) :$Post2->the_post();?>
			      <h2><a href="<?php the_permalink();?>"> <?php the_title();?></a> </h2>
         
				<?endwhile;
					

					else:

						endif; 
					wp_reset_postdata(); ?>
			
                  </div>

                
                 <div class="post3">
                     
                  <?php /*Start the post Loop*/  
               $Post3= new WP_Query('cat=11&posts_per_page=1');
          
               if($Post3->have_posts()):

			   while ($Post3->have_posts()) :$Post3->the_post();?>
			      <h2><a href="<?php the_permalink();?>"> <?php the_title();?></a></h2>
                               
				<?endwhile;
					

					else:

						endif; 
					wp_reset_postdata();  ?>

                  </div>

                  <div class="jon">

			    <?php rewind_posts(); /*Start the post 2 Loop*/
               $Post4= new WP_Query('cat=12&posts_per_page=1');
          
               if($Post4->have_posts()):

			   while ($Post4->have_posts()) :$Post4->the_post();?>
			      <h2><a href="<?php the_permalink();?>"> <?php the_title();?></a> </h2>

				<?endwhile;
					

					else:

						endif; 
					wp_reset_postdata();?>
					</div>
				</div>

					
			
					<!--get_template_part( 'template-parts/content', get_post_format() );-->
	

			<?php the_posts_navigation(); ?>
		    <?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		    <?php endif; ?>
		
		</main><!-- #main -->
		 

	</div><!-- #primary -->

<!--<?php get_sidebar(); ?>-->
<?php get_footer(); ?>
