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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lesaffscom' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         '[b@S>wya{](ljQv(NgOFA[Eq[/bxq]z/*q*Ye01aJF)cseKk u1jTEE.WCW~Q~ D' );
define( 'SECURE_AUTH_KEY',  'J9xv`e|bGJ52.xyGcgP3Mf(,brN34N`V?=;Wz!lM2J^G3(%25=sIC9-y*f!6!:2(' );
define( 'LOGGED_IN_KEY',    '~mrcdI?EpIpc`M_6(2NPo4xbysEgJ<+/>_)zc^gw?xcw~?{fY!SJLz~Jw*G4q>RR' );
define( 'NONCE_KEY',        'zIo[Xhq9rr6cW/P{?z|GglY(D {2{*6d!(g0S|o9$y<F]XSr?gBh< EynpwaYjYS' );
define( 'AUTH_SALT',        ')`t=P=18_ FZ3c} >s_26SjI4+:[l:W-[iw{XLGu2grm =cpVcG<F-(!tTQ5A 5I' );
define( 'SECURE_AUTH_SALT', 'DXoEm=}RBGR>CuhVrM-%yc|xH e<Jd<g[_MP*IDarb_Iwer<M:t4^.rqeI9Z75Y.' );
define( 'LOGGED_IN_SALT',   '_.O)h^HdcMv7&:u8Q%SC^5<<E;`yX~`bLaURz5={eg/0q-,jidUg%4UoJ]S;B? 9' );
define( 'NONCE_SALT',       'U7~t<f<N4=w#3j/(:s.K$1_}6fU8p+%FgHEgzCAwv;LRp5AFVz^WF]jr%H7p|]s*' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
