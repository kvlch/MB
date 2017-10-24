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
define('AUTH_KEY',         '#~`{fhCU?^(k gg*LQk*C~,r=9.2]ke1M!.sob.BuV+yTw^Rx#F>=[.K0b6iGD{P');
define('SECURE_AUTH_KEY',  'sRk#>>*|&3}F1-SHMSH&nqm4G|)r{N&Nuj8 fU>t+}<xu0hE%Y4okr1+L:f%$a_ ');
define('LOGGED_IN_KEY',    'm~,Vgm2d6 `Q2kS%Cy+{cNTWNw-J9RCq!nZ=k|]#PQ%<O8N!h<XH4ItHd&]3_3RE');
define('NONCE_KEY',        'X(<(K<i#3Wnpxj9Z;DixCBsZ|&^3E#=iJ=7+xLDR(Ee(M6}~3oiX*3~zh.8Wk%|h');
define('AUTH_SALT',        'N|~k~LH|FUo6re6FbX:<rGud/fv5MU27zeLA2cJopk!ie|V9fiIb21)0oG.n~H6S');
define('SECURE_AUTH_SALT', 'Wg4e)@Mvq ni>yMN>Jw,#rt%|P+NV|y/gI[RB$!JPEpCk<J+|^{w[#MTns4GXnvG');
define('LOGGED_IN_SALT',   ': &b6,q8ZH];>RJ2W%)jEz?.eZP<BGKNB4<S9)ZIAc5-8ab$KNOPo_$n3Ltix>1<');
define('NONCE_SALT',       'tJ%asiT,7TT,j%d[R}$F3c[Xk44c?kM_$h/%W4.fA(;cW|C>i_-H{&eK=hhpcm<l');

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
