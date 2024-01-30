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
define( 'DB_NAME', 'Dom' );

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
define( 'AUTH_KEY',         'VM)p1]pwM/mvmS:Q ^2Z,9YV/$O;H.|NcO;vHUeM9Qs@~,0s$T=)@zo#7Q^3|C/f' );
define( 'SECURE_AUTH_KEY',  '$VkW!vH?m],UDhaJ&2WRTQ]~#[[?Ucf+9sw&n}9O@6<5J:{P9|#8YP6{$GXey_L<' );
define( 'LOGGED_IN_KEY',    ')r-r!:vAOXl?-Ev,>K(EP4sIZ9YuTEt#5n.wO2!zPl`}@G=CbZq*8g4;Y46&e:wb' );
define( 'NONCE_KEY',        ']5J-=<CXz:(0oCe^P0[<!,f%+mGqQqqwaI#unk78z!ZsZ8SQ (mdP>7BAsK(/I&8' );
define( 'AUTH_SALT',        '}3|UYg`F`jTP8h087(J&AH{h$DP-`iMGr@9+yuY?c~!$J2jGk(#WOCHy!l!^UzxD' );
define( 'SECURE_AUTH_SALT', 'P;=7_[NEU2^^Wa~}x$>9j?ClpeOB3;!I:{lTdfNx?z};(RWX@t@Rj![[K&]AifI.' );
define( 'LOGGED_IN_SALT',   'A3ETF4`i1eUHOX.H*7i0^DZy;=27IL@P[(QG^|WzRi#.Rf]xiM}]aZr#X(!f`%U$' );
define( 'NONCE_SALT',       'mTZ2%n4j@me)-x@ #5D+dcB(%VfkyIGU|3G$#-HJV3z,*T:2Z[]^ou@mieY1yn4C' );

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
