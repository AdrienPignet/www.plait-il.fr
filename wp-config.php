<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'plaitilbdd');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N'y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '}uU]0hB[%xE>ioWttb@pias..=]SWxM]X&sCZwiaw[@cx)F[,2>rqKW:{=lm?S}]');
define('SECURE_AUTH_KEY',  ')f:&x![nY95PMS_!Q >8/-[)}&e|Zw<QE&?5yh}6}_J1H2ZQch|r0B6qQqXJr:t0');
define('LOGGED_IN_KEY',    'tN0EeA.dATn;]]Z$5 a|Durak+!C;i{rei:_,bdx`wGF+lA@@haKwH6l4f~ydKSt');
define('NONCE_KEY',        '%>(IH>G8$/(??c`[vcIJM*Haxh!f&6gN.~q<[,@MHxY@o8#Z/C*slpxnS-tf_9]x');
define('AUTH_SALT',        'UL6(Nd)trtu=k$&]B&%>QKq:2@?1{YGkN5$H^:+6VLgM9+$$r>aVLwKOn:74Kq)`');
define('SECURE_AUTH_SALT', 'z_I9<NtwiJ+$`X:c3x(bRs3I}EgH`St8]qJ*HJ$&W/hn%_m[IaI?o9X}s;zJ|3e&');
define('LOGGED_IN_SALT',   'i;4sAZG(b<>h^/(x/.OC1{jde@IF(aT8(zl/0-T?+);9RranKCyb,_d$98#C7yac');
define('NONCE_SALT',       '90zizqR%bFllPMDjxLE gX=/<E>n@&3Ro/Woyv%}^4r#zV7<]#Y.VAqkuN!jl.):');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'plaitil_2k16_wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
