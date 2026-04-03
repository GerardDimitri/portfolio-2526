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
define( 'DB_NAME', 'portfolio2526' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         '84f}q<HS;N3td;bWT*13:iRRa0~~FW`k,*nnU@,=eu.8G} qku{LxpFif_,9l]Bf' );
define( 'SECURE_AUTH_KEY',  'gN`mg|1lqSh=@@}6:]w{C6dBzw=;Ip^@SRS@=0oJh:BX8fb3A9A8WfGce9=Oo$,b' );
define( 'LOGGED_IN_KEY',    'KCUIA/N6sp;Ya>N?!zfa,txfjBDOX :pzy;,GL{EIRm^1<pTfzQB-8qwH:(205 _' );
define( 'NONCE_KEY',        '[}oF >Y`#2Ohnuu.Yn;mW@q]RNm1 ZFBd4H[b c]K@fkBhR:Ew[%aU59Q)743$G3' );
define( 'AUTH_SALT',        'M(%{0*i2mIpp|/b[LO_;#2ios!f*41m[;DF,b1Ifo<h2mg5h`Em6>:s^#H_pj,-L' );
define( 'SECURE_AUTH_SALT', 'HPK8d#3dbjF<VznrO.I4l$pOz# QIq:pF9][?*S|2kfRJ67k]xfg.%e+]rY3x GM' );
define( 'LOGGED_IN_SALT',   ')xUXmO:R)4tGd*]8bmW+qbHmf//d3TgB8`}T.fKVo]T4q!z|)B`H*plWh3q:mh}d' );
define( 'NONCE_SALT',       '7{3!*V7E(0Qd-qsKKz_*{.mew(R|:wW/l@Ahp:Y.jmb18A!1^SMb=C?<Xr)]wSAN' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
