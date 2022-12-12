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
define( 'DB_NAME', 'bd31w' );

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
define( 'AUTH_KEY',         'v9mK0`ar[_$!.RftaoR-MN)n{@`Xp`^+ki 2V3: Uts7$YVrQz7[Dcc(ZI=i~KqE' );
define( 'SECURE_AUTH_KEY',  'E4z:K<2^y%tRay)S%(;?R41a#-bgR+)X1`(}rmPorar$Ikrt^/W.Rx<~jNbu-DY2' );
define( 'LOGGED_IN_KEY',    'j^VI]=oPhr!|N@m~@&pyWR6EN!; r$$HPSg8}YU+Y1|K7{3;_T,]O^u;xI::.6s7' );
define( 'NONCE_KEY',        '}+^!nK^Wz wSv #&u9_duf%}E7gLO<2g%n-K.Dvs-ivAE7Vh&uL^Qs#qQz[m_gWS' );
define( 'AUTH_SALT',        'F#W:2{d30l$#fzu:2-F/-<1mMPfji=s{zdXAs/EoL`]nR 3!Vt4n6!j-kxB~n&Zk' );
define( 'SECURE_AUTH_SALT', '{$s@UrL}{0Ks@0+U$3`qq~~3xQ4t:{oiP1,6@2!W!) |I[SZ&LBoUBin=85_gN6r' );
define( 'LOGGED_IN_SALT',   'MPj}KZHeemwum36L.K1Bm#9ls>FkT,Mgm,mxli77s#YY4W+%XrQ2Vgm[.(V3lq:i' );
define( 'NONCE_SALT',       '@xX/6d^,{dUKc3mGwnO<Y(mo^>WCOj/xc};ynx1`},=MAjE]aSaG KMPoYwv21Tp' );
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
