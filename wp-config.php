<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'markentum' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:8889' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'dR^m1yTqEO.X8Bi]3wwbI@4n-:xPOJLu*Uyu*1^bRf+qv( JjQnOLc]1 U2+-wo*' );
define( 'SECURE_AUTH_KEY',  'Q]jMA11h4e<^yf`rCw1-n;Ecl8W}y/Jq6ke;:p> [|:RwA2[$08o3^d9k7MxX]F.' );
define( 'LOGGED_IN_KEY',    'Wmgm<d:uzq(YH3I4`)hb20)KlXEaA>M0@|;J9KjjNi7=Xez!-vN/Ie&JWvR 28uQ' );
define( 'NONCE_KEY',        'Shmr<q87 8BO9tTRl`X~ByE6BYXa,iKh_uYj2s*j@XS=K3Le|E9&h=Q!=&/rQXzX' );
define( 'AUTH_SALT',        '|PWu=4+JSs`vKqXV,T(t/t)HEqml8>O([cr=Q/;PK;CkEt^B+<fzG]Kr(Z!2=e.4' );
define( 'SECURE_AUTH_SALT', '9vG_.UXHj<D=+/f/chu?aXj>l:f_9~AmCFijWqzCCGj0]Zqd{9@r?&:n^f2BW`Ss' );
define( 'LOGGED_IN_SALT',   'ZQ<X bq26q,xvHpJ<ro%IW8E}*4(-JIV2T*6qbT)F/K<_>}&/|75A~/AQS=2|I6L' );
define( 'NONCE_SALT',       'FnmX(U/<m[XP}+:`LO9T2Bw)S~P{2s{a&bhFkzz60- J2WW`bFDP[PIJK_P08d|L' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
