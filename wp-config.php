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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'webmot');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'rrMp]Z@C7q(|>Qg|n-$4s*6P1^UHHg?ne6BksLGjInwsDtP,Dw|ubk76{~aRxgq<');
define('SECURE_AUTH_KEY',  'k]6+X>!ZK#6x~zv6#I}gJGrm*x G[)8@}<1pzqK2hvK!;LiI8bTlzQ5eCTC6K7C;');
define('LOGGED_IN_KEY',    '^8|w|/%(q2LJ&^C_pC4FR7t6xqd%[{Z&s-r;)&C,UccH0S>p6R8?C*[Re?V#-Ibx');
define('NONCE_KEY',        '<p7|N3iriYVX5,3@Re.@#EQY@!/z>[3F]<<p%kZ7=R*P--cO$RVq7iAd4RP7PLA-');
define('AUTH_SALT',        'J2{{Ku`CtL8HT4)PCye9CEu^vB!em]#8*[NUT 2DSLdrNnm/c]|i31osAyEzx,gL');
define('SECURE_AUTH_SALT', 'i)):V^2tHV;QFcv_F&xvfzj|i/E9Cm8Tls<[J OsFC_=.J{+%l(abc@Zr=7DJo1e');
define('LOGGED_IN_SALT',   'rU!^jXdfOU(8pUz7w&=DbTkM(KQ --+Do&byHz_Rl`ta;%W)yEgB$m!sA%KDuyq,');
define('NONCE_SALT',       '!}n9t._u5F)Y,JvtF$9QGRMWu4@=juiQ5JrxF#Ln<;uYiTs&.j<e!t%rP}Ee%%Yr');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_admin';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
