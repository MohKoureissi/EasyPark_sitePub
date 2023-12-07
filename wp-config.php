<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'easypark_wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '/fc6UAjkb.8TU6xK?P$?!?T~cm5kL1PB7[}SXhH*;})?H9e *)M}su3+gYxkCx34' );
define( 'SECURE_AUTH_KEY',  'VHV0~# iani*e`;q0jh(abA;gO!PRF5j9Pv-VJgpVy>E-0SygbxoHP&S1O8C9]&<' );
define( 'LOGGED_IN_KEY',    'e4XQ NTp%/XV)fIftER63Bd{`Q@K(P7C6HR|%bhV}ndJ=m!L_J>`%[]./-^!dRsL' );
define( 'NONCE_KEY',        '*O.)J3]KK@jLmElG!da_=*}l28e_K|$8VI{yNoGH$sAvlFUb{f5M$_]yAb*^>6o5' );
define( 'AUTH_SALT',        'UX:=1j2vN3&CH[m.qN93|8g},mWnPsqMhL4c&nD}H0{X|d%Gd}xx-f,GRKd>HOQX' );
define( 'SECURE_AUTH_SALT', '!C>Jx0;84L/yKp|85@X,#A`TtILnrNUlW.q|4}*ga:2.DufS7|])%=]`%+$`Tee0' );
define( 'LOGGED_IN_SALT',   'pdQ#qfMPxw,`8BM|71FS-Q<nnvH1Yy=+!wcG>O=&1pJQ%:JM.eQz}K2k%Rmg?3F2' );
define( 'NONCE_SALT',       'QP.%Bq?vx>1Q8N> a*47KS9`E<`lQi4!fPLoPae`c]&z5!L+|$f[/oq/TOu/Wswh' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
