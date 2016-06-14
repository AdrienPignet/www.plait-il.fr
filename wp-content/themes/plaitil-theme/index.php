<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div id="apropos-link" class="row">
	<!-- DEBUT TITRE SITE -->
	<div  class="main-titre container-custom">
		<div data-scrollreveal="enter top over 1s and move 100px" class="small-6 medium-6 columns end agency-custom">
			<h2>Agence</h2>
		</div>
		<div data-scrollreveal="enter bottom over 1s and move 100px" class="small-6 medium-6 columns end logo-custom">
			<img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/logo/logo-fond-clair.svg" alt="Logo Plait-il?" />
		</div>
		<div class="small-12 columns end baseline-custom">
			<h3>exploratrice en web depuis 2005</h3>
		</div>
		<span class="red-bar"></span>
	</div>
	<!-- FIN TITRE SITE -->
	<div class="clear"></div>
	<!-- DEBUT A PROPOS-->
	<div class="apropos-custom">
		<div data-scrollreveal="enter bottom over 1s and move 100px" class="small-12 medium-6 columns end agency-img">
			<img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/agency/apropos.jpg" alt="Image agence" />
		</div>
		<div data-scrollreveal="enter top over 1s and move 100px" class="small-12 medium-6 columns end text-container-custom">
			<p>
				Faites confiance à une agence expérimentée, pour qui le web n’a plus de secret. Grâce à notre équipe de professionnels, nous pouvons prendre en charge l’intégralité de votre projet.
			</p>
			<p>
				L’agence “plait-il?” réunit un collectif de professionnels et vous accompagne sur toute la chaîne de communication, de votre identité visuelle à votre stratégie digitale. Chaque projet, chaque client est unique. Pour chacun, nous mettons en œuvre une méthodologie structurée et sur-mesure. Elle garantit un pilotage efficace et le respect de nos engagements.
			</p>
			<p>
				Chez “Plait-il?”, nous cultivons les paradoxes : sérieux et bonne humeur, rigueur et créativité, autonomie et esprit d’équipe sont les valeurs que nous partageons, en exerçant tous les jours nos métiers si différents. Vous vous reconnaissez ? Il est une promesse que nous pouvons vous faire : vous n’allez pas vous ennuyer !
			</p>
			<div class="small-12 medium-6 columns end btn-container">
				<a data-scroll class="btn-red" href="#projet-link">Nos projets</a>
			</div>
			<div class="small-12 medium-6 columns end btn-container">
				<a data-scroll class="btn-red" href="#contact-link">Contact</a>
			</div>
		</div>
	</div>
	<div id="projet-link"></div>
	<!-- FIN A PROPOS-->
	<div  class="clear"></div>
	<!-- DEBUT NOS PROJETS-->
	<div  class="projets-custom">
		<div class="bg-red-title projet-titre small-12 columns end">
			<h2>Projets</h2>
			<h3>quelques unes de nos réalisations</h3>
		</div>
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
	<!-- FIN NOS PROJETS-->
	<div class="clear"></div>
	<!-- DEBUT CONTACT -->
	<div id="contact-link" class="contact-container">
		<div class="bg-red-title contact-titre small-12 columns end">
			<h2>Contact</h2>
			<h3>Ne soyez pas timide !</h3>
		</div>
		<div class="contact-intro small-12 large-6 large-offset-3 columns end">
			<p>
				Nous pouvons vous aider à concrétiser votre projet. Nous vous accompagnerons et développerons votre projet de façon à le rendre unique !
			</p>
		</div>
		<div data-scrollreveal="enter left over 1s and move 100px" class="contact-form-custom small-12 large-6 large-offset-3 columns end">
			<?php echo do_shortcode('[contact-form-7 id="4" title="Formulaire de contact"]'); ?>
		</div>
	</div>
	<!-- FIN CONTACT -->
</div>

<div class="clear"></div>
<?php get_footer();
