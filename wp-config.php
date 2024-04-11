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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'webservices' );

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
define( 'AUTH_KEY',         'aC+4,JkOk@HK{Ey(#p39zWd9Tf(Xz,[@SOj)Y&!@)XIE).%yn=1laxfmVt=+- ^a' );
define( 'SECURE_AUTH_KEY',  '-C,K-=|PJwn$dOnoIp7TWOBEfMy8~&O.!PytR(LhE/O3Cm; nE;[!Q2|qYl@on t' );
define( 'LOGGED_IN_KEY',    '@^cZymTcj|7UNpNBX(tyDvnu$:<}1fnIi%G>wDUA0T_$auWBR!olKV*l[r$1^@zt' );
define( 'NONCE_KEY',        '3hq?~ywpLw<lY+;TPqi5gg,faLMadWfm!2u-Arm>g/*J;s3v@.@oH70PqjPV6v$f' );
define( 'AUTH_SALT',        '!gN.#Tqq Mw1^}gHm8usF36:t7l*+JMtr pYo8E@dUJpZ6;r)_tt#E;U^UmjGGjU' );
define( 'SECURE_AUTH_SALT', 'XoDYGs$Rv::!kHe0i<^P7z]P3N0LMQlzIc4e%8fYd$.Uz^-n_^C]+2>fiHC57CVW' );
define( 'LOGGED_IN_SALT',   '/(!3Efz/*k2P0ymTkDRV}BbEG9{!S`lJgU(I/ygQ/yC{ab6JBRe.QXB%]|]5N<<;' );
define( 'NONCE_SALT',       '@FxFxg~GqR5|-v]BNjD!&{y90/>*pCeh]V|lW{9<w38;WgA~*#D.2:hi^q(x&/Bx' );

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
