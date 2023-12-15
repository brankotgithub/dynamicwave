<section class="contact_section ">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 offset-lg-2 col-md-5 offset-md-1">
            <h2 class="custom_heading"><?php $contact_us = get_page_by_title('Contact us'); echo esc_html($contact_us->post_title);?></h2>
          <?php

            the_content();
          ?>
        </div>
        <div class="col-md-6 px-0">
          <div class="img-box">
            <img src="<?php $contact_image = get_field('contact_image', $contact_us->ID);
echo esc_html($contact_image); ?>" alt="<?php echo esc_html($contact_us->post_title);?>" class="w-100" />
          </div>
        </div>
      </div>
    </div>
  </section>

