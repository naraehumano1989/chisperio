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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'AZ]m`tLa.qkE7Ig</9h5e*oSh@p:dxE7SYXinbzs1x~bdo+aLdIHWoP<efGg2sP3' );
define( 'SECURE_AUTH_KEY',   'K+l>$s1R/,tFBH!k&3Qi(#a3fSwVl^iUsnK|`$R:%q!=#MEaFml[>G&YPb5(3<$?' );
define( 'LOGGED_IN_KEY',     'eDC)kmlVamM04Vh% KB1F=u^s!(AQfOg9)lC5E&V$xI^L(T8Uh`m`D;ePho:{>Bx' );
define( 'NONCE_KEY',         'VPA)!x2.dHIn/a>g27-zNl#Vio}`97M!R+7q!K6h7G1x_O3]}-6/[Wa-XI%KyI W' );
define( 'AUTH_SALT',         '%s]Uj0kB0KTC(1ccz_y|TD{B]Xg{f`Rav$lMw9gmS]ay0(z&[Z7u`4f$b|Fo4u&!' );
define( 'SECURE_AUTH_SALT',  'd$@t9]CjG^iXhMe7muZ+4_j7jw1oL#YJ FZ`G(x$E^6E2=k@#g,7o%Qq=qEE!RGg' );
define( 'LOGGED_IN_SALT',    'Rs%LW03hy.^Ao5-(Hj`8MR?cp Bz(x02`[:,41RBSZK@Kkc3#f<v%oF.!]%)$fCL' );
define( 'NONCE_SALT',        'e2 JQ#i1iO`y!Bt,5?oJv-T%4FM;6g d&>aEsHwB`q~:Rnh[ grP/W&U Nx#:d2h' );
define( 'WP_CACHE_KEY_SALT', 'x[(2%o!5ycD3$mau >D!g5HF7g`)SD^>,9h47dbvyl#gKb[E_KJ3 <6$]YttGdI*' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
