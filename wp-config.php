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
define( 'DB_NAME', 'host1722716_narvon' );

/** MySQL database username */
define( 'DB_USER', 'host1722716_narvon' );

/** MySQL database password */
define( 'DB_PASSWORD', '84889e3c' );

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
define( 'AUTH_KEY',         'u1/kSBK3RmZ)WEKN2-]pk*rxcQ7Hb:NV+e@(j$3A 6}TZ5krsgd%|.Z-}YN}Uubk' );
define( 'SECURE_AUTH_KEY',  'y-/c?PPD1fqx_$[mY#S<;w([>Uu5.m^cB523K~7i*bChl&R]FV>h pPjwDD XmTe' );
define( 'LOGGED_IN_KEY',    '?|vK[Ofe@,j++Y<,xNPD5Ooiv2`CY9/ |k&_{7GeTsJMp($)E]efgx<vKNC~@,Pc' );
define( 'NONCE_KEY',        '{J`)^<)2-{wOn1`[Bpwn>$Jj!`s1ahIdID]Fu#P+h!te5K}3H,M%[jq|e:{a9wYj' );
define( 'AUTH_SALT',        'Nl~yx=>GYOV<(7A<6p!5Dd}eofzYxv&%KJRmy8eOUsIfH.Z;*TLSN78^^6B7f &5' );
define( 'SECURE_AUTH_SALT', 'LJL!B ]T{<g>(#h<Q~6Tw{lP{i*?{Dlf/59Dxl~>Tk),!`r__|Im2>`}o9yGU?K~' );
define( 'LOGGED_IN_SALT',   'mI3?r$tW<AWwEnT&Wd_L|ifwK/$K4]70dBY$[.9+ {% D6AfaCqNpz&V9$@^Mf6U' );
define( 'NONCE_SALT',       '!i~svbrGr85aP,~{M5bubtdL`K^E7OK{IS!mQ{Z; (9C4y(7W)m7mQ!nnW*.T6MI' );

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
