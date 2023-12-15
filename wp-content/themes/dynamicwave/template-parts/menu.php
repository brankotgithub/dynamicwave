

          
          <!-- custom menu -->
  <div class="custom_menu-container">
    <div class="container">
      <div class="custom_menu">
          <?php 
                               
                            $menuLocation =get_nav_menu_locations();
                            //var_dump($menuLocation);
                            $headerManuID =$menuLocation['header-menu'];
                            $topMenuItems =wp_get_nav_menu_items($headerManuID);
                            /*list of menu items parametars - searching for ID, perents ID.....*/ 
                              //echo '<pre>';
                            //var_dump ($topMenuItems);
                           //echo '</pre>';
                             
                                 
                            
                            if ($topMenuItems) {?>
        <ul class="navbar-nav ">
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
          <li class="nav-item<?php echo $activeClass; ?>">
            <a class="nav-link pl-0 " href="<?php echo $topMenuItem->url?>"><?php echo $topMenuItem->title?> <span class="sr-only">(current)</span></a>
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
        <div class="user_option">
          <div class="login_btn-container">
            <a href="<?php echo esc_url(wp_login_url()); ?>">
              Login
            </a>
          </div>
           <form class="form-inline my-2 my-lg-0" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="s">
    <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
</form>

        </div>
      </div>
    </div>
  </div>

  <!-- custom menu -->