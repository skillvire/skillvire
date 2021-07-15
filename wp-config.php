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
define( 'DB_NAME', 'skillvire_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'd.deZXT<$~fJ5@&ML^jS^K[%N/<)nGVq0OCf JMuMKR(w-[g^tzPOv%rfdS8b@mm' );
define( 'SECURE_AUTH_KEY',  'B8tXGXeZ2yzcD[b77X3!oDds4@d]Yf>mCE|7unwv``i(%.nsW1@N0;`W}R8W^Z0o' );
define( 'LOGGED_IN_KEY',    'gTfquf#LesF|$c#Ck-Pukz`.b6Dw(Eu=nzJ2f/bq#3$VI*}&qykD&<0gSv6(,$6L' );
define( 'NONCE_KEY',        't$x*y(h<c*G=LuhgyU{U+/?)km,=Y`T$q0%,7Ekfut>[l(CA8hy|I|6.p}VVbb*_' );
define( 'AUTH_SALT',        '22ZZVuDQ7It%(a1rmc,km,< }r0gF{1/cD-tAtr!s.OOqb,7OB4r&_aHQQFJXYfi' );
define( 'SECURE_AUTH_SALT', 'ETLva(lM{OolY:gJ_omtH,,[^6vw/=?G/xEJ0`he{w#)f|r^o0V&+`D>t`v%|d/O' );
define( 'LOGGED_IN_SALT',   '%Wl60{micrg3V&76X6hwB#%XcC/oU!^Wg7]}=ZK*AYd8x61MdFn_AK{W#[>;XXb&' );
define( 'NONCE_SALT',       '?=g%~9bX3F{aND%`1NGbA]4Ol;>Kj1)YeVgYQ!=LB1QZ(_:6[dJHDA_#M@!P}N>o' );

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
