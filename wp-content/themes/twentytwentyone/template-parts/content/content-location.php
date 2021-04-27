<header class="page-header">
				<?php
					echo '<h2>';
					echo single_term_title();
					echo '</h2>';

				?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<div>
				<article class="location">
					<?php
						echo '<h3>';
						echo "Meet the team";
						echo '</h3';

					?>
					
					<?php while ( have_posts() ) : the_post(); ?>
						<?php

							echo '<p>'; ?>
						
								<!-- Get and display Employee Title Custom field -->
								<?
								$field_name = "employee_title";
								$size = 'medium';
								
								if( !empty(get_field($field_name)) ): ?>
									<p><?php the_field($field_name); ?></p>
								<?php endif;

							echo '</p>';

							echo '<h4>';
							the_title();
							echo '</h4>';
							
							the_post_thumbnail($size, array( 'class' => 'aligncenter' ) );

						?>
					<?php endwhile; ?>
			</article>
		</div>