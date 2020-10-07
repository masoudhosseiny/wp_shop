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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'site' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'JqT(UxcjK`JdAeV*h7Pg:X;-DT8$epc`SUe#sn7tAx|N=NbI-H(+tpxMW$n_ /Ps' );
define( 'SECURE_AUTH_KEY',  'fjQ/m(@`cC.sk!V$F@J*|@UZOwU+5`,7xaa2FmDxd:eJH:r{#4n;UyWKML}94R:/' );
define( 'LOGGED_IN_KEY',    'm{A^rg]>ks] Mb=>4g?=z~hBKV=[K_7WB-cltid&l8}IL|:#F<jeRPcFw|SP>k#L' );
define( 'NONCE_KEY',        '8*CeMiel^RC9C~;Dt@P$+Q1|^*u)uC^0&G(I<jJ/YpUGv]x%VR1@60uF]W8uU-0}' );
define( 'AUTH_SALT',        'W;;nFaY]:A}yjEyuq_RoAi_@L@oO2&#V+|6<GQ$R)<m$;@cah>*rQh0zYBo=4xG#' );
define( 'SECURE_AUTH_SALT', 'AR(!8IB#N,).DJ5hK`XIXl|?lsdP {|6Wg4>(fY~}4|,7DQczWBDU7YugP/e~pJa' );
define( 'LOGGED_IN_SALT',   'IC3E:s!)gG*=~idDd.2`$D@Gb^dM{) f%2w1.i8dbU7iXqeyxY H3{I!Hw4t<n)q' );
define( 'NONCE_SALT',       'ih%wB`[w/*yn?oL,[,Iw:~rI kDawNj{{-VNMti6r,HUz E 5K_OiRO/cDQ44K@|' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
