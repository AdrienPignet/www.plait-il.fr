<div class="cycle cycle-slideshow custom-cycle" data-cycle-fx="scrollHorz" data-cycle-speed="800" data-cycle-carousel-fluid=true data-cycle-timeout=5000 data-cycle-pause-on-hover="true" data-cycle-slides="> div">
    <?php
        $args = array(
        'post_type' => 'portfolio_item',
        'posts_per_page' => 2,
        );
        $loop = new WP_Query( $args );
        if ( $loop->have_posts() ) {
        while ( $loop->have_posts() ) : $loop->the_post();
        ?>    <div class="slide-item">
                <div class="img-container">
                    <img src="<?php echo get_field('image_slider'); ?>" alt="image slider" />
                </div>
                <div class="text-container">
                    <h2><?php the_title(); ?></h2>
                    <a class="btn-red" href="<?php the_permalink(); ?>">Voir le projet</a>
                </div>
            </div>
        <?php
        endwhile;
        } else {
        echo __( 'Erreur de chargement' );
        }
        wp_reset_query();
    ?>
    <div class="slide-item">
        <div class="img-container">
            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/slide-test/slide03.jpg" alt="" />
        </div>
        <div class="text-container">
            <h2>Vous avez un projet en tête ?</h2>
            <a data-scroll class="btn-red" href="#contact-link">Nous contacter</a>
        </div>
    </div>
</div>
