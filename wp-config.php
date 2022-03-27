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
define( 'DB_NAME', 'it' );

/** Database username */
define( 'DB_USER', 'Ridwan' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         '# E-nQxI7_yGQw0m8Qlo{yu5%jm.Ic^d%p&iZ L11J&5/ Z4~}m,}+9DB#=Kf98J' );
define( 'SECURE_AUTH_KEY',  '}I~&jJKYQvt-YK.^pSRw(HV@<m+O7e4km^sN65$!jtF6!0lR@!uz]rkelVV<NxH(' );
define( 'LOGGED_IN_KEY',    ';unaTzc rH:w}.?(x*wULq>UHmU ;3Sp:aG^B3qcQ2#?.v0.nU#c=Yf>p+y7iF}*' );
define( 'NONCE_KEY',        '3d=yn8RIeGj[WGsw:%zu?(%p]R5mA]PgtL(]j0}&shcwVP~+@~]jfw%|9.*gW-;G' );
define( 'AUTH_SALT',        '.m6Mvq}e|SfwLdGqzRT07xN2~UE}z%vXR*5`Wyf6KY3,BhM/(:<vn>!*AiM[|9F/' );
define( 'SECURE_AUTH_SALT', 'T o FdSATMFd`_79<*6[Vgx/eQcI4QitI`g9d)grs*-}tS.RXVB[5t?Adog>p#DN' );
define( 'LOGGED_IN_SALT',   'qkNKtdc~QFy!_Y.ON3~y/aXw=|kALpO[9hIT&<+.DrFrO~!Vb6BNw[JmUPG<N4WR' );
define( 'NONCE_SALT',       'c6-c>Z.TmJwwZSX^ZJfzlTA_n>1m*$yIGs>@7!8zuvN90,:Q;^l;cFNbggC.;NVm' );

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
