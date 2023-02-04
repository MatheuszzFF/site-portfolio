<!--HEADER-->
<header class='header'>
   <div class="container">
        <div class="d-flex align-items-center justify-content-between">
            <div class="header__logo">
                <?php 
                    $link = get_field('logo');
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
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

