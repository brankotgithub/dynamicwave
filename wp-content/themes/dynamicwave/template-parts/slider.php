<section class="slider_section">
    <div class="container-fluid">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">

                <?php
                // Custom Query
                $args = array(
                    'post_type' => 'slider_services',
                    'posts_per_page' => -1, // Retrieve all posts
                );
                $query = new WP_Query($args);

                // Loop through the posts
                $count = 0;
                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                        $active_class = ($count == 0) ? 'active' : '';
                ?>

                        <div class="carousel-item <?php echo $active_class; ?>">
                            <div class="row">
                                <div class="col-md-3 col-lg-2 offset-md-2">
                                    <div class="detail-box">
                                        <h1><?php the_title(); ?></h1>
                                        <p><?php echo get_the_content(); ?></p>
                                        <div>
                                            <a href="<?php echo esc_url(get_post_meta(get_the_ID(), 'Link_button', true)); ?>">
                                                <?php echo get_post_meta(get_the_ID(), 'button', true); ?>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7 col-lg-8">
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
                            </div>
                        </div>

                <?php
                        $count++;
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>
