<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content-archive-page">
		<div class="main-content" role="main">

          <?php while ( have_posts() ) : the_post();
            $services = get_field('services');
            $client = get_field('client');
            $link = get_field('site_link');
            $image_1 = get_field("image_1");
            $size = "full";
          ?>

            <article class ="archive-posts">
              <aside class="text-area">
                  <h1> <a href="<?php the_permalink(); ?>" target="_blank">  <?php the_title(); ?> </a> </h1>
                  <h5> <?php echo $services; ?> </h5>
                  <h2> <?php the_excerpt(); ?>
                  <h3> <a href="<?php echo $link ?>" target="_blank" > Site Link </a> </h3>
              </aside>
              <div class ="image-area">
                  <figure> <?php echo wp_get_attachment_image($image_1, $size) ?> </figure>
              </div>
            </article>

          <?php wp_reset_query(); ?>
			     <?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
