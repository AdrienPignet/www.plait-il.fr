<div data-scrollreveal="enter bottom over 1s and move 100px" class="projet-mini small-12 medium-6 large-4 columns end">
    <a class="on-hover" href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail(); ?>
        <span>
            <div class="projet-titre">
                <h2><?php the_title(); ?></h2>
                <h3><?php echo get_field('sous_titre_du_projet'); ?></h3>
            </div>
        </span>
    </a>
    <a href="<?php the_permalink(); ?>" class="btn-discover">Voir +</a>
</div>
