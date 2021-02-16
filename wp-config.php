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
define( 'DB_NAME', 'cktechnologiebf' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'r?-@Z-I _w_Qaun}Ao,|263(C!2ALxwoLez gpG&9UkM8mybO4t:m1a42`c,O0Zk' );
define( 'SECURE_AUTH_KEY',  '*|$1hFN(KV`~+U[Qi=wf.r7LA_:ib_D4K~BorcwlrB0]qXTb& F)|{7m0DVOzYfT' );
define( 'LOGGED_IN_KEY',    '4uc5vj7421?ov)`Cn^hGWyhakUl@gTW>0D7YaN]2^5J#pH^n5cW<O,[OnINb?I<s' );
define( 'NONCE_KEY',        'lGP|(w4<0o2$eYc^;>TSdzMh> &|~%mjxiRN*hz~4 /mUSKSp[JCE[s?U3s>|l0$' );
define( 'AUTH_SALT',        'XCX&8R#;G$`QM[wBY)-E#^WJIWJTAV[db BM5>(w+/5;m?8k=;O6W:6idZt)M[bL' );
define( 'SECURE_AUTH_SALT', '@w,b5Rm4!!7!y C=bPrTW2&fW1/SX7%aiBv)U@xE38FxEwi@0=wP=hS,H0~SwDY8' );
define( 'LOGGED_IN_SALT',   '<Z~2n1L}pWa/<E/TAF%8yE_9[UB,vO[blhrU3h)`41l:x`%E~fQ2NjjVC*o %KC7' );
define( 'NONCE_SALT',       '[>8T#:NB@4W#!davl6*Fj3`6UU4{8EYg5}7h>ps5X{Zdnt2#1=V6`u9J8Bl4r.kP' );

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
