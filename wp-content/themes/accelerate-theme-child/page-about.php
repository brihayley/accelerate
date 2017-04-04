<?php
/**
 * The template for the About page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

	<div id="primary" class="about-site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post();
				$service_title_one = get_field('service_title_one');
				$service_text_one = get_field('service_text_one');
				$service_image_one = get_field('service_image_one');
				$service_title_two = get_field('service_title_two');
				$service_text_two = get_field('service_text_two');
				$service_image_two = get_field('service_image_two');
				$service_title_three = get_field('service_title_three');
				$service_text_three = get_field('service_text_three');
				$service_image_three = get_field('service_image_three');
				$service_title_four = get_field('service_title_four');
				$service_text_four = get_field('service_text_four');
				$service_image_four = get_field('service_image_four');
				$size = "full";
				?>

				<div class="about-top-img">
					<h1><span>Accelerate</span> is a strategy and marketing agency<br>located in the heart of NYC. Our goal is to build<br>businesses by making our clients visible and<br>making their customers smile.</h1>
				</div>

					<div class="about-intro">
						<h4>our services</h4>
						<p>We take pride in our clients and the content we create for them.<br>
						Here's a brief overview of our offered services</p>
					</div>
					<article class="about-services">
						<div class="about-service-single">
							<div class="about-service-right">
								<h2><?php echo $service_title_one; ?></h2>
								<p><?php echo $service_text_one; ?></p>
							</div>
							<figure class="about-image-left">
								<?php echo wp_get_attachment_image( $service_image_one, $size );?>
							</figure>
						</div>
						<div class="about-service-single">
							<div class="about-service-left">
								<h2><?php echo $service_title_two; ?></h2>
								<p><?php echo $service_text_two; ?></p>
							</div>
							<figure class="about-image-right">
								<?php echo wp_get_attachment_image( $service_image_two, $size );?>
							</figure>
						</div>
						<div class="about-service-single">
							<div class="about-service-right">
								<h2><?php echo $service_title_three; ?></h2>
								<p><?php echo $service_text_three; ?></p>
							</div>
							<figure class="about-image-left">
								<?php echo wp_get_attachment_image( $service_image_three, $size );?>
							</figure>
						</div>
						<div class="about-service-single">
							<div class="about-service-left">
								<h2><?php echo $service_title_four; ?></h2>
								<p><?php echo $service_text_four; ?></p>
								</div>
							<figure class="about-image-right">
								<?php echo wp_get_attachment_image( $service_image_four, $size );?>
							</figure>
						</div>
					</article>
					<?php the_content(); ?>
					<div class="about-closing">
						<h2>Interested in working with us?</h2>
						<a class="contact-button" href="http://localhost:8888/accelerate/contact-us/">Contact Us</a>
					</div>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
