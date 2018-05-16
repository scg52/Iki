<?php
/*
 Template Name: Homepage Template
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

						<main id="main" class="" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

								<section class="" itemprop="articleBody">
									<?php
										// the content (pretty self explanatory huh)
										the_content();
									?>
								</section>

							<?php endwhile; else : ?>

									

							<?php endif; ?>

						</main>

				</div>

			</div>


<?php get_footer(); ?>
