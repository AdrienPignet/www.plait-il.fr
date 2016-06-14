<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header('single'); ?>
<div class="clear"></div>
<div class="filtres-custom">
	<div class="row">
		<div class="small-12 medium-6 large-5 columns end">
			<h4>Caractéristiques</h4>
			<span class="carac-custom"><?php the_category( ' / ' ); ?></span>
		</div>
		<div class="small-12 medium-2 columns end div-date-custom">
			<h4>Date</h4>
			<span class="date-custom"><?php echo get_field('date_projet'); ?></span>
		</div>
		<div class="small-12 medium-2 columns end btn-container">
			<a class="btn-red-mini" href="<?php echo get_field('url_du_site'); ?>" target="_blank">Voir le site</a>
		</div>
		<div class="small-12 medium-2 columns end btn-container">
			<a class="btn-red-mini" href="#">Partager</a>
		</div>
	</div>
</div>
<div class="row">
	<div class="small-12 medium-12 large-6 large-offset-3 columns end text-container-custom">
		<?php
			if ( have_posts() ) {
			while ( have_posts() ) : the_post();
				the_content();
			endwhile;
			} else {
			echo __( 'Erreur de chargement' );
			}
			wp_reset_query();
		?>
	</div>
	<div class="small-12 medium-12 large-8 large-offset-2 columns end portfolio-container">
		<span class="red-bar"></span>
		<a data-toggle="exempleModal1"><img src="<?php echo get_field('image_du_portfolio_01'); ?>" alt="" /></a>
		<div class="clear espace-40"></div>
		<a data-toggle="exempleModal2"><img src="<?php echo get_field('image_du_portfolio_02'); ?>" alt="" /></a>
		<div class="clear espace-40"></div>
		<a data-toggle="exempleModal3"><img src="<?php echo get_field('image_du_portfolio_03'); ?>" alt="" /></a>
	</div>
	<div class="full reveal" id="exempleModal1" data-reveal>
		<img src="<?php echo get_field('image_du_portfolio_01'); ?>" alt="" />
		<button class="close-button" data-close aria-label="Close reveal" type="button">
	    	<span aria-hidden="true"></span>
	  	</button>
	</div>
	<div class="full reveal" id="exempleModal2" data-reveal>
		<img src="<?php echo get_field('image_du_portfolio_02'); ?>" alt="" />
		<button class="close-button" data-close aria-label="Close reveal" type="button">
	    	<span aria-hidden="true"></span>
	  	</button>
	</div>
	<div class="full reveal" id="exempleModal3" data-reveal>
		<img src="<?php echo get_field('image_du_portfolio_03'); ?>" alt="" />
		<button class="close-button" data-close aria-label="Close reveal" type="button">
	    	<span aria-hidden="true"></span>
	  	</button>
	</div>
	<div class="clear"></div>
	<div class="projets-custom autre-custom">
		<div class="bg-red-title projet-titre small-12 columns end">
			<h2>Autres projets</h2>
		</div>
		<div class="projets-container">
			<?php
				$args = array(
				'post_type' => 'portfolio_item',
				'posts_per_page' => 3,
				);
				$loop = new WP_Query( $args );
				if ( $loop->have_posts() ) {
				while ( $loop->have_posts() ) : $loop->the_post();
				get_template_part( 'template-parts/projets-mini', get_post_format() );

				endwhile;
				} else {
				echo __( 'Erreur de chargement' );
				}
				wp_reset_query();
			?>
		</div>
		<div class="small-12 columns end portfolio-back">
			<a class="btn-red" href="<?php echo esc_url( home_url('/')); ?>#projet-link">Retour aux projets</a>
		</div>
	</div>
</div>

<div class="clear"></div>
<?php get_footer();
