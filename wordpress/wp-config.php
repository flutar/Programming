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
define('DB_NAME', 'learningWordPress');

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
define('AUTH_KEY',         'HK~,?Viv!PRo79WjMlHs0Et(M~}~s80@ve&q3IiKx!9Bva|;k:4VB7!arSOo.}LM');
define('SECURE_AUTH_KEY',  'y|k,U,T97cQ!oyDZm+rb#&&8AMs.:G$cEJ+L^_Nz*80e;co1Tb(AFhQJH7*_%EJ:');
define('LOGGED_IN_KEY',    '*-jBX3OUzSrH&,=LHy{N4bv=|575egOqYbEc 9*1yk(B8Z5?G0H_<7yoX4=tRh=i');
define('NONCE_KEY',        '`/hG!qlwt<O~HSL(OiAV(1~_DDSj/X-e-J6Ib/9%{$(emK{[wZapZY|Cy@O;=)G4');
define('AUTH_SALT',        'J_8FI<8fGEEva/W{hA/6syX@Ze$d`6nL!.%Q}&IiGPm)Z?MRiWW|*|EpwyARQKGW');
define('SECURE_AUTH_SALT', '~,2id-B[T-D>Agqg5nk8C<,gQJh;dLs9[to3d/XL)_E OIK|# WfdXRaY|Ff9|4A');
define('LOGGED_IN_SALT',   '#;q&0s6%`6)<=w4f;a6V6y9l!7 NV+lQvV0~/QEIh|%tu$M.):RUqSw8c?fRi)<[');
define('NONCE_SALT',       '|Pd6=jU@4}8f!3;Nqj?]Tl:sy<k9/rRM~$pF2Xa7Z/l`eDt4l(t^Pf;4:Jo1/P%h');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_testsite';

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

