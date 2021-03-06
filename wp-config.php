<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gatsby' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '2K4BwQU:;E&mqzE4u=Y1aZHQ[(y|Wogs<4RCHDrt#0YR~; Kh)9l7[^u(_m&(6WI');
define('SECURE_AUTH_KEY',  '7,SDP`39=:w^i~+*Duo}|b!Z 3:W0[W&EUq];hhRC64+hh)yG2ZW HM6rE+s-o3y');
define('LOGGED_IN_KEY',    ',ZZCSJ8Qo|-|m$DK(- iaovn.WVMx9|Z&6B^7l<`{aWIhAGA6rr{ERIM:MazO|S~');
define('NONCE_KEY',        '3]- 14T<SDPA|SxzO.<o~.gsl%T4w>q962^D2q[vw~j:;XW|.`r-Ox*#j|HH?9)`');
define('AUTH_SALT',        'q!$96tC=uIEpTiKmfwqlyp|V&vk]|~1m Gy.)t31Z-iN8$@U)C6jPh2z+O_voc}/');
define('SECURE_AUTH_SALT', 'x>SE2 F1c1--#{#z?7jc]TW2zoflKr$I@QRu:6J$X(VqP%d9f|X3xjmy4, =[:Hy');
define('LOGGED_IN_SALT',   '2Uk-.@aBE!Oo4&%d~VYT{P&j*i(1!liZf+(g5j-|d42w*k[Q(Z27CCIH<oJ(@}^%');
define('NONCE_SALT',       ']I$@`SW_H6[r*R%+tT3SDnT-g@,!RR[8d-8aSQw_II]l|C(y(1jVf.>X5yb)evJf');

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
