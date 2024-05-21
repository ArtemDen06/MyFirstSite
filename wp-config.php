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
define( 'DB_NAME', 'ArtemDen' );

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
define( 'AUTH_KEY',         'B}BP6eE]y~<2JN9,LU[U EK9bEbUNAR;12Suj:HVbS^]?y0R_p,~QV#|DXmhtx36' );
define( 'SECURE_AUTH_KEY',  '@1&l~?lHEcW Ra- VN7M6>~-4g=_P7d6%M2)*7~+2wjl^N^9s9ABTjS/K.*-7@M+' );
define( 'LOGGED_IN_KEY',    'c25l5WK(lS[D!)oy~|I{!W&)ZOPah[A)2n0n4y2mCOQ|d`-Q+}G?+zQ~SNT;:zO>' );
define( 'NONCE_KEY',        'gPe%sqlPvRSmI{Z.0:z!sPwo `6net:fU5abs@ie3h}K?yix~kk*T;Cih4;Xw_TG' );
define( 'AUTH_SALT',        '#5H$$WPYlk[T`FpI-})<,EwLh|Jlwkw:~HRu`Pz&w$fH#_X7+/!Coqit1KbIga9a' );
define( 'SECURE_AUTH_SALT', 'T%9@h|m#?~GdNJ)v}`uWh&&Pq[i|(JEKtO{,TI?A_2jVtmoQ-vHl0^E&[^SylED*' );
define( 'LOGGED_IN_SALT',   'Z2atlQiI4,E9[DGxfnJZ{C_v(611Ik(62-.@kYd$l/S7!:8&p:i6IrTAjSWUO(Xp' );
define( 'NONCE_SALT',       'PqsOi`UC!ZQDSS[d%9<q Xd~g$sz+__rcr}nh<p?7Z2/<Q,@$9y)j7-j:{?X#zWz' );

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
