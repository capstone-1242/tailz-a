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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'KPLe+EqNSkfDaU{r$0/xsz#*?G^i0b[V,I pjvrTJ8}[s0A#%ZvLDwz#Xvkm*p(J' );
define( 'SECURE_AUTH_KEY',   'pwnBP5O<vC+JfE(|ey2Jm5pXI+xq%F|=yK)J[P&{(+F.~i~hk05?FY]j,Bp.+,rR' );
define( 'LOGGED_IN_KEY',     '5K]P^9%[Z6Nif;#4-A0ax,U#ta*+(Ef`Bp6=[;`b[9vlC))`[ R`k/UDSm_gU*Q}' );
define( 'NONCE_KEY',         '@=fTEfnl=wM47j*[ce^c,:udq-x]+<{[[,;R0&<_*I EruyQe68s@mZ{cigHDF$,' );
define( 'AUTH_SALT',         ')W?#{cpscL<,E7p8Y}k{jh xt(}kkU!KNMc3nlC7,l(rYm{SxB`E6-q#!tK65>_7' );
define( 'SECURE_AUTH_SALT',  'XlzwR:E#l[Uzp9kv4c0,c1aM`H #2[j]PQb(wY70t$pc 48IpE|Q+;=#aS<Y09gH' );
define( 'LOGGED_IN_SALT',    'fAi/y)2DkWeY_My*Xm39aOK-UIYQlZI+hZ :1n-tHzjb0w.FR.<jy&bpN$@CB}Bx' );
define( 'NONCE_SALT',        '+Ni}3n!Fm+DKg%%19oFUECgWvze#I,_ej!j?YP7]*oBn8XXspWsEO|;uuF{zCyjb' );
define( 'WP_CACHE_KEY_SALT', '@K^j@ivxgJU-$-;e=EkjxlB<,%``1Skd?tPQ(KY8 &n^j:TGTsB<00z:km<[=|Su' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
