<section class="portfolio_section layout_padding">
    <div class="container">
      <div class="custom_heading-container">
        <h2>
          <?php
          $category = get_category_by_slug('our_portfolio'); // Replace 'your_category_slug' with your actual category slug

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
    </div>
   <?php
$args = array(
    'category_name' => 'our_portfolio',
    'posts_per_page' => -1,
);

$do_posts = new WP_Query($args);
$count = 0;

$featured_images = array();
$post_titles = array();
$post_URL= array();
if ($do_posts->have_posts()) {
    while ($do_posts->have_posts()) {
        $do_posts->the_post();
        $count++;
        
        // Store featured images and titles in separate arrays for each post
        
            $featured_images[$count] = get_the_post_thumbnail_url();
            $post_titles[$count] = get_the_title();
        $post_URL[$count] = get_permalink();
            
    }
    wp_reset_postdata();
   for ($i = 1; $i <= $count; $i++) {
        ${'featured_images' . $i} = isset($featured_images[$i]) ? $featured_images[$i] : '';
        ${'post_titles' . $i} = isset($post_titles[$i]) ? $post_titles[$i] : '';
        ${'post_URL' . $i} = isset($post_URL[$i]) ? $post_URL[$i] : '';
    }
    
    ?>
    <div class="container-fluid">
      <div class="row">
          <?php
            $count3=$count/3;
            $j=0;
            for ($i = 1; $i <= $count3; $i++) {
                
          ?>
        
        <div class="col-md-6">
          <div class="row">
            <div class="col-sm-6">
              <div class="box b-<?php echo $j++; ?>">
                <img src="<?php echo esc_url(${'featured_images' . $j}); ?>" alt="<?php echo ${'post_titles' . $j}; ?>" />
                <h4>
                    <a class="nav-link pl-0" href="<?php echo ${'post_URL' . $j}; ?>"><?php echo ${'post_titles' . $j}; ?></a> 
                </h4>
              </div>
              <div class="box b-<?php echo $j++; ?>">
                <img src="<?php echo esc_url(${'featured_images' . $j}); ?>" alt="" />
                <h4>
                  <a class="nav-link pl-0" href="<?php echo ${'post_URL' . $j}; ?>"><?php echo ${'post_titles' . $j}; ?></a> 
                </h4>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="box b-<?php echo $j++; ?>">
                <img src="<?php echo esc_url(${'featured_images' . $j}); ?>" alt="" />
                <h4>
                  <a class="nav-link pl-0" href="<?php echo ${'post_URL' . $j}; ?>"><?php echo ${'post_titles' . $j}; ?></a> 
                </h4>
              </div>
            </div>
          </div>
        </div>
        
      
    
<?php }}  else {
    echo 'No posts found.';
}
?>


</div>
</div>
</section>


