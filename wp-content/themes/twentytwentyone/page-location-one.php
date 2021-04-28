<?php
/**
 * Template Name: Location one
 */

get_header(); ?>

<?php
// Get 'employee' posts ?>
<div>

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
						'terms' => 'location-one'
					)
				)
			);

			$location1 = new WP_Query($args);

			if($location1->have_posts()){ ?>
				
				<h3>Meet the team</h3>

				<?php 
				while($location1->have_posts()){
					$location1->the_post();
					echo '<article class="emp-item">'; ?>

					<?php the_post_thumbnail('large'); ?>

					<!-- Get and display Employee Title Custom field -->
					<?
					$field_name = "employee_title";
					
					if( !empty(get_field($field_name)) ): ?>
						<p><?php the_field($field_name); ?></p>
					<?php endif; ?>

					<p><?php the_title(); ?></p>

					<?php echo '</article>';
				}
				wp_reset_postdata();
			}
			?>
</section>
</div>




<?php get_footer(); ?>