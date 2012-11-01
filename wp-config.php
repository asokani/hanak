<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'hankakoutna');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '=j> .QYC@6e J4s#|0cU+!eT| b~D-@Gpclhr6bf)/?jg`bR9s%Bisz=tYAGpf8z');
define('SECURE_AUTH_KEY',  '%-)EWvqB)+0&u<x+X[Y+u2||+_mDu9HC#=Ig-xiuOKv-no/)@X9l:}HzWhr.uJl}');
define('LOGGED_IN_KEY',    '&`S6+Lc@zN<1}A|zca{I1|@%r=S[DQ|8l1N-YF/fjQM4W-v{D2bBY`p;%#3ha}It');
define('NONCE_KEY',        '?_F=^T^kHJ9A3Lg](9Lxjy,Wl1b)yB~G:Jm&PZMY-)s(MNGJq4_RZvx#}%j8+vMg');
define('AUTH_SALT',        'jje4|l{!^|h,/+B{f6oB.Zd[8|lM|lGJ>j99Hm?tPZNh{s{Rjv-G3b.C+l(:cxZO');
define('SECURE_AUTH_SALT', '20JJnUl*+h/47[&@ja^~+|i:~.I8?r+N^AmrrgUEAb[QReD`K) ~Ph5go:7u9<45');
define('LOGGED_IN_SALT',   'FN3U$@-YpF?:4-oh;KZ3#`okjz+3z]!F+cMmv^4ezf-vxSu?*tT4g*EN}ZGV^E^z');
define('NONCE_SALT',       'U3;}kWX(CsAgm&V@/TZnp]:7Ff-Zef}Je]:y9moi}tB%)D*Fd* zq.Va<B!1;*_J');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', 'cs_CZ');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
