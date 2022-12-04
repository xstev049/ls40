<?php
define( 'WP_CACHE', true ); // Added by WP Rocket

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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'f161579' );

/** Database username */
define( 'DB_USER', 'f161579' );

/** Database password */
define( 'DB_PASSWORD', '5sR2HLgx' );

/** Database hostname */
define( 'DB_HOST', 'a046um.forpsi.com' );

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
define( 'AUTH_KEY',         '_n][f`P^ u:TKTu1o|!?S$qv)3bd-O!Ng9O/?g)}(7[C=~2PMkE#m_Dp>M-wlrSW' );
define( 'SECURE_AUTH_KEY',  '* 36ml~9cbvaz_+u]qIdf^^wvv:B0 bL*brQO;p|[!tqXab477P4#}J+%gnxw7ve' );
define( 'LOGGED_IN_KEY',    'G&CM1xKiqsScW=QAl}f~!swVjkIA lM/zyjhmuJX/L3/O@9<7szAhQ6mzLVe1 F@' );
define( 'NONCE_KEY',        'j3[J2qH`w7Zj~/)6+}/g#Jf8szcT6G#q^n.oQvBl^rHh:4/O:+kkFd$Xe`v*wv`x' );
define( 'AUTH_SALT',        '|mrZ_/2F4GW`j|2MF,(`yW(*}c&--vHEF}a>}L$OnKUxLd<K)_u`g2-leAP5y}FK' );
define( 'SECURE_AUTH_SALT', 'do[kLdnA?bbT0.u0Rokp[3DL9^Q-8)yviA?H$yvIi))q=wmHhkRCFA^WSbfDi)FE' );
define( 'LOGGED_IN_SALT',   'o$69@py[EifqK3H-k:>`E6y=_0tG<rTBxNRy?c3!co8B0x5Itu=VELB1=^;[`a~@' );
define( 'NONCE_SALT',       'SC+otMz-C/vbAMq{[U&SLW>QJM]1Uo*6}Z9_!4?;wZyp0%9XU$]|]q:lHbw4RQ2#' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ls40';

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
