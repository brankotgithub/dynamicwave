<?php

get_header();
?>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    
      </div>
    </header>
    <!-- end header section -->


  </div>

  <!-- custom menu -->
  <?php

            get_template_part('/template-parts/customMenu');
          ?>

  <!-- custom menu -->

  <!-- about section -->

  <?php
$url = $_SERVER['REQUEST_URI'];

if (strpos($url, '/about/') !== false) {
    get_template_part('/template-parts/aboutSection');
} elseif (strpos($url, '/services/') !== false) {
    get_template_part('/template-parts/doSection');
} elseif (strpos($url, '/portfolio/') !== false) {
    get_template_part('/template-parts/portfolioSection');

    
} elseif (strpos($url, '/contact-us/') !== false){
     get_template_part('/template-parts/contactUs');
}
?>

  

  <!-- end about section -->


<?php

get_footer();
?>
