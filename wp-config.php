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
define('DB_NAME', 'uah_mw');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '* ;Y56cM{^{Ed$WX*TDX;L-G@o8,L{gqO^z_b3xFh=7}yf}c>%mRp/E-hOC|Sto;');
define('SECURE_AUTH_KEY',  '$K_reU1QB$5?i?)y2iEe%nwB&woaxkr8ZtW5xmSN29||{#]n%5vc?#sR =v;ez>j');
define('LOGGED_IN_KEY',    'v&x2=|6=M:p%7X-fnpG3?dbpKfzKTY!Rc<:A[/TXv@?Qz&j%a/.ehalZj*?zyIy?');
define('NONCE_KEY',        '9gD0*{<m&zT@m ?>BjWV-$t>D<RFTwNUc,m277g;r{8s~r$5G%@yDHRisi~[aJh{');
define('AUTH_SALT',        'J~QBFWcE12<.A$:l<?,/r&PYn`$Na]UV$K]/*wyF7#EqE}p*KJQ`N&9l*rfr! o?');
define('SECURE_AUTH_SALT', 'A2E>pwnxpS)ohfp#Y)d_#O9>0N?Fhw(@(/GRd|Q[MFT>E-6m*O}9?@=qybo-8]Yl');
define('LOGGED_IN_SALT',   '8FrBfFrA,Cc|8MVc~FhYbsXc$V[YoLDU!py~o=/utYvM/_vljG2+IC/{}D!eb{G#');
define('NONCE_SALT',       'qWE!Jx-)*r#6c[!S)2qdRv>}NF{ycXX@ .xl8/ZsSHBBC-BHJ{s-Cu&*R4x*J*.g');

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

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'localhost');
define('PATH_CURRENT_SITE', '/uah/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
