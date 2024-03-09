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
define( 'DB_NAME', 'demowp' );

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
define( 'AUTH_KEY',         '5 zOU?]/[0*PJd`GPT-Y%9+!IvMeEJuEYe7je`7PnvV1orhd@yeWNX:<*X6^YO1O' );
define( 'SECURE_AUTH_KEY',  'B,0U$_<mFN:qK&n5#OXk .5]|7EfUc<HD7vIrz5b0/0[0XSFN`@9kZ6)_KU&;&ku' );
define( 'LOGGED_IN_KEY',    '?QrBz7dw6:sq>1hO/}D%F?kSJm7=uIPG7mr)4a-#xN>4-4-6zW)i(i/C=[;h*_7z' );
define( 'NONCE_KEY',        '?GM[!Y-BLw;H)g^y_yIa9#3;d:F]o[zCEX&P]u!NupK ZvLG_o3.o;_$[ PSAUbg' );
define( 'AUTH_SALT',        '$M?wx9aZyrn875)}C{?U`|VrFm[nV_Y2YdC=b,RS D7GUD1,x/v(k<%HMp(T11sB' );
define( 'SECURE_AUTH_SALT', 'r%gA|HMi36PTavdhGrWhfs9k;2f>Rt@t%}^`R6qY<*v/zPcrPDcVE4u4J?$/d.En' );
define( 'LOGGED_IN_SALT',   '.vw1#!/VqXQ1o]k[;UMzU,q&TILA7C)*i^slN`tgg5EvN/iL;~sc0{QNAm&_a+}Q' );
define( 'NONCE_SALT',       '%(]HwzV5]Tf!WGD44*(],}S1@|{^&bvS[FiGc5TWZToF8njh/SDbBB:afk9WWBfa' );

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
