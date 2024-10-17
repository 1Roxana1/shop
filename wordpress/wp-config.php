<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'shop' );

/** Database username */
define( 'DB_USER', 'adminR' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '2G6d$`ph<v~;$G_;V45U;4+5bRmiha@~l~L-}Fud_anRJoqabIjJlE5FQp$%<g#J' );
define( 'SECURE_AUTH_KEY',  '@3>KksMj$5txjyoc V:_PbLROHM~![q{PfUt(;4Z-t{TaDoe}Ia*@9qc[-[vb,Ir' );
define( 'LOGGED_IN_KEY',    '6L7Mu,5x {uw;d|(uVC6WP35NX$[pj8D(:<~$NmYD3cXdd* ZZDP^ei2RYhhV~.;' );
define( 'NONCE_KEY',        'l%7pU$M`&if/b9zvk1m&9TxSTB)t2g6[yjW0c#QQzh3f:=$L|!*)zmB>)sT-^#,;' );
define( 'AUTH_SALT',        'is3+P.HWn1+E,QL{pKukN~x_WDL^b-KDliH0D?Ut<&E(.EnxL2h1zQj_>M45}M5x' );
define( 'SECURE_AUTH_SALT', 'XU]BJ,:vT/gA_t/u7`fOeKg5Z0cPbs/-M2I:_<KU}GX3mH&w.ze.xP)`8Z]Ip5tt' );
define( 'LOGGED_IN_SALT',   '_q9s<k4Zu>/P&,bU re)fhdk29Vm!HUt`GOtb%6[Ie?O-QwY_A434}aM:{HagWCT' );
define( 'NONCE_SALT',       'YlZpMD|2Jau8mWS!`oIC9w.rq/iiKRhz.M+OqPrA/hzaUP ge7Y&G|Ax*vMaapN{' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
