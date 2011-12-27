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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'qV_x9]Wy/Uj9:xQhaN_*@k.pn^N}/?KoGkQ,;W grm4>oh-{tH_~+#rP5H_7k2Do');
define('SECURE_AUTH_KEY',  'VI3*m,!BEXUsEWN@zIi(6,-|)eY{M I[1dzNpyT&P;Iz.^3<Yi.|o8_&ZR$y6k}$');
define('LOGGED_IN_KEY',    '?Qg1nM)t#u>|H)B20Taxy7ayN#gH6=Z:lMH#q[W=dmrBmJXgK@pL%FQV]yY[W[gt');
define('NONCE_KEY',        '&#}4.`u~Ue3hJKN__2UDIDqtO%MR{`KX7sJ=?B}I(seW3nr(*/U8GVgG[1MZCsek');
define('AUTH_SALT',        '`1 <FW<?G-j#Ca{0(Ly]u~S{?m1Jtxoo20M%.^L^}&k)AJvx^^KxV[/Vc09}^%e(');
define('SECURE_AUTH_SALT', '(Tk2pT^_zF1@%HNRUnXF)RAQ1J])zOMZ9b&:A;W{Knf`1zK~p|!,?Xr8nQ7$J6.]');
define('LOGGED_IN_SALT',   'u%p/v4DEFGLy{(P==CCe[m_-S7ez+I oJ0oN@D5w>5iIkzE)!3k/n*,>`C.7_so)');
define('NONCE_SALT',       'f8lquig0P8}g)M!Wn-{6HTw{N^)uAS_PeuFZ`VrN4R;U:sh*Yv!3/:Q@ChS~8h+C');

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
define('WPLANG', '');

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
