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
define( 'DB_NAME', 'wp_hack86' );

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
define( 'AUTH_KEY',         '&BSMT@2-% *k/GPtO.1w^/m!]0 zPFE^gvsp;{XYB3ZKBbRu#`57xEHL&XI]]<`(' );
define( 'SECURE_AUTH_KEY',  'v6xdtS!vwH@rd%tE+L*G6Ay>4,93S$A/JZS[APk<<Q,e9Mziu 99.Zr@$3^PuXnM' );
define( 'LOGGED_IN_KEY',    'iWJ_J.ripa,s^sNQf:NLC-r2[9>Ub/RGnyS<{pZ y%RXR@[|+Smuzyz&(,,kBMu~' );
define( 'NONCE_KEY',        '3-7@D4urwGW k?6bIG~S}69]mBh>CPRG&:GaR)iW-a*9U|%}:)10cunqj_)SY}2j' );
define( 'AUTH_SALT',        ' z#%>(.M%01U6*[pZYkWnFV`lR/vz^-G^4=gj.X1k<A_AGzU@<mbT0UTQ9(*lWX!' );
define( 'SECURE_AUTH_SALT', '3;=3d3sj[l!~hT)=4Tth{cUy!VR^E*}y>=<(_s!POCtPa<G}BV@b6~l=%4!plyMA' );
define( 'LOGGED_IN_SALT',   '2=p1Qu:&M?r?^@Mn1yYTMg=oc6L^9c4~~Y]|w+X,Xk(6W!!:%b5z87b8~KKCPHNZ' );
define( 'NONCE_SALT',       'geR4H]4_PXSX1qG6Y}^2Vj>8N}3{CY(ev%MVWFv/<jJI4C.R$c3BRWeaHp2MF%J{' );

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
