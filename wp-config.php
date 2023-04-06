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
define( 'DB_NAME', 'dbproyecto' );

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
define( 'AUTH_KEY',         '/03.!-2jZPT.L,>}6rfKRaQoK^q-6{:-P7Z]Ao||v-FT%`*PMd]d69JM}EBeHcQW' );
define( 'SECURE_AUTH_KEY',  '#/A5^i(D[Z-%]S>lvPL=2Yr1`;!;rs?h*WcfrpUV;PY/-pGoQ$Pn~$t%Ob>|AXGD' );
define( 'LOGGED_IN_KEY',    '`:$>wC9wv`j8LHe}}&|u[1&Va^&,*H/TQx+IX6^ht0vKE;V(^P=EWF}=Ao5)N`8S' );
define( 'NONCE_KEY',        'T@jHz#xOK2>Q~.^fHU9^~3jE]+C`3LY+ASu4`?D1dQ3*:@v#L~ih6r{3Vm/7iyG}' );
define( 'AUTH_SALT',        'O8kC-[[`1@ErhVHKxl0Bxu]HcD;aiAR)DX4/m`S>87c V<Xi/0cg#&a6Iqu<FcT;' );
define( 'SECURE_AUTH_SALT', 'GJP3uMkf$i+K%a/OfFSRF@=i+`:?+Nw^o,C#]ffMp5O*VH[gR4}^nN``f2f7AZ$m' );
define( 'LOGGED_IN_SALT',   'Ps-?HBYzFA88/It,Zi~#)UbAEi!qHj*}7p/MPCVF.%c8IZgVK)*CS!v%3,]=^hF5' );
define( 'NONCE_SALT',       'gm*`:0<p~i,71n^JyA&Dm:OvSyjMfX&I:ITVkMX;uvC)dR8W|~W&+/2rjtcLpQt/' );

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
