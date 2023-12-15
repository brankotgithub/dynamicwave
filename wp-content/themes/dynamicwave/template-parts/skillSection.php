<section class="skill_section layout_padding2">
    <div class="container">
      <div class="custom_heading-container">
        <h2>
          <?php
          $category = get_category_by_slug('skill'); // Replace 'your_category_slug' with your actual category slug

if ($category) {
    $category_description = $category->description;
    // Now $category_description contains the description of the category
    echo $category_description; // Or use it as needed
} else {
    echo 'Category not found.';
}
?>
        </h2>
      </div>
      <div class="skill_padding">
        <div class="row">
             <?php
            $args = array(
                'category_name' => 'skill', // Replace 'do' with your actual category slug
                'posts_per_page' => -1, // -1 retrieves all posts that match the criteria
            );

            $skill_posts = new WP_Query($args);
            $count = 0;

            if ($skill_posts->have_posts()) {
                while ($skill_posts->have_posts()) {
                    $skill_posts->the_post();

                    $post_title = get_the_title();
                    $post_content = get_the_content();
                    $featured_image = get_the_post_thumbnail_url();

                    $count++;

                    if (has_category('skill')) {
        ?>
          <div class="col-md-3 col-sm-6">
            <div class="box">
              <div class="circle" id="circles-<?php echo esc_attr($count); ?>"></div>
              <div class="img-box-skills">
              <img src="<?php echo esc_url($featured_image); ?>" alt="<?php echo esc_attr($post_title); ?>" />
            
              <h6>
                <?php echo esc_attr($post_title); ?>
              </h6>
            </div>
            </div>
          </div>
            <?php
        }
         }
        wp_reset_postdata(); // Reset the query
        } else {
        // No posts found
        echo 'No posts found.';
        }
        ?>
        </div>
      </div>
    </div>
  </section>
