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
define( 'DB_NAME', 'ajax' );

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
define( 'AUTH_KEY',         '}w-S#YHfAVk|qLl-<w[xuTN5?>%4^U1#cYFMVeAkbB/N_`]b:<JnD=TA&%b5L 0q' );
define( 'SECURE_AUTH_KEY',  '!-Cai`01|#[Yoxgi<}k_W u<n(pHVi-b>6kHl5/`w>D2#;UA#T=N<f$eP7%?peaG' );
define( 'LOGGED_IN_KEY',    '_X]BTBR_~-=p8/dcYRlzw*yO{LCiTNN+qT:6{25:sy6HRVyg;;8Bz5jaublaerLr' );
define( 'NONCE_KEY',        '!v)!*9rjgN13|J(oi<veNbAZW$,zGbpYkbko6?uUD<1T`~mSrQD]B9wD4hh/V=81' );
define( 'AUTH_SALT',        'wNUGaadrKSI2K5hW1raoW<AsVGGG^yOi0|F8I.}b>)@WZHgY+=>p]!v/>]E)?q;|' );
define( 'SECURE_AUTH_SALT', 'jI`{j _n(2L#cYObW+g/P?<(Qr_*e{}cF#&^#hX ;hp)sT!%t/aSMWK {GF(=W4>' );
define( 'LOGGED_IN_SALT',   '=m:QYjUp>]%iG_;IS@Ik/>D<69e]!gNbbJs&n,)5*_EJXdmGq-?aPx%)1y3Hh_ >' );
define( 'NONCE_SALT',       's wdUmlNh?Kh 70.H_Dap-et-y[O)lX+84lY|SwybuB8p;1HuMDL0)E%e^6hAy9B' );

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
