<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'kbanuwat_DASHA' );

/** Database username */
define( 'DB_USER', 'kbanuwat_DASHA' );

/** Database password */
define( 'DB_PASSWORD', 'K)uJNTHjMctM' );

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
define( 'AUTH_KEY',         'CQ>}Z52TKM2>Ytf>HWWnFtZk{G^J8015r4W[~DBvCdgOc}..,UFsvP5|<!`XY6cy' );
define( 'SECURE_AUTH_KEY',  'K[UI86w#U^CvXwYxBTjr{<]ZD@  L{3y}-Q2iRR_1~XRT5?B[5sCzKa]@j>({0kk' );
define( 'LOGGED_IN_KEY',    'Qe{UoQ:SW_xgo?3iti;5+B,D3tif|.FNaSMJQ1b<}+V&LkaWML_PC7|rwFI(@l-Z' );
define( 'NONCE_KEY',        '`ljd*N_ZqK7li=W/sc$(|NJd1~9qztOuFHjv 3&uMHHW+[K]0bngc}Oo$#q)!-Zx' );
define( 'AUTH_SALT',        '.jrnOR^Tb)9|D<cOoYAP.!Sv$6pA.3TzK1{wqEES%T0H.eGTXCwXy=ee?k$YK`NZ' );
define( 'SECURE_AUTH_SALT', '/t;4U$Id9AL<STmIGF}g2A{+W_Qk6L  * braI-CWJ8F6M h$&*D=?><(ccMo^B;' );
define( 'LOGGED_IN_SALT',   '{tYfJE7#!o#eZ[S90hXmOcIzC3TCmdrq>E)u|pDr)r:-1+j4VU.|_ns7}-{Fa/y)' );
define( 'NONCE_SALT',       'wWKckXxsyP/,xM 2#`|h2bzs44qCFtDwb(Eu w3:}H4J97k&X.rfG=qBk;pL>7*L' );

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
