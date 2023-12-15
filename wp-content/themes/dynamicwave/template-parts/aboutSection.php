<section class="about_section layout_padding mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <div class="img-box">
            <?php
                                        if (has_post_thumbnail()) {
                                            the_post_thumbnail(); // You can change 'thumbnail' to other sizes
                                        } else {
                                            // Default image if no featured image is set
                                            echo '<img src="' . get_template_directory_uri() . '/Frontend/images/default-image.jpg" alt="" />';
                                        }
                                        ?> 
          </div>
        </div>
        <div class="col-md-5">
          <div class="detail-box">
            <div class="custom_heading-container">
              <h2>
                <?php echo get_post_meta(get_the_ID(), 'title', true); ?>
              </h2>
            </div>

            <p>
              <?php echo get_post_meta(get_the_ID(), 'AboutText', true); ?>
            </p>
            <div>
              <a href="<?php echo esc_url(get_post_meta(get_the_ID(), 'Link_button', true)); ?>">
                <?php echo get_post_meta(get_the_ID(), 'button', true); ?>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

