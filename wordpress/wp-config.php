<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'tp1' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'L(v.a/[3KQ[AHCOIm1{6RV4PV{6c4jdq|OFr=veq6RF`Jvgcq>h^bQDb>fp:HH*P' );
define( 'SECURE_AUTH_KEY',  '+Ib>zY6pVS_2Mb[*A1igvl;`| Q7HtE`^B4G0qOMVlE/ Du{osZ7#Z91R_,U0Xuu' );
define( 'LOGGED_IN_KEY',    'h:<<wGA9mgy^Jw^>X>!0lWjv,eKQdc=P@cQ|oSS<|xt<%x.UI8K2a qMaoL)=(7w' );
define( 'NONCE_KEY',        'XMCS!@d5AewUSq2v~xjml@awpPF]k%S_>@KzQZEK$Q;y}0x*3t~.17u&G+[-3{!e' );
define( 'AUTH_SALT',        'LC(qkKg-QMzkXEl{gs2?!RtjUG^,b~jb}lq%p9qsHkEQNNjvY=jHrW0uR,W6>a&K' );
define( 'SECURE_AUTH_SALT', 'Ww}7][xT:2=42k,mj6<qhbh:& )sQwtU/|GJn@w|U!@>S3JDO6.v%Wh58iv[M(qD' );
define( 'LOGGED_IN_SALT',   '[0$sBTK{X>-ZC6~]&-y82U0C;{_Lxc,JY:Wq~;VOr+CF0gE.G,ReQb+,.D1_flFD' );
define( 'NONCE_SALT',       'mO{#cw>4%M<@1:a},N+0Y@Li~<9b)Qjtv1@v!k,>6m$P?v6s2D8|#&?7M>saTA?*' );
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
