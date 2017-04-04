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
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

<section class="blog-page">
	<div class="site-content">
		<div class="main-content">

			<?php while ( have_posts() ) : the_post(); ?>
				<article class="post-entry individual-post">
					<div class="entry-wrap">

						<header class="entry-header">
							<h2 class="entry-title newsletter"><?php the_title(); ?></h2>
						</header>

						<div class="entry-summary">
							<?php the_content(); ?>
						</div>

					</div>
				</article>
		</div>

				<?php get_sidebar(); ?>

			<?php endwhile; ?>
	</div>
</section>

	<?php
	get_footer();
