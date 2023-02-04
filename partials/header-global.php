
<!--HEADER-->
<header class='header'>
    <div class="container">
        <!--MENU-->
        <div class="header__logo">
            <?php 

                $image = get_field('header_logo', 'options');
                
                if( !empty( $image ) ): ?>
                    <a href="<?php echo home_url(); ?>"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></a>
            <?php endif; ?>
        </div>
        <nav class="header__nav">
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
            <div></div>
        </div>
    </div>
</header>    
<main>




