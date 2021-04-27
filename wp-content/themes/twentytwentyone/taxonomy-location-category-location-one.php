<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>
			<header class="page-header">
				<?php
					echo '<h1>';
					echo single_term_title();
					echo '</h1>';

				?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<div>
			<article class="location-one">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php

					echo '<p>'; ?>
				
						<!-- Get and display Employee Title Custom field -->
						<?
						$field_name = "employee_title";
						 
						if( !empty(get_field($field_name)) ): ?>
							<p><?php the_field($field_name); ?></p>
						<?php endif;

					echo '</p>';

					echo '<h4>';
					the_title();
					echo '</h4>';
					
					the_post_thumbnail('large', array( 'class' => 'aligncenter' ) );

				?>
			<?php endwhile; ?>
		</article>
		</div>

		<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

	</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
