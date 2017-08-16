<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */
define('DS_COLOR', '#ff007f');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'fitbitDBwfd71');

/** MySQL database username */
define('DB_USER', 'fitbitDBwfd71');

/** MySQL database password */
define('DB_PASSWORD', 'ChN3qnL6nZ');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '#eiemt26DL6DLTx]2.{2Aaiqxx]1WdltahpxHOWHOWa~#;]29Hltx*AIQ^<7<7E');
define('SECURE_AUTH_KEY',  'U$^>7bjnufn^EMUbMUYf,}3B[08dkowhowGNVdOVdh|:4C:GOs-!|,}4Brz!sz@');
define('LOGGED_IN_KEY',    'tHWD1;5lt+_px*#LSais-_GOVZKSZh|:519GOs-_#w~#:SltPXem{26E;6ELqy{$.');
define('NONCE_KEY',        '4VQjr{3B7FMUv$,^>7Yfnjrz@BJc8GKRw[:[8Z-~OSZWZh15FJc@04|8Cswsw[Jd');
define('AUTH_SALT',        'GSOWa~#9+.{;Tauemuy6ELIPXf*<63AImuyeltxip.HLSaLem]26D;6Pt+*<{Ej');
define('SECURE_AUTH_SALT', 'bPiq{2AI4BJorz!@|}RVckVov48FN8GZ@|}07Fv$,>z^3YgnvckrBJQYFNUc}4B~');
define('LOGGED_IN_SALT',   'X{1LOt#]#]aexex*9HOWHai#]29{3Bfjryj$,IQUcYgn}7F0JQv$^><AImqy^q,{');
define('NONCE_SALT',       'Ds#~_SWlhl59SZd:0K1KO@!-:1hlhw-KO6ATt.*.2imix+LPLPi;2DHa-]#]Dptpt');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
