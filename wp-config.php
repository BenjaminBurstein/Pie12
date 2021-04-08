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
define( 'DB_NAME', 'wp_pie' );

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
define( 'AUTH_KEY',         'oe<9?ek,tV^b-%DUoa~rAHV/r,/!X*W7rFt00,Tg1[JOmA,IsYo!`2fBraI4kLm2' );
define( 'SECURE_AUTH_KEY',  '8bXh1;ICR#=mR/@g+m;7EFo=M7mZ %%~n7gZ+q89.%F$YVRXMjF2a~1O2IqqPk6S' );
define( 'LOGGED_IN_KEY',    'vT./rc[7&~6`OQB-|,RW|pmulG6?P<wyuP{^h9U2oWFubs-%{@V]8-eLe#K-n9L.' );
define( 'NONCE_KEY',        '*uu~/]hotU0{Z3{ P~$^m..F]T?[lEtj0ZsR6+2gbsvh%U5&SDhG:@XN>K1/Hj/,' );
define( 'AUTH_SALT',        '&2e:<UtPSVH>6d1a@nEa<kNtAmLD$M$Bc)DTC*XQs} J~K!3p?h5{$ioZm*7yO+5' );
define( 'SECURE_AUTH_SALT', '{j1=9os6EW9rC {}KG_$A= J$mTZy5wPRq<{km`!Hh.0Hu2_Di?Bjx7l@P/R j*{' );
define( 'LOGGED_IN_SALT',   'FsONNdx%AN$g{e`i2,, Zf@Sg&NnbkDWYgvq4[-Q^JKka@.r.B~%`xM^+N_&V#C%' );
define( 'NONCE_SALT',       '%jq&M>: ,AdOXKgR[{zi_N>:o2m>{tZd[nTEI N,qNEB~e,T;8`(GtWF_nHJ>gw8' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'XxHRxt_';

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
