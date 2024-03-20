<?php
define( 'WP_CACHE', false ); // Added by WP Rocket

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
 
 
 define( 'WP_AUTO_UPDATE_CORE', false );

 if (strpos($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false)
	$_SERVER['HTTPS']='on';

define('FS_METHOD', 'direct');

define('WP_MEMORY_LIMIT', '64M');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'udig_2022');

/** MySQL database username */
define('DB_USER', 'udig_www');

/** MySQL database password */
define('DB_PASSWORD', 'Bzy3@tn42');

/** MySQL hostname */
define('DB_HOST', 'udigstudios-cluster.cluster-c2bdujgbmyqc.us-east-1.rds.amazonaws.com');

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

define('AUTH_KEY',         'xmZ00Wdl:+]_GD$u|y]G]M*-j9NAzL7dDC_5_[<406|eV^X,v)|*NJq`a2HN!ni4');
define('SECURE_AUTH_KEY',  'swg]MH616Z14}j }jC6|i=jy|m}G/p?x|i-aW:xBQxOclwqH6^c%m:H-~^bgG,O|');
define('LOGGED_IN_KEY',    '}EiC%XRFfH[o|9$$F,h /)$ 0J7w@n.qU{EgxtYEv~C$=,C)j9!}W45aPr56udCx');
define('NONCE_KEY',        '~/Ss?K7xB&-:h|Va-Qx&D<BxLlp<}2ZT#i7%1xpnv%~T2FZU@,dl#%F!|-mLseO9');
define('AUTH_SALT',        'S.zxb0>)%RPQdMl(+8wUT||u{ MqgrO}_| D!9pxK<~3kl_^k_RaC&I(QIyh{R{O');
define('SECURE_AUTH_SALT', '?rI sMAz|8+&w.1Me)D(u*AL+Rc$a*9q.ie%[1V y/%-3Xd0@10d?xfj>y.GPH;)');
define('LOGGED_IN_SALT',   'J*|uyC3@f+p_##`$=5uvU&Ys)E%4.`%0Sy4.w`PnqU;G;f)AO%-4kC1+v/m~sG_`');
define('NONCE_SALT',       'tU@3wCCt[}|kU!qQP &1V,CE@y9*[U>J*rcm*sG|O{ww-peOu*WoZ-30fG[T|i)M');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

// Enable Debug logging to the /wp-content/debug.log file
define( 'WP_DEBUG_LOG', false );

// Disable display of errors and warnings
define( 'WP_DEBUG_DISPLAY', false );
@ini_set( 'display_errors', 0 );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
