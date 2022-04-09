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
define( 'AUTH_KEY',         '>C}Sf]g?!vBQ4x 8ZO7%rsm9di3ZcR)Hl]RdF-YByT^2uwr-Gn74V|YW8v@yol`H' );
define( 'SECURE_AUTH_KEY',  'd<J Nns/hKu/*A8Ceai`4&BQ}gGB!C(1&}wN/Q>Kw+?c[t!DXl.B>aY.J/x>zN v' );
define( 'LOGGED_IN_KEY',    ']j}jtlk@#h/[j-d#oKw62 I%C59_ ,`i9h!UcciZ$~!1hIK@buknhsyQu_GDm7o]' );
define( 'NONCE_KEY',        '}G(#f(isS}ak+QbnNdjOk9cxa6 pJ DX|.#hP]kMt~OJ-4n:Mh@o>.2y@)+l}nAm' );
define( 'AUTH_SALT',        '<VQ=$.  n|TACdb52 `m3RPq<WdV9=c]&S=b8*k|l)UJ4pH::E.hN>yR^`1n?8fN' );
define( 'SECURE_AUTH_SALT', ';^a;[wTj)RiYL[#GeNZv:A/ Rene%V~4)R2Dr|C7c<;6HL!rd@9&IGwv$q6vqQyT' );
define( 'LOGGED_IN_SALT',   'kmcj4yCr]Ot{D-wP#A6]0GQ77W[uLgabCdWvp[-26^(vOp/X^;*{Ay)A#1H>U4B&' );
define( 'NONCE_SALT',       '->>!m0?<un4;s3)91i&b[6(&V||6W|SCDrL*[A4Qw~o8-TPe&S}Z[SESYrZ#bk/)' );

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
