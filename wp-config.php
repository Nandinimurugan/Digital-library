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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'nandini');

/** MySQL database password */
define('DB_PASSWORD', 'nandu@9342');

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
define('AUTH_KEY',         '0e?j>^ad11=tSXpc/LMLbML-p_)]L)|=n92#1FkK,`ASe%8i0ZT>v8/;Ys_%X5hB');
define('SECURE_AUTH_KEY',  'm#>p9@8:5<<qzN/(39sj<t:rY]HCrCcU,liSC~LKS]o)u9Uug]|oZ6XFfCo,jkgI');
define('LOGGED_IN_KEY',    '@=+,!Cz@Jl}qIvjOlrdD5=]eH!PR|X`f,+m%+>Y^1 4|TSu&(@1c-Ym-]F8;B.1R');
define('NONCE_KEY',        'g%CJv6teu9bj!@fEM0<+T@2wP<J4j{W6DaLb_Z,;z;0IFR}D(X5O$nV_URCK[97*');
define('AUTH_SALT',        '5wvOT[GlhIK#pVp=j;![1aetNJqqNvD{)`9OVrmZ/fauXtk@~F+&`pQG&IoPT8@@');
define('SECURE_AUTH_SALT', 'U<%/J~pQGyb%MI9)Z!`9 6%I&{hbpr6m~!5{8WK&,]Q`MmbsZ90L;Zp3 ElRRsA~');
define('LOGGED_IN_SALT',   'mB~_H+z>ee7#j<?E2H=>C7s]W:CsI&5`rY#r@Fr:1i-T#:<H3<!4WC#w|aqZ}=Fu');
define('NONCE_SALT',       'X&( hlRV Uy!y%,,vc@@x mvilFYfU^H1Pa1[W$ROz;=@9*N(Zty3p7k-/xKC-0A');

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
