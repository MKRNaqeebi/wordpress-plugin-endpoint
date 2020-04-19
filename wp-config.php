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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Kamran!12754' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         '$k(D:]&wz{.Kr=5;/:QzL(g!E@#e[|97j^!qG/)(_Jk02W%d9B4)A8%C%v`%hx9A' );
define( 'SECURE_AUTH_KEY',  '%1fcC#YM~9<OrG<oNoTM>ngmH4SB.2O^{X3|wMSbvu6LOb#o~sp()^E[@p/#VwjX' );
define( 'LOGGED_IN_KEY',    '?o7P@b9?iuUMaa[g)(Ml.S5OZnnz_!Jo^._@?cO1W!5`w._}o>>{Z4VC!S:,6#.q' );
define( 'NONCE_KEY',        'BYia{IYQ2`y}MXxj*J%)J~xY]E$ dRW3kx&@Mb U.A<^.b3f/wx k9Ar3_V@(A%p' );
define( 'AUTH_SALT',        '+ag:0C|lr)K`cGluw,a;M?%QML6h@zZvF.F~^&Md-1;*w2aQlM^Bg*oXTnm#iUG;' );
define( 'SECURE_AUTH_SALT', 'mIY7^4wf<0eh)PA9r9|d$m:XqCNfs]/Er+!T[YkfkrPm_Wv} c^|dM1Ks2&)MxZZ' );
define( 'LOGGED_IN_SALT',   'R3c_d!f~?yTo/ikhm0IUvkSf F_b$K>]7) 7^m}Fm 1;+mOM >Yr8?9L[x;`?7}2' );
define( 'NONCE_SALT',       't8*:1<Q7vXV%E8kXnz5Xr:KUy9-(]l42`pIK*5]Zog3k9S(cos|?8Gjdr2@2`a^l' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
