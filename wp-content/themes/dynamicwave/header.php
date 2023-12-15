



<html<?php bloginfo('language'); ?>>
<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="Branko Teodorovic" />
  <!--  This link will load Font Awesome from the CDN (Content Delivery Network)-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <title><?php 
            bloginfo('name'); 
            wp_title(' | ', true, 'left');
            ?></title>

 

<?php
// include default wordpress style
wp_head();
?>  


</head>

<body <?php /*body_class(); */?>>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand" href="<?php echo home_url();?>">
              <?php 
                    if (has_custom_logo()){
                    the_custom_logo();}
                        else{?>
            <img src="<?php echo get_template_directory_uri(); ?>/Frontend/images/logo.png" alt="" />
            <span>
              <?php 
            bloginfo('name'); 
            ?>
            </span>
          </a>
              <?php
                        } 
                    ?>
             
          <button class="navbar-toggler" type="button" id="mobileMenuToggle" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
                 
               <?php 
                               
                            $menuLocation =get_nav_menu_locations();
                            //var_dump($menuLocation);
                            $headerManuID =$menuLocation['header-menu'];
                            $topMenuItems =wp_get_nav_menu_items($headerManuID);
                            /*list of menu items parametars - searching for ID, perents ID.....*/ 
                              //echo '<pre>';
                            //var_dump ($topMenuItems);
                           // echo '</pre>';
                             
                                 
                            
                            if ($topMenuItems) {?>
                
            <ul class="navbar-nav ml-auto mr-2">
                 <?php                                     
                                        foreach ($topMenuItems as $topMenuItem) {
                                            
                                            //active class
                                                $activeClass = '';
                                                $activeClassSubMenu = '';
                                                if ($topMenuItem->url == get_permalink()) {
                                                    $activeClass = 'active';
                                                    
                                                }
                                            
                                            
                                            //top level menu
                                            
                                            if($topMenuItem->menu_item_parent==0) {
                                                
                                                
                                                
                                                
                                                ?>
              <li class="nav-item active">
                <a class="nav-link <?php echo $activeClass; ?>" href="<?php echo $topMenuItem->url?>"><?php echo $topMenuItem->title?> <span class="sr-only">(current)</span></a>
               
              
              </li>
              <?php
                                    }}
                                
                            } 
                            ?>
            <div class="user_option">
              <div class="login_btn-container">
                <a href="">
                  Login
                </a>
              </div>
              <form class="form-inline my-2 my-lg-0">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form>
            </div>
          </div>
          <div class="call_btn">
            <a class="info-email animation" href="tel:<?php echo get_option('dynamic_phone'); ?>">
              <span class="fas fa-phone-alt"></span><?php echo get_option('dynamic_phone');?>
            </a>
          </div>
                 
            
          
        </nav>
      </div>
    </header>
    <!-- end header section -->

