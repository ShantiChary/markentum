<?php
/**
 * Template Name: Location two
 */

get_header(); ?>

<?php
the_content(); ?>

<div class="location-div">
	<h3>Meet the team</h3>
	<section class="location-section">
				<?php
				$args = array(
					'post_type' => 'employee',
					'posts_per_page' => -1,
					'tax_query' => array(
						array(
							'taxonomy' => 'location-category',
							'field' => 'slug',
							'terms' => 'location-two'
						)
					)
				);

				$location1 = new WP_Query($args);

				if($location1->have_posts()){ ?>
					
					<?php 
					while($location1->have_posts()){
						$location1->the_post();

						echo '<div class="emp-container">';
							echo '<article class="emp-item">'; 

									the_post_thumbnail('profile_size'); ?>

									<!-- Get and display Employee Title Custom field -->
									<?
									$field_name = "employee_title";
									
									if( !empty(get_field($field_name)) ): ?>
										<p><?php the_field($field_name); ?></p>
									<?php endif; ?>

									<h5><?php the_title(); ?></h5>

							<?php echo '</article>';
						echo '</div>';
					}
					wp_reset_postdata();
				}
				?>
	</section>
</div>

<?php get_footer(); ?>