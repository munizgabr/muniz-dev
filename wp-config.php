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
define( 'AUTH_KEY',          'T/PS6Sw{A(,RuE#L4hlA>T;_X;&)n(>e<l7+6K4Q2J-/k;uZ|_]34g!|-C!QrAkj' );
define( 'SECURE_AUTH_KEY',   '5vu R@;EiG(!t}_s}+7K1b[b46+KDFL@#PMaIv(H4n/d[=W3I/mN@akOSMLiU.gb' );
define( 'LOGGED_IN_KEY',     '(KQLOOY nB 2Svp9tRS3[O`joTp1:PLf>$^Tk#mBU;`Kc~|JTC,!F<Y(Cpp:3>2I' );
define( 'NONCE_KEY',         'AuW9pl1FseIRz]LQ#Iz*ZYk,kgz;~l+Ekl;w7skiPL.QpWT3h7S-<te/Q5]gjD+K' );
define( 'AUTH_SALT',         'kBMk-YFB)*^0L8raozq!?i1r+up^f U%*xgFQt%QUsxN,0iNM?>*EdxAklXVzW:q' );
define( 'SECURE_AUTH_SALT',  'AyFO{ICw5?L/kys pV+h<|hiygWgBI8CqhF#f3jAUaw@%<MkNaW FWReZ2t[.j ]' );
define( 'LOGGED_IN_SALT',    'x:3}YPHZk>]>gBHJ#7@PsGNSRFyK(39{5c<@#3L5bo,Iw[S7hSHfWqzb]<wIz!&T' );
define( 'NONCE_SALT',        '(M{6*FM)Lu*<|e}^PP.2{8BMxdxEsqAJR c2PHbpaEK+p5XT}3ll.endI:D}Bt2m' );
define( 'WP_CACHE_KEY_SALT', '< 7CG`[#K4d[=f<=f~Nw2G@$C$3*hi1REb8O@h5SeaP ^kNjRD$B?Tl:WcK$$Q6!' );


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
