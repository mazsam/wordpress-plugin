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
define('DB_NAME', 'plugin-wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '^yta~NLXSV;?7=V$UHT=HF,>y(;tDmQr+N?mId_L K{t!<E456]<:x6Pc)T(3;LI');
define('SECURE_AUTH_KEY',  'hd?/U/ZNp,Qc1Eb~6E#!|6dZo&E6I.C5RP;wjW3p7Ry.^1{=7,O?0eLp~&|(T|_q');
define('LOGGED_IN_KEY',    '/}LQ&/kqw 30*c[:ef4xh+3/PJPrjzB@g;5DQZ#^d{U?PHa<-k3f0gtPuBAoiQB?');
define('NONCE_KEY',        'hMVc0a$S<f)31RqQiM^538e=e8Mn;+ z/l`0U|A$ZQ]m7l~]Aa=^pEt:!2>tW~u=');
define('AUTH_SALT',        ']Qdm`!MNd0 Y[xX Hf?XZKMPYChE:[ReskI_N&JHD>~D^|T]c4Z!mk~JjjVC%/k?');
define('SECURE_AUTH_SALT', 'M>wir;&%CN#y~8uc`-8{iId~H)ew^TFy7s`ydyXsOlU$0@@%`LW#^CeKJguNv$x(');
define('LOGGED_IN_SALT',   ']!![157U*?Gh|4,ID1Jj+3,P(qL!MQ>|l^4f5l}mH-+>ANO7.1J6U1^OUE_eP&,J');
define('NONCE_SALT',       'c^dSShrJb@;n_g?0;I~tX]]ZFn@%UvNGi 6@9%EObajdS-$ V/~1.Y-^6&/QD|2f');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
