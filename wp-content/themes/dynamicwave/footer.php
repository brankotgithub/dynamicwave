<!-- info section -->
  <section class="info_section layout_padding-top layout_padding2-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="info_links pl-lg-5">
            <h4>
              Menu
            </h4>
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
            <ul>
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
                                                
                                                //start second level menu 
                                                $topItemId = $topMenuItem->ID;
                                                $subMenuItems = array();
                                                    
                                                    foreach ($topMenuItems as $subMenuItem) {
                                                        
                                                        //active sub menu class
                                                                                    
                                                                                        if ($subMenuItem->url == get_permalink()) {
                                                                                           
                                                                                        $activeClassSubMenu = 'active';
                                                                                    } 
                                                                            
                                                        
                                                        //insert item in subMenu
                                                            if ($subMenuItem->menu_item_parent == $topItemId ) {
                                                                $subMenuItems[] = $subMenuItem;
                                                            }
                                                        
                                                    }
                                                
                                                
                                                ?>
              <li >
                <a class="<?php echo $activeClass; ?>" href="<?php echo $topMenuItem->url?>">
                  <?php echo $topMenuItem->title?>
                </a>
                  <?php
                                                               if (!empty($subMenuItems)) {?>
                                                                    
                                                                    <ul  >
                                                                        <?php
                                                                              foreach ($subMenuItems as $subItem) {
                                                                                  
                                                            
                                                                                  ?>
                                                                                                                                
                                                                        <li class="nav-item ">
                                                                            
                                                                            <a class="nav-link <?php echo $activeClassSubMenu?>"  href="<?php echo $subItem->url?>"> <?php echo $subItem->title?> </a>
                                                                        </li>                                                   
                                                                        
                                                                        
                                                                      
                                                                    </ul>
                                                             <?php  }
                                                    
                                                    ?>
              </li>
              <?php
                                    }}
                                
                            }} 
                            ?>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="info_contact">
            <h4>
              Location
            </h4>
            <?php

            get_template_part('/template-parts/contact-data');
          ?>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="info_social">
            <h4>
              Social Link
            </h4>
            <div class="social_container">
              <div>
                <a href="">
                  <img src="<?php echo get_template_directory_uri(); ?>/Frontend/images/facebook-logo.png" alt="" />
                </a>
              </div>
              <div>
                <a href="">
                  <img src="<?php echo get_template_directory_uri(); ?>/Frontend/images/twitter-logo.png" alt="" />
                </a>
              </div>
              <div>
                <a href="">
                  <img src="<?php echo get_template_directory_uri(); ?>/Frontend/images/instagram.png" alt="" />
                </a>
              </div>
              <div>
                <a href="">
                  <img src="<?php echo get_template_directory_uri(); ?>/Frontend/images/linkedin-sign.png" alt="" />
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="info_form">
            <h4>
              Newsletter
            </h4>
            <form action="#">
              <input type="text" placeholder="Enter Your Email" />
              <button type="submit">
                Subscribe
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info_section -->

  <!-- footer section -->
  <footer class="container-fluid footer_section">
    <p>
      &copy; 
    <?php echo date('Y');?> All Rights Reserved By
      <a href="https://html.design/">Free Html Templates and BrankoT who make it dynamic via Wordpress</a>
    </p>
  </footer>
  <!-- footer section -->

  
<?php
        // include default wordpress js files
        wp_footer();
?>

</body>

</html>

