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
define('DB_NAME', 'git_test');

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
define('AUTH_KEY',         '83~,Z <tuMj9<mbY9jFs:.RZv , 3P{N]D]_cMK*oqQ(c1?:I?./~$U1;[}f9}1 ');
define('SECURE_AUTH_KEY',  'TyrMe[iaq9#9d[;K>eMUYZp%=!UICAtBy27D%+pp(X}EjHX;y|I2Mgj6On!Z?1F?');
define('LOGGED_IN_KEY',    ']@]cZU[<rNoP(NWYl%^D4pJ8d(MQm8,(jWr/acl#V5G?.&4G~8f|Z., RjW&tX`r');
define('NONCE_KEY',        'u3TK;wi|x =`!xL+l/urV>(<5`mi`6J.[+q2 gI8ghy*H&*U;<p&eGhMoy@4+Y:G');
define('AUTH_SALT',        '/Pd4!a3f`MyY3(8jls^6H:(5bPcDA9H/rjf/k}$Yk`/U`!m?fD<@?29*XVVR)qQ`');
define('SECURE_AUTH_SALT', 'joW#Ez4WBifX_l$GihPsn@%D^K^91lIPw;+=,).C]AaiD#A)+AQzV30gLL5h[A|n');
define('LOGGED_IN_SALT',   'faO)a#Y;#CMU@Fw);G&b0fD88SoKYUTM~_#[9LaWc?)m5N/Ot%#Fn@,j60Eo uzs');
define('NONCE_SALT',       'qyr#~3}Zjc,uLhhPH2!zpF5+t`9e[[}3G|^;C)>0Ft$d!dA][*i-o8X&TL?9eEx ');

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
