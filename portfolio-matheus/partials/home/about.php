<!-- ABOUT -->
<section class='home__about'>
    <div class="container">
        <h2><?php the_field('home_about_title'); ?></h2>
        <div class="grid">
            <div class="selfImage">
                <?php 
                    $about_image = get_field('home_about_image');
                    $about_image_url = $about_image['url'];
                    $about_image_alt = $about_image['alt'];
                
                    if( !empty( $about_image ) ) {
                        echo <<<IMG
                        <img src="$about_image_url" alt="$about_image_alt" />
                        IMG;
                    } 
                ?>
            </div>

            <div class="tabs">
                <nav class="tabs__nav">
                    <ul class="menu">
                        <li tab-nav="university active">
                            <figure>
                                <img src="<?= get_template_directory_uri(); ?>/img/formatura.png" alt="">
                            </figure>
                        </li>
                        <li tab-nav="dev">
                            <figure>
                                <img src="<?= get_template_directory_uri(); ?>/img/Icon.png" alt="">
                            </figure>
                        </li>
                        <li tab-nav="gym">
                            <figure>
                                <img src="<?= get_template_directory_uri(); ?>/img/gym.png" alt="">
                            </figure>
                        </li>
                    </ul>
                </nav>

                <div class="tab__content">
                    <div class="content active" tab-content="university">
                        <?php the_field('university_editor') ?>
                    </div>
                    <div class="content" tab-content="dev">
                        <?php the_field('dev_editor') ?>
                    </div>
                    <div class="content" tab-content="gym">
                        <?php the_field('gym_editor') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
