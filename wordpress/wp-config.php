<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '=!GTp1%i[Hw(rJu}~UdR{7g%v6G^DuOA+)c[H9Fu.,Z#5{|YU!aZx#C_lw8p+%5]' );
define( 'SECURE_AUTH_KEY',  '(FY%v#7-MM/|Hqd>(>Ty.3c_t8~V;=[+dEUyJ?nZvo}?tGslIx_WM(w[k:i@J9(e' );
define( 'LOGGED_IN_KEY',    '+CuK_dnv _ye1Gl-/>i9`J8ML-WLrsA[P].nCB0/>h=pYV/Jcy^N|H-zeH] |AJ-' );
define( 'NONCE_KEY',        '@8v$;$Vb<M,h#[Z4AwaLO 5}bkb(e]s_5.G-f#bU#)19K6;5`M/xo(Z&{VrDpmTm' );
define( 'AUTH_SALT',        '1,S*4jcOJEgZw[##@tW;aTyHNb;PC.d$~Oy9zT]js,-m7*-@Q+m A-jq&(_W7+_:' );
define( 'SECURE_AUTH_SALT', 'LV*(]D#ya|p8<4$RO6{S V hjdf2TuG)z`LJ;9XM+rOG{Ql/jJ_PR!w-HP37*>`m' );
define( 'LOGGED_IN_SALT',   '5lN?})$RTzQ6y-IV~G`xTQh|U{s`#+fk<3lACfunF]~L-1^j~OV|hBx0<_$bUNAI' );
define( 'NONCE_SALT',       'UQo`7/1e52-Pr#b;+ Kyf~#;|h{=v?y520IFJrdLe@)PhJLc)#SlD?(3V6H0R)^)' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
