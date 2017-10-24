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
define('DB_NAME', 'mbswp');

/** MySQL database username */
define('DB_USER', 'giftgnyft');

/** MySQL database password */
define('DB_PASSWORD', 'MVxhL9gMXVA2jxLZ');

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
define('AUTH_KEY',         '%U]wB4&8d 3IE;*)Pm?m[L=)Y%M$xiO%snSqNZd(a2n#Cb@ 7k0.G1?H6 zz1L;a');
define('SECURE_AUTH_KEY',  'XuQe8NA.%SN+<~1zAw&ST7=#Ic*[c0HsiU!Hx{MFA+TB=gT% f!wA$=YlFet<u`e');
define('LOGGED_IN_KEY',    '>ydMq+*r/ptT:F/js~D>h!C5ZP F2BEc]B!ig:n*6%?YKd3PPwCf7QJ/x~}?!(gl');
define('NONCE_KEY',        'e6P*&?fs-&lE`7_pU%vqwHtl`Xg`~8bX6dDQ~&S v1*U%h:]E<wwT@sz+Z9&{[Na');
define('AUTH_SALT',        ' {r0E%1Ag^Bdud1+,G0O`{uMQ@r/_$CI2CB.{7UL`G6_}5LFaLF5<=IZL}O^j[*_');
define('SECURE_AUTH_SALT', ')N3#qwcu(PjwW.RXg1;8;qWRGR,f/R*[LjY}@URKE>UQ~k 1TA2NgmY.e|v4OX0S');
define('LOGGED_IN_SALT',   '25$8eD/zCo[e5g[n1ubqp}F:!I3?H.96UWo;}9oCI*70aI?sraS/y.ndx!PkmCZw');
define('NONCE_SALT',       'i/>~WtTn5YYp[..JrG)b@8guJZeA.zcX)LwQ3fw:5SP6c72jSvA1+Dv#Q<3O=P/C');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mbswp_';

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
