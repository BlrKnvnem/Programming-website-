<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '^g{~Iq)aCZ(Cs.Mh&5t3Eg4 85`.?*,W>szhtlAtU@jON./=R22WV]`rutOyeiHs' );
define( 'SECURE_AUTH_KEY',  'Q5ZnQGA>Ba^C=8(SP#cc)}l/9_F+)#.Qvd$oiB_)iA~gh[,D3>~[y%*1-^&f}vB6' );
define( 'LOGGED_IN_KEY',    'io2Dq+?gg${9rPW5y&vu`HD|}Qz?`.C%+m`yRNup3 Qj;&FB,39_38L~Dz[ZwK|m' );
define( 'NONCE_KEY',        'Id!v5A_sh$U_?h<X>^FyDq!o>I|zIkx@Q;GPv`o#pZdsET]cHwCG0g[w2m@zu#I@' );
define( 'AUTH_SALT',        '^`{sjfz{aVQ.+RkF,N|xNSit1yvaE=PAl9$]A0fd(+xs92>d>u_QoCL61adA~3V(' );
define( 'SECURE_AUTH_SALT', 'hUoNohh/G5bB2(lcG9w^}D^a{&H-|p:6|VxL5jD!7-bZ`Atb?1NpVqom{3,B!G^c' );
define( 'LOGGED_IN_SALT',   'Me+15za3{#ue12DrSiz4*r#9gjb[$b@PjZNe#qN0:qEQLRbbWj)^cF[`p$Z(I.m ' );
define( 'NONCE_SALT',       '9@Ku5&Az+/|L.E->Gy@1#?H5u;K2gRKW/,B7F5<g!(;XTB%No+(dY`15Z?J%<`Bs' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
