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
define( 'DB_NAME', 'nkh' );

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
define( 'AUTH_KEY',         'U&<;$el29<LR(u?-4^6JPftxZ}4QMlFrFo5CwgE[3^@CDqq@@IZ/I^8K_gcPnUnD' );
define( 'SECURE_AUTH_KEY',  ':xgjJ35h_!d0Iz#!2A9[<`AXs]Cv{Dq.7k&GPm9TYXvuz!-b[,+|!sx`|4[vc{^H' );
define( 'LOGGED_IN_KEY',    '-Q;Ks1m8Xi4.EEO gK860Q6k^/P6CjCB%;?^<3p#=Q$;.7_^)!yh-UP>3gh&8hws' );
define( 'NONCE_KEY',        'f0RwP~O5:_:VCsuoVF1{hA4#hZz&C3@gH&Kq_8]o}e.t4O9X~c`!Vl<)G@eiCyn{' );
define( 'AUTH_SALT',        '1_E8kPD4:+nl=v}hp-rjhzrX!B#gO|(2#Sm`T+yc!2UR;OMR3WMU:X27Wz=&<T{l' );
define( 'SECURE_AUTH_SALT', '^V4DT(g+,9r[+E%NyuKduvc{c2wLp_)D1;D2L9@7^P(Ya.|+~v{_~;1Hqoy6-dR%' );
define( 'LOGGED_IN_SALT',   'z1a ,iy~^h3f2`@69<R9tI[>`W&`s!^Br T|/ -vb<vq;7aVk55N-Me.RP)ht86G' );
define( 'NONCE_SALT',       ']B]wurL&,[y3W)},D<L7G#!n>Uq[oQthkJ0%oDy7{rR<eZ<oP-vN[vZ8RVo2b`s~' );

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
