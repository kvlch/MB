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
define('DB_USER', 'adminGift');

/** MySQL database password */
define('DB_PASSWORD', 'AE3QS4gonfcNBL53');

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
define('AUTH_KEY',         'ub=0`^:DgRaqZW.w#]u-!qa*tYeBxi1NpY%A7eD&ScUr1+J0knzMw=,Aq[YX$(XG');
define('SECURE_AUTH_KEY',  '#[2iRMZI0)uq~)~dd5w<vx^BK5|vgvR.uck0|X&6q8_vEyibIO}w9~=obud}qsCk');
define('LOGGED_IN_KEY',    '}?kYnG|kCDP|<.Bp9m)I]p|>J{X|ELu(kI/^>|hgYs$cAXb-/ly0^JiQ1Un~iE%n');
define('NONCE_KEY',        '{B8(@=/p52d%C,}vz4[%wUJ3WeHgO0+`J%$+Htj4o09}+3{5nZGUv3Qh2y#9y~!_');
define('AUTH_SALT',        '2&QA5|~wgxGtGXlcScVkB{U75nfQUW}a/j-~+4]-WZe0f![:+0}S5Gf_hXrN01#P');
define('SECURE_AUTH_SALT', 'XoW+Hqw[iIf!38+Y5y}a-OAHCHNGol!J06{O>.AxD>Sq=TY}e)Bt0OO3_Io7OPKI');
define('LOGGED_IN_SALT',   'Mm5V*_DZa|#I4oa+Lt>32C|];_U(N2 Z/m#urb+{qhP/&Z,,44]amqM9+uaG-{y>');
define('NONCE_SALT',       '2k9OM(mWB=cG<?<}rZx(,3,m{pk++>sr+PI((rk|pdo@o*O~W{?jh|?dhZ^eCjCq');

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
