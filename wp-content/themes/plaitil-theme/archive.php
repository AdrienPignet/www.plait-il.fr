<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div id="projet-link" class="projets-custom">
	<div class="bg-red-title projet-titre small-12 columns end">
		<h2>Projets</h2>
		<h3>quelques unes de nos réalisations</h3>
	</div>
	<div class="row">
		<div class="projet-intro small-12 large-6 large-offset-3 columns end">
			<p>
				Voici quelques uns des projets dont nous sommes fiers ! Notre équipe Web Design effectue une veille permanente afin de vous faire profiter des dernières tendances et innovations pour un design unique et impactant.
			</p>
		</div>
		<div class="projets-container">
			<?php
				$args = array(
				'post_type' => 'portfolio_item',
				'posts_per_page' => 5,
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
	</div>
</div>

<?php get_footer();
