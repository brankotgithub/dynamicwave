
<?php
get_header();
?>
<main>

    <?php
    if (have_posts()) {

        while (have_posts()) {
            the_post();

            $featureImage = get_the_post_thumbnail_url(get_the_ID(), 'full');
            ?>



            <section class="lead-page-section news-page-section" >
                <div class="container">
    <div class="row">
        <div class="col-12 col-sm-9 col-md-8 col-lg-6">
            <article class="lead-section-content px-4 py-5 animation" data-animation="slide-right">
                <p class="text-primary mb-4">
                    <!-- Category and Date code remains unchanged -->
                </p>
                <div class="row align-items-center">
                    <div class="col-12 col-md-6 mb-4">
                        <h1 class="lead-section-title mb-4">
                            <?php echo get_the_title(); ?>
                        </h1>
                    </div>
                    <div class="col-12 col-md-6 mb-4">
                        <img src="<?php echo $featureImage; ?>" alt="Image Description">
                    </div>
                </div>
                <p class="lead-section-description">
                    <?php echo get_the_excerpt(); ?>
                </p>
            </article>
        </div>
    </div>
</div>

            </section>

            <section class="news-single-content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-10 col-xl-8">
                            <article>



                                <?php echo the_content(); ?>


                            </article>

                            <article class="news-tags">
                                <p class="text-primary tag-title">Tags:</p>

                                <div class="tags">
                                    <?php
                                    $newsTags = get_the_tags(get_the_ID());
                                    /* echo '<pre>';
                                      var_dump ($newsTags);
                                      echo '</pre>'; */
                                    foreach ($newsTags as $newsTag) {
                                        ?>
                                        <a href="<?php echo get_category_link($newsTag->term_id) ?>" class="btn btn-light text-primary px-4 py-2"><?php echo $newsTag->name; ?></a>

                                        <?php
                                    }
                                    ?> 


                                    <!--<a href="#" class="btn btn-light text-primary px-4 py-2">banking</a>
                                     <a href="#" class="btn btn-light text-primary px-4 py-2">finance</a>
                                     <a href="#" class="btn btn-light text-primary px-4 py-2">employment</a>-->
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </section>

        <?php }
        
            
        /*get_template_part('/template-parts/pagination');*/
        
    }
    ?>


</main>


<?php
get_footer();
?>