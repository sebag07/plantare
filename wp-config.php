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
define( 'AUTH_KEY',          'v>]ZubhaVo(QU1c4f9&c!D[)914GDNb.*]+OgG&N4zdtnCu91!Lrse-tB>H{3uK5' );
define( 'SECURE_AUTH_KEY',   'xQ??8^{cp>F)y/~+lwqZJQ@c?f2|G3SwYLbcu&W2a;*(bih@BEau$]u3HGD}!1z.' );
define( 'LOGGED_IN_KEY',     'kZH,v4SQ-dt7vBfG_:mY;4[#KeIW.v#/V1qcEeXx6IL;Zc~cOs,cTdeIW,Fkdz(0' );
define( 'NONCE_KEY',         'i,: v53K~`5wbUq?pg6zFbmD`=MT#<Uo9bn!e-TEb5d0(mh$;ewZ1;(qZpS;/jS@' );
define( 'AUTH_SALT',         '(u<*7Ckn{cdU:E H{<Y.Jqz14v@4}5T:WL[d~kMxq2mb2 Ie36&Gl.{+]Bhe5 ze' );
define( 'SECURE_AUTH_SALT',  '/R19(i641(YP^[x3o~m+ V,)edmSvv@*q2 J-*7DuSS*#DRd%y]?-lz,[B,/ej_4' );
define( 'LOGGED_IN_SALT',    'iV=&Cc/awA@9mTydKq3&TLKg>W@~BDb2SX4LQ]@w0>@mXv3vGMb60[M>U{tz7w#k' );
define( 'NONCE_SALT',        'jejz9QoGSR1ld[|m^vI&6eBJ97C]S+FyMTr`g5H~m]+Bc$@EjHP4^E`]q*`tq{pK' );
define( 'WP_CACHE_KEY_SALT', '?=n^zne{fU]pX=wm2m+hoN<^D.,3Y ekXfQ4Xdzm._HJd6{0bJ5(8@@ *sNU_uBi' );


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
