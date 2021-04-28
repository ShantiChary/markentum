<?php
/**
 * Template Name: Location one
 */

get_header(); ?>

<?php
the_content(); ?>

<section class="location">
			<?php
			$args = array(
				'post_type' => 'employee',
				'posts_per_page' => -1,
				'orderby' => 'menu_order',
				'tax_query' => array(
					array(
						'taxonomy' => 'location-category',
						'field' => 'slug',
						'terms' => 'location-two'
					)
				)
			);

			$location2 = new WP_Query($args);

			if($location2->have_posts()){ ?>

				<h3>Meet the team</h3>

				<?php 
				while($location2->have_posts()){
					$location2->the_post();
					echo '<article class="emp-item">'; ?>

					<!-- Get and display Employee Title Custom field -->
					<?
					$field_name = "employee_title";
					$size = 'medium';
					
					if( !empty(get_field($field_name)) ): ?>
						<p><?php the_field($field_name); ?></p>
					<?php endif;

					the_title();
					the_post_thumbnail('large');

					echo '</article>';
				}
				wp_reset_postdata();
			}
			?>
</section>
</div>




<?php get_footer(); ?>