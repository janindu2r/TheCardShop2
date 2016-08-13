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
define('DB_NAME', 'thecardshop');

/** MySQL database username */
define('DB_USER', 'rg-admin');

/** MySQL database password */
define('DB_PASSWORD', 'mEdMCSJMTywGCRrd');

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
define('AUTH_KEY',         'PHF%qH+x9D6a7+0Y{b Cuu78xLtTD`A|d|:c>_m{k_L3U{[*~{t7>i&=v0$zQ).r');
define('SECURE_AUTH_KEY',  '<GSnC/!FfmYb}|G~Ri1oNf>8mfo@] 7<(#L,YE85Lifx3C-Bzk%mmil(G(L/gnwL');
define('LOGGED_IN_KEY',    '.m2#0vOf~L?KX%4,sruo d+.xhxc:A<6WFpZZ&?kg2^nwADj0n :!Iy).d3$vC*)');
define('NONCE_KEY',        ',O@PvCer>94fF<3[gy5$~l8ur33 o.S1[it|NVA51wv{a{(POqkY.-!0zOrr#<@J');
define('AUTH_SALT',        '`=qk4W;J5r[duM3F^mw,;8BcF~Vg.=w@d eAYX(ggB(zh_>d.JwCYjXpzZsS@wW_');
define('SECURE_AUTH_SALT', 'ZkjBlE8^~yBZm(b+m6Dp{yYM-7T%a4@v6cvxIi4!WC<.$PkRemAcn|^=$.Z({Dk,');
define('LOGGED_IN_SALT',   'FSbPAxxzfJqo7@=L(i+c6E5_O06<UJ7>C0,AF4%rKeO P#u$r)!=8a|42|]y;aeU');
define('NONCE_SALT',       '9uNS6( PwTH .G%r6OJ6XLTroF&%9^d.i/~}%5b=G:G<hnt%10^SgX5s43dC}`ab');

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
