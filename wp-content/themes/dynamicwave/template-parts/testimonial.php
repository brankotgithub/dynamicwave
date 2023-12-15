<section class="client_section layout_padding-bottom">
    <div class="container">
      <div class="custom_heading-container">
        <h2>
          <?php
          $category = get_category_by_slug('testimonial'); // Replace 'your_category_slug' with your actual category slug

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

    <div class="container">
      <div id="carouselExample2Controls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            
          
       <?php
$args = array(
    'category_name' => 'Testimonial',
    'posts_per_page' => -1,
  
);

$do_posts = new WP_Query($args);
$count = 0;

$featured_images = array();
$post_titles = array();
$post_content = array();
$post_tag = array();
$post_URL= array();
if ($do_posts->have_posts()) {
   
    while ($do_posts->have_posts()) {
        $do_posts->the_post();
        $count++;

        // Store featured images and titles in separate arrays for each post
        $featured_images[$count] = get_the_post_thumbnail_url();
        $post_titles[$count] = get_the_title();
        $post_content[$count] = get_the_content();
        $post_index[$count] = $count;
        $post_tag[$count] = get_the_tags();
        $post_URL[$count] = get_permalink();
    }
    
    wp_reset_postdata();
            for ($i = 1; $i <= $count; $i++) {
                ${'featured_images' . $i} = isset($featured_images[$i]) ? $featured_images[$i] : '';
                ${'post_titles' . $i} = isset($post_titles[$i]) ? $post_titles[$i] : '';
                ${'post_content' . $i} = isset($post_content[$i]) ? $post_content[$i] : '';
                ${'post_index' . $i} = isset($post_index[$i]) ? $post_index[$i] : '';
                ${'post_tag' . $i} = isset($post_tag[$i]) ? $post_tag[$i] : '';
                ${'post_URL' . $i} = isset($post_URL[$i]) ? $post_URL[$i] : '';
                    
            }
            ?>
        
      
                <?php
            $count2=$count/2;
            $j=0;
            for ($i = 1; $i <= $count2; $i++) {
               $j++ ;
          ?>
               <?php if ($j == 1): ?>
    <div class="carousel-item active">
<?php else: ?>
    <div class="carousel-item">
<?php endif; ?>

              
            <div class="client_container layout_padding2">
              <div class="client_box b-1">
                <div class="client-id">
                  <div class="img-box">
                    <img src="<?php echo esc_url(${'featured_images' . $j}); ?>" alt="" />
                  </div>
                  <div class="name">
                    <h5>
                      <a class="nav-link pl-0" href="<?php echo ${'post_URL' . $j}; ?>"><?php echo ${'post_titles' . $j}; ?></a>  
                      
                    </h5>
                    <p>
                      <?php
                        if (!empty(${'post_tag' . $j})) {
                            echo ${'post_tag' . $j}[0]->name;
                        } else {
                            echo 'This post doesn\'t have tags.';
                        }
                     ?>
                    </p>
                  </div>
                </div>
                <div class="detail">
                  <p>
                    <?php echo ${'post_content' . $j};$j++; ?>
                  </p>
                </div>
              </div><span class="nextCarol"><?php echo ${'post_index' . $j} . '/' . $count; ?></span>
              <div class="client_box b-2">
                <div class="client-id">
                  <div class="img-box">
                    <img src="<?php echo esc_url(${'featured_images' . $j}); ?>" alt="" />
                  </div>
                  <div class="name">
                    <h5>
                      <a class="nav-link pl-0" href="<?php echo ${'post_URL' . $j}; ?>"><?php echo ${'post_titles' . $j}; ?></a>
                    </h5>
                    <p>
                      <?php
                        if (!empty(${'post_tag' . $j})) {
                            echo ${'post_tag' . $j}[0]->name;
                        } else {
                            echo 'This post doesn\'t have tags.';
                        }
                     ?>

                    </p>
                  </div>
                </div>
                <div class="detail">
                  <p>
                    <?php echo ${'post_content' . $j}; ?>
                  </p>
                </div>
              </div>
            </div>
          </div>
            



          <?php 
           
                    }
?>
           
        </div>
            
   
    

          <a class="carousel-control-prev" href="#carouselExample2Controls" role="button" data-slide="prev">
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExample2Controls" role="button" data-slide="next">
        <span class="sr-only">Next</span>
    </a>
        </div>
     
      
<?php }  else {
    echo 'No posts found.';
}
?>
    
      </div>
      
  
</section>