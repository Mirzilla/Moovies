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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'moovies' );

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
define( 'AUTH_KEY',         'qTFRId*G5Q1 gyf7H!+M!2ZI:)-VG` L{l+Nk`tW.VADZv~_$5#^TPh+Rllo:yg4' );
define( 'SECURE_AUTH_KEY',  '`0b`PE7DTsiC=tdCl+(<K:ZWgBnaov$)(]KH*3]y~~S=Qmepu0S6A(LSqxR<osXw' );
define( 'LOGGED_IN_KEY',    'Hc`Y3D/rHKnmnL}7^1s@&hM4,4:lt_(Q>6o-zMf4ii?&YgL>f!b+7TM7~vVY.s[!' );
define( 'NONCE_KEY',        'B} FLxCFDG:l+r7vLB=_@_7n6PWToU@#}Tp`RZxfz#9^Fgx0<@P+zJM<pg_ 1HO%' );
define( 'AUTH_SALT',        'nQo%Wg/V2F3,35qL`5sZaV:f:CJZQnwU-Xj*-|C*n|h-Gc8&jd~SzAMeLUVM fML' );
define( 'SECURE_AUTH_SALT', 'tM,]DgHO},|7YWT@Sd>G1`@yWN(8jS3W0* #}My;H~0t.Jlv6OJ*z|q+%,77}/*.' );
define( 'LOGGED_IN_SALT',   'xiOjioTuok]mEaWL8j}IbzKifE$m*/RPS:HqhoQ8P,_=ipX9:,GI|rUW,f#{h!}o' );
define( 'NONCE_SALT',       '2?&J}D#:*EzPU>R30~6*<zsZHf=$ideh7Iu<59 KE<6v;K/FmG0+:m6HW&Z7!g&M' );

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
