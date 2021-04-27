<!--home page content -->

<!-- Intro section -->
<div class="home-intro">
	
	<div class="intro-para">
	
		<?php 
			the_content(); 
		?>
    </div>

    <div>
        <h4>Our locations</h4> 
        <ul>   
            <?php $categories = get_categories('taxonomy=location-category&post_type=employee'); ?>
                    <?php foreach ($categories as $category) : ?>
                        <li><a href="<?php echo get_category_link($category->cat_ID); ?>"><?php echo $category->name; ?></a></li>
                <?php endforeach; ?>
        </ul>
    </div>

</div>