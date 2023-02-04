<?php get_header(); ?>
    <main class="home">
        <!--Banner-->
        <section class="home__banner">
            <div class="bannerBox">
                <div class="d-flex">
                    <h2><?php the_field('banner_left_text') ?></h2>
                    <img src="<?php the_field('banner_image_self') ?>" alt="">
                    <h2><?php the_field('banner_right_image') ?></h2>
                </div>
            </div>
        </section>
    </main>
<?php get_footer(); ?>