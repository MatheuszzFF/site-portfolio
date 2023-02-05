<?php get_header(); 
    //Template Name: Home Page
?>
    <main class="home">
        <!--Banner-->
        <section class="home__banner">
            <div class="bannerBox">
                <div class="d-flex align-items-center justify-content-around">
                    <h2><?php the_field('banner_left_text') ?></h2>
                    <?php 
                        $image = get_field('banner_self_image');
                        $image_url = $image['url'];
                        $image_alt = $image['alt'];
                    
                        if( !empty( $image ) ) {
                            echo <<<IMG
                            <img src="$image_url" alt="$image_alt" />
                            IMG;
                        } 
                    ?>
                    <h2><?php the_field('banner_right_text') ?></h2>
                </div>
            </div>
        </section>
    </main>
<?php get_footer(); ?>