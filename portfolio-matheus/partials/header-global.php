<!--HEADER-->
<header class='header'>
   <div class="container">
        <div class="d-flex align-items-center justify-content-between">
            <div class="header__logo">
                <a href="<?= get_home_url(); ?>">M</a>
            </div>
    
            <nav class="header__menu">
                <?php
                    wp_nav_menu(  
                        $args = array(
                            'menu'              => 'Menu Principal',
                            'theme_location'    => 'menu_principal',
                            'container'         => false
                        ) 
                    )
                ?>
            </nav>
    
            <div class="header__mobileBtn">
                <div class="btnMobile">
                </div>
                <div></div>
            </div>
        </div>
   </div>
</header>

