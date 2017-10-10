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
define('DB_NAME', 'prueba_front_g4');

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
define('AUTH_KEY',         '$Cdib%.)ZcX@cXc[misX7y$I<Z-I2Op-{<TZYmTerh2_ws.DB|~O1zfJIdf=jy++');
define('SECURE_AUTH_KEY',  'fjUneFRpHkL/BKS_>1`S)`]7` zR0OccIF I<~,Hzi]VRY,q%c:l49Xfv]/):)S%');
define('LOGGED_IN_KEY',    'pTjj#!gk$p|OV`sFRS!vv310:OsKR4IWe Iym1?!C_k91*3n+$k.v{I~(``vcK>R');
define('NONCE_KEY',        'Qq98RHOHw`oq5WAZM^L:J)d&HvI4b9P]1oiH496fo%N@QcDr}ri^~_ycsO6,7Ltt');
define('AUTH_SALT',        'RtiSrbbmHkAtL<G=c!xJ>U~vkN!>ILvSw7,v{hGWzGRjg&(AzXytnQd?mIo7ZdWb');
define('SECURE_AUTH_SALT', '%scR{Zdw2cS(9m?^,7__fkS CR,^5Zz)W{fF:Vz!M#UEqSbaf0ZK{9IGXtYz4S$T');
define('LOGGED_IN_SALT',   '=!ZnEcK680+-I6LUWOaMv]uJg5P)S-O`2A/pFzu. mV<ds9<mvL}##fP`9}eZ,EY');
define('NONCE_SALT',       '4YloRv%NpR3]jv::[_<hXqAb>_7H(9VB`$?CV^(s&xlEBw2F7yx^gfmMaZ1`3n(x');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'pf_';

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
