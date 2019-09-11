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
define('DB_NAME', 'wordpress_81');

/** MySQL database username */
define('DB_USER', 'amar405');

/** MySQL database password */
define('DB_PASSWORD', 'jamrudfc1122');

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
define('AUTH_KEY',         'Bh?JMzZ$%R$o3Q0g<_|a$#5*&}BOhTI kkZL$OsCy_(GN$BgsuQSre>Z8`d3V4`v');
define('SECURE_AUTH_KEY',  ',i,%mT+Mj9$2[l?=#LG)ROWWQyt&xp#nFf[nY=.bF?d(`dDyzFt~Q;8ay@i>fr:G');
define('LOGGED_IN_KEY',    'URXxsy/o|_2c3s}_G/2(zxr_J&%6JY1TrQRefM6=[Bz>S =Hnpp)K&;fec`XVjKB');
define('NONCE_KEY',        'Qgy[Phnmjx*`K.geZ(ZZeXyGQG2;$]xl|Z<):nDVG}!!71kx-fUG+y1[5j^uTfi#');
define('AUTH_SALT',        '7oE%B 6n-^b@;hE,LzdP):pWh>6+~D;.@5WN9jNVS3inqyV|d% uu0g(K49d]G61');
define('SECURE_AUTH_SALT', 's2/U~W|/{BlxZ:Nyd#(lG7:+c}US?:Bc+q?wX)VR2yg 7lq/FK>F&4ipThG~SJvZ');
define('LOGGED_IN_SALT',   '&)f*+;[n$bR5iJ?)h~(1-;gm9Q`a:byV9O<k!HYoON?F4$>epWcj[0rRm/gX@Mo]');
define('NONCE_SALT',       '4)2&*an9Z/ZPT`hG4y=<6TI4qa.bVhpzb?d&y>lj(3KRM!l%ESd~Ec6P#<9 g<SG');

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
define( 'WP_DEBUG_LOG', false );

define('FORCE_SSL_ADMIN', true);
// in some setups HTTP_X_FORWARDED_PROTO might contain 
// a comma-separated list e.g. http,https
// so check for https existence
if (strpos($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false)
$_SERVER['HTTPS']='on';


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

lagi cobacoba guys
