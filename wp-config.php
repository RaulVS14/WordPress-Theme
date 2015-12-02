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
define('DB_NAME', 'bootstrap2wordpress');

/** MySQL database username */
define('DB_USER', 'bootman');

/** MySQL database password */
define('DB_PASSWORD', 'UmdwcC85QUYHAcQA');

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
define('AUTH_KEY',         '@zj,I0mXSgO<A@VJV*fq-qsy-ZqlA7Bc2[FB{iaUJrLJx.JSd)Aof|FWpn(0jd?U');
define('SECURE_AUTH_KEY',  't7BuZ=+d4jc{&I.!:JtIP/eLSr3f{-Q_L0aU!s!]s$c+M@vU|.##vBEg]U}|LB&D');
define('LOGGED_IN_KEY',    'Z.9fc7$?*e~X:9zy]H6>Ucr?||Sxmo8t*tI&FxHTb_2*]?/8>&S~`Ulc0>|-AaX}');
define('NONCE_KEY',        'U9dm}Kn<hN%D8V-HCNXK4;Z/d 5M+E>7$WTm4y/&R:K]K8l|>[`k:g[5O6/l#+[M');
define('AUTH_SALT',        '|Y+K~Y`~RJB?h{^+|uUB${IEywaa|h[(/<iG2N}-&F|[-GfYFJOyMqH!?YtR_SI%');
define('SECURE_AUTH_SALT', 'i.;Nr/VbIZSK*4|Vny%iJs}(ip%xCD OOP_egUH XpW!^,}Q-1hkr6Gn|jm|Pt}W');
define('LOGGED_IN_SALT',   '7#;41,fMND`nMwcM/W^:bdLu_<Sp.N-sdmr+X`sqRZ )w>n^C]@0Qo(v.{F.(.)t');
define('NONCE_SALT',       'aX2z{ !A%;+M7/*:ZyCvg-RDje pQZyM8jU}?!yM_w5w5P},f{MD2:W4Gsn&@j[C');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dbbs_';

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
