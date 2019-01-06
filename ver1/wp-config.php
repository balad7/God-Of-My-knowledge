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
define('DB_NAME', 'mac_v1');

/** MySQL database username */
define('DB_USER', 'media6');

/** MySQL database password */
define('DB_PASSWORD', 'media6');

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
define('AUTH_KEY',         'A_=vqgn8{^Y>6jcWQMT#)Z1Nu+T$;=,yD(zP|04_@9wtX.*/Ut.|5b9xW9[L+S}}');
define('SECURE_AUTH_KEY',  '%%Q{L;$7xY#V|m@@KDE|DD|W=G<Ir5oi3!A&-u$k_@MDY~a2zz~9wRgi#=`LN}:k');
define('LOGGED_IN_KEY',    'D}a(rvr-M<AI<sr`FX4RA={.u|eK3i2k]aBsG0)F?.!rP)wE](EKWRLEf_r&xTmS');
define('NONCE_KEY',        '.ecI)1zA4Rnd89 [/<V^b,0{G>[6-.b&=s}*hT}GkC@t)D(+YRCRiX]H0mL(FLB;');
define('AUTH_SALT',        'R`Y0}w;u]Kfj`mLx(SS((hC-S2)/^&*oX(pS^r*O500Qy|O[s@F@)Qcq}.><?zbj');
define('SECURE_AUTH_SALT', '@HBY!ts682x /Db1CCD8p9$TKm$3pbsb+&N)2 3tUx,;r_QJ5fc^l7^>Lw!crxWg');
define('LOGGED_IN_SALT',   '15%N0;e{N)]p>mpJCp&6y3&so1(:de}^ Epti;5,Ib,fkAgR`N_%,x!`*~1,6we@');
define('NONCE_SALT',       'UvB^`ng1~ 1$CGQcX.fe{Np8YH0n4-B&MlRGuyJ/?3MjT>cfr+73yz]#Yr$S]$Ee');

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
