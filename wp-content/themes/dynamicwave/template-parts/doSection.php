<section class="do_section layout_padding-bottom">
      
      
    <div class="container">
       
      <div class="custom_heading-container">
        <h2>
          What we do
        </h2>
      </div>
      <div class="row">
        
             <?php
            $args = array(
                'category_name' => 'do', // Replace 'do' with your actual category slug
                'posts_per_page' => -1, // -1 retrieves all posts that match the criteria
            );

            $do_posts = new WP_Query($args);
            $count = 0;

            if ($do_posts->have_posts()) {
                while ($do_posts->have_posts()) {
                    $do_posts->the_post();

                    $post_title = get_the_title();
                    $post_content = get_the_content();
                    $featured_image = get_the_post_thumbnail_url();

                    $count++;
                    $post_class = ($count % 2 === 0) ? 'content-box bg-red' : 'content-box bg-green';

                    if (has_category('do')) {
        ?>
            <div class="col-md-3 col-sm-6">
          <div class="<?php echo esc_attr($post_class); ?>">
            <div class="img-box">
              <img src="<?php echo esc_url($featured_image); ?>" alt="<?php echo esc_attr($post_title); ?>" />
            </div>
            <div class="detail-box">
              <h6>
                <?php echo esc_html($post_title); ?>
              </h6>
              <p>
                <?php echo $post_content; ?>
              </p>
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
  </section>

