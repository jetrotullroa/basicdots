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
define('DB_NAME', 'basicdots');

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
define('AUTH_KEY',         '_fXXDz?ql_+ZXIR5<B6U+6RqH- Y*PmD(MiTL`|M7d?ZB_q[JUGz^$9syYgM9rre');
define('SECURE_AUTH_KEY',  'cC:D@X)}|c2z{H+GU?AMdg(44;iyI-uTAvA=i`++X-lZSW=>Sr2Bd`7Q$[^LRep?');
define('LOGGED_IN_KEY',    'S]-S(WI/d.Fy++{e4*&|^zm>VY*b2[n3k3h?QXa.:8eHz6xhJ[<[i-nZh]W7Uhv=');
define('NONCE_KEY',        'm$6JAD|DkWh-6h88T[6_5WQkNXqb~a;:apTF=4+yW}6=M+my5W~tiYkDDZ:.UgcN');
define('AUTH_SALT',        'o@ea3];t#hX1#zdfn>e+){Jryv- M<RI/`=ofvhHmU/gi[%W=I-NvkJu<L+CMnK0');
define('SECURE_AUTH_SALT', '7s:}N*Bt&#+!sT)/4h_BH+?U}2N<8]n**4u~Vg^@$,Ok9^FZ#*zin@>0HtK5eJ`-');
define('LOGGED_IN_SALT',   'fg.Tlq-c}|GLF*{l#|.^UhSvB`UODrPYA&ne?89f{VhI3am9tQ- M.,BQ2!%03KZ');
define('NONCE_SALT',       'wq:-:|V,LjSnkdb``)Z.|cGoK$@F}QFw5ea8`t@mS4-<#d@yF%1*B=<~qi|a2_v,');

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
