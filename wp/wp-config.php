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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

/** Database hostname */
define( 'DB_HOST', 'db' );

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
define('AUTH_KEY',         'ZcB-?Il%^; B}m/ey,7*7z/%xT-6v=]dB|m}a)<1OC&WxMM4Og~G)%)T;h-c)`mY');
define('SECURE_AUTH_KEY',  'zH&9XCQG.fpw*+G).@0(Bts?tH]O./#*3YMo>z8G`s.O+G=>eyx<~2%PiFGMAeV:');
define('LOGGED_IN_KEY',    'qULpG}D=c]4MqPnnS {5W1UTx ;%<E<KTLo%08_j^-LWue+Pao*L`{m.Zq~EooMs');
define('NONCE_KEY',        ')jh}#3G#|0>%1WegeOP/-#R#XmqFh23V|7[CTC]3iG]L3+]{JP!U,MA?:$#>$^jT');
define('AUTH_SALT',        '/$q!LkDX,Lck_D(+scIS.q.:TA1]-HyP(zdO^5b0;~>EM)gd+G3V@1p0lycE0bpd');
define('SECURE_AUTH_SALT', '?zBf2=zcRmqg_]^JL|M0ig>=PDkpMAhzAwBzdm9$Lc$>u9<>+d? +z,=Ds{0:bN>');
define('LOGGED_IN_SALT',   '+Um3IW.Coq<x$7_:.x3%mk)UoIi9mW}?;qt5@yh@ o&k[-WbY+|V[RUt|/;HN5.7');
define('NONCE_SALT',       '/+G)T|wgX?|wJKL`>,rc^{(->n1VY-AN-jWHB+dc6-KC/ Bm$jM?2KQyogXl6c8i');

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

define( 'DISALLOW_FILE_MODS',true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
