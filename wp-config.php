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
define( 'DB_NAME', 'dbblogecologico' );

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
define( 'AUTH_KEY',         '-4=:&[^Uq5stIeQ$.~},_Of]FY0Ag`<:Ig!JDmaHXFCJRJrBlH@C;S|O6r]kWuNR' );
define( 'SECURE_AUTH_KEY',  'n}g;61W*kn8H&C=u}7wl=E:#}WTHX;qoi9#&^o}>Vm5{HL)mjdLQb_ibmlBa0%#r' );
define( 'LOGGED_IN_KEY',    'gi&kCu&c&8!cL.VbaIxj/coao]iCx/HB`|VXw55rJdYBd|cWF/V P&(4uZu:f!A#' );
define( 'NONCE_KEY',        'l$w`dizf>4/__R (W&.CuDeI q<h/!nOXM~M]+Lox]bozC-.j-5.sb4A1C/Ip>|8' );
define( 'AUTH_SALT',        'p_#EM!Q1>-0Uy-q.U=}Q-[gO7-`NDbspBD)PJ<D6E7/LE;<nto,v/dwpIizYIW]D' );
define( 'SECURE_AUTH_SALT', '6EGsIibn)Jpq#0D-ou/S!f-}=kIH#%dl#sV-=:w}}BiE~U5,[y%=<V}eUvW0{$,*' );
define( 'LOGGED_IN_SALT',   'N0I#;*[>u =xmad(u p|*vL:RM :DaFLv9>%j8c?`UU(i[` G?4j)azL)R7_Xz9/' );
define( 'NONCE_SALT',       'zx Mmr?t&Nn!L02 4[7lppU/]CIgOCL.N),^ ntv/[ytj;f$^w#[*:C=zs3_mZhX' );

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
