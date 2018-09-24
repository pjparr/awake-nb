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
define('DB_NAME', 'wp-awake-nb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

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
define('AUTH_KEY',         '=]c7<0arY<^#7}xu_Q8`eW-lr1ZG4j@CRRD5orwuaN5?Q^jOaNH+W<%pnW_k &{g');
define('SECURE_AUTH_KEY',  '-m+)b.Sf{(`=:cK;ee|b5pq{Z71OPxmq.y.ufTE;Xom[.$5wIc2?mu+~*13r+%m.');
define('LOGGED_IN_KEY',    '9G3dO[+<W64POB=XBixw]/sDL0OPxxNMlfNR^-JL7%N;)D1AaZI:/WP-z3lPbw[F');
define('NONCE_KEY',        '5z>4YGJTg-8/l|4!K-4@h#H+k+LF<0b*oqF71yZnh~p3+ ]kFcnA6Yqt|]<U%Tpu');
define('AUTH_SALT',        'VVJuGM;-8(weU}+IjCiK0?o=PZ0i y-S4.Uh&j25eegkXC0_&AB(j7RbI?I7%8+8');
define('SECURE_AUTH_SALT', 'C<Cb,}+_{ m+t)ilE-$8idMPOCJ`hBBkX~ofu/.lHAncN.#+  J>XX/Q@v-M6_lb');
define('LOGGED_IN_SALT',   '2aLRNL0SJ@-G}QYt.w_L%2L*Ulw)VQxNJBSV9!1RCv$=;J;r~~2hYi.<[!4xt~8x');
define('NONCE_SALT',       'U17|n kX*s<9~{8:A+JE+|f+SC2=x:IRk(|Q{Ns|6Z;v0;Roqxio$sVX-sW(Om-p');

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
