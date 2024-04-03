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
define( 'DB_NAME', 'wpGH21A' );

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
define( 'AUTH_KEY',         'qzq-|.p=s%QSHdHQ=G.p@1r!s HE$HoS)?aMUc85_yx?OQ6q3V8u)[&R5S@Xf((.' );
define( 'SECURE_AUTH_KEY',  '4)%nt/n~V+)L(&f$lfu|U]V%@ZPQME$& y@9`|cpBDr!r5%[]zb(%bI)cx&7]VE]' );
define( 'LOGGED_IN_KEY',    ':WPmmbL`o3B6@6kzAipPq]gv)l}1]}rI>l)oM%%4i}1]Os>al |Y_xa1B&U?aA<G' );
define( 'NONCE_KEY',        'A ;[9nxeuUzS+Hj.$c=!sE;_w;5U$^EXSt4y(@=T(i=)(oKeP/KS&3U3}~]5i5xg' );
define( 'AUTH_SALT',        '<fuD%h8yk99#N+L^+<!Q6*k@]_ijtt6M5Ex&W)*Ip%nsQG3TBEYD-OV-yektMF@N' );
define( 'SECURE_AUTH_SALT', 'b,q H[c*%,N#FXFilY39`$9 hUQMn4tRPZu;fJ~3Wy<Vlg%,qlR9tWp&|&v1(G5N' );
define( 'LOGGED_IN_SALT',   '#2UDa_v*gys7N>].*~8Y[X@2trq>MumP>hIEkU,QYa=EJxFXz789zSziq@Wjq;!|' );
define( 'NONCE_SALT',       'Ees:,6GKqH2]M~a=>}ls;X<jG9v2pj;+%Gvf_j89:P#cabH2hoF)x.=2sxR@P/w=' );

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
