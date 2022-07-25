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
define( 'DB_NAME', 'rompecabeza' );

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
define( 'AUTH_KEY',         'kxYD!RT)4a|4^cw-o[oAHbxF]B~zGbPx@;_r$Q+}8^vaLN$]4Llr~<[,KVSOSF>F' );
define( 'SECURE_AUTH_KEY',  'e;qJAOvn!$cI,vl>_`,ZVYhK;?Z*R,$hfFvNwh?F(O3fH`=2_,Vkj|&1Xdv9g^&o' );
define( 'LOGGED_IN_KEY',    'AEZq^vgq;5F6)Qf-0+:H]y<4Z$gOM_DH5:N}](rCN(%Oie`EO*8|N21RMWa9RJm.' );
define( 'NONCE_KEY',        'Nt|t4)j0f&Ayt$.vufevD2HL|~+B:G%n7a9B?NXQsV:By~W F@>/&_km=Lsk!N7l' );
define( 'AUTH_SALT',        'N.4)X.tkKxE]DF=shJ~wx=/:,1/G`RhQK14,fpTKx@RBMu_t1#`>v+&&of@a~],2' );
define( 'SECURE_AUTH_SALT', 'KTkA?CYQxIbN],nbqFy--!KzBjug~;{p0_CiI6$CVtML~T!:ay_Z@ ]p0DA)U9IP' );
define( 'LOGGED_IN_SALT',   'l__XyeZ8|8415>j=%%KT%5~]S-!VGW?=rF Pj1)$a5Yr$&1zc?1=U3}!9Qu#~LmH' );
define( 'NONCE_SALT',       'KT*iDSlgv<!N1PGJ,#2X?YCB@y,/O#BD#l` R!j;7uWju%I#8d 0QZ:&D9Ti3pxf' );

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
