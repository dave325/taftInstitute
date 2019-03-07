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
define('DB_NAME', 'dbDavid');

/** MySQL database username */
define('DB_USER', 'davidtest');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', '23.229.180.65');

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
define('AUTH_KEY',         'uYB>4a(4dCYG,uX>NbfyI#Fs#EbDqvkmI`?+/|)]O9nG0iyr]5>Q{a>P_Um?1clT');
define('SECURE_AUTH_KEY',  'Iren28#IrD)Je5o%qk<MFu%,I]<bFDO<}0!0x40?rv,tt47d:,rGkWx]M)~L&[yc');
define('LOGGED_IN_KEY',    '5|fdDlf4^]z^s?kBh>DZw6{.Sz9</$Kl$eHE/XSb=YKlP>=Z}:=`o !OQ*9u{qT/');
define('NONCE_KEY',        'g&@GzlWi.lSt=]6hKlDOy>Mt/sHZ)ww}4.4Y=6T}gKc}qsb3X<$]Alm`irn%?55h');
define('AUTH_SALT',        'DrH=oAGhiv:i?/%T=C[-jLXH|Uo+ViVWZ#:/?=5uh[c9+ 0FugiggmtJzYz4p%LS');
define('SECURE_AUTH_SALT', '$({X}48G_P6-eS+X]b484:@I..f9VkMbs~u$ JyhvAhOL?WN`-|8<27J_~S@&L9g');
define('LOGGED_IN_SALT',   '~x0:uwf9Y,TYQP:,(Nx7:PR]rzGG`^>V4o_Mh B2L<_^-t1w8l([&pDh]qY+go3*');
define('NONCE_SALT',       ':M=>YLm6sQw?@aL?%e8<qtX|te.ip4SSg/6$1Qz`*pE$y2ApoEsqq0nyuajV43R[');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'taft_';

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
