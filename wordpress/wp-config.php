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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'KEoh)P$_J$s5Zr6LZ2Uu~bw=Z Y=kB?_EoKh^7X_!xx qU1:j_21hb_V,*jR+y9S' );
define( 'SECURE_AUTH_KEY',  'R%2^~%g;Nj kp8>G)+*pQINe-Pd1[4rQ5/sWYF,[C#6G>kn6>,&H|{4Ag41z?RJ$' );
define( 'LOGGED_IN_KEY',    '.9Q72W$?^&DZL#K%$n0jG5w(PgaNo<ZGO@C/q36:;V4l8}}Xy}UVFn&j?)>}]M_S' );
define( 'NONCE_KEY',        '~M6Zi,:*QFxttR;+8)AfY(dg5Rtw9$!eoP0J-LpIk.&C*4xh*+x8yV|^GqiTnq@:' );
define( 'AUTH_SALT',        '2-joX}@b~?-sxQy.gkHuo8+Mdk{Qzk2-6>ln!&7E+- _mxHVO5_$)G~`LyJ8)4WU' );
define( 'SECURE_AUTH_SALT', 'XqfZPQsk6}%4t^l;;fr4VjXv$B,rC+Yz%n.kK@X=!?c8U30G@E.T-xRd#=o6C4qV' );
define( 'LOGGED_IN_SALT',   'evFq1^IQmA.0nN2R{XxP)5?C7=_%}vpbT~_RK*Io(zEQsGlt|Mz,:pF%(ZBvRThc' );
define( 'NONCE_SALT',       'K5`q%?~:5R0YU3.IN>T&UPJ|>?.t2PM1m@g:b9=h:S;-}:jgj7{}W!u9]L7fw+q|' );

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
