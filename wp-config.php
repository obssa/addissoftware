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
define( 'DB_NAME', 'addissoftware' );

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
define( 'AUTH_KEY',         'NiwN8I39n]0o%w7jSu;[HEi10o3|}Klh~BeJ5jaYh4`eT087f6OZ@00f#>,4Os2}' );
define( 'SECURE_AUTH_KEY',  ',Kfo*UhM2e4dn|9RYjX)>G*1hU%pGKv 1h2$wGhFLSB29-}SK~mE0G&d$UoO]VXZ' );
define( 'LOGGED_IN_KEY',    '`gj62_^?=-J$?:!3eU+gJgVt[*wUop;[-ET3sDaMvsd{VHr/  oY!il9|&3scOLc' );
define( 'NONCE_KEY',        ':+6&Cr?3s8[m-OMx Or]|6E34=Msqp~k4<?U ?VT_7[1VAXiA;si(U|uG,:- FK7' );
define( 'AUTH_SALT',        'rn2<S;(_dq.;R6V*D7FCQ[?}{m:U;}DlgS$$HsF+dzLAFF3E?Nc_6[.<aD%t%Z4j' );
define( 'SECURE_AUTH_SALT', '_go2$D>>[X{b|vDR`d/tAzIplh9S$p;mYJ/iqqD~`)U>gI6DAUY/Uy$/m|BgX1Y@' );
define( 'LOGGED_IN_SALT',   'v1+P/MTKN#KYl_d(>v*{[gTsrk<RMXTZC@a*5k.I:v<.OIBb`yL+Peav/!5eeue ' );
define( 'NONCE_SALT',       '0AigZ^Yvye42SR*fqY8.pzO#QbxTmIMOjoZt_F} Ra;~}9jC9=I_-yveqNFmzS_^' );

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
