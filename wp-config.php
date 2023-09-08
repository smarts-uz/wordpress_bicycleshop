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
define( 'AUTH_KEY',         'E}8,^=9nsBkKN.0e/}|(!))j2f,l^mcdQ9~uW!hW:+$XN6sOc__cVQfxI59;W (i' );
define( 'SECURE_AUTH_KEY',  'PO92f;CP1}rp5[nP#y!3_bb![I.L2I>4f>wW0P#?p8,TPGmhsM,zIp^lOr*DJe~3' );
define( 'LOGGED_IN_KEY',    'VOo,@xuqqzd[.c-%ufFV5DRXApy.5S*UZ(-jq).75&e$6B_et~)r2+Kt(L,3L%VO' );
define( 'NONCE_KEY',        'zxpr~y3ras/(r>*7E$k|Y!!*t$T?pk_)q*bOZZFwOt,bC>dG[F%MVs^O[78qy>E_' );
define( 'AUTH_SALT',        'PVX+N#9d4QPgN>8aS#)@#U(pp;.R5LXr]^mQfwog~81w)Aak)7HpS#l4%>5B1B4V' );
define( 'SECURE_AUTH_SALT', '[D@yQMX-|J[mHfNenggFOAQm#TMkAc&~kfM0bo%/_=1hh> &$x1gf`VY2Mli]Q6.' );
define( 'LOGGED_IN_SALT',   '8~B}-6!m+WLQ;Zfew&mp}#kb1C_01@OxTO{TSCPe)bCW};G~!ej1LqAZFLIy/2o/' );
define( 'NONCE_SALT',       'oG,&+PgqjR@BXbCP&#&N=?h~Z:;THm N+g1rFi?6X@`HHdP> ?P`t/_t>Z_}&f=:' );

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
