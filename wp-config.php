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
define( 'DB_NAME', 'GoldBayHotels' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '_TEri/s, `d/6;D1Os$bW_YPl*]04$BhU8(qqv*}aRXR1XN]@mR]!5m}g?jj`V1M' );
define( 'SECURE_AUTH_KEY',  'V8pJB5Q_LB92n{Pg^9}~YFgoB]^=9>Q-3].&>9$R0W3fvVIy0 Y__|3BJ*_6og|V' );
define( 'LOGGED_IN_KEY',    'zn2!KH-RR>pqNAIouM*{Pa9x jpO7zGn(}v7>@9qLFl{5nmQrm|ICD BBd38mAGl' );
define( 'NONCE_KEY',        'gKe652c;jmx8bCxLjGFd?2`.[*`nD9R)`91-B/xel(#uq,BrF@KVLKTYUAECn<.p' );
define( 'AUTH_SALT',        'Y*sqSGp-%ug]smMltO0?da;U(kX:2]M h7&3U}@1Z1$RUizlf=sE^]0hvH}0w47.' );
define( 'SECURE_AUTH_SALT', '#>iP]<L7s[4F8]XYbOHKOf(;!DS_%QiH>x~A?6dVOIQvdhN9nHB4]lXZ~G7h^w$^' );
define( 'LOGGED_IN_SALT',   'fskKIiwL_ZOe5Nl>:^WHEZi{OiDUjh.j$@,Mabx#iCr zeqa~!7@CMQeSFVK`z6F' );
define( 'NONCE_SALT',       ',L.EQ/4wLP *i8r}`shcDuZ)5qX.eD,YQZ7_dO0o_IgXC8j6qQ~.6nt$wgt(vTm(' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'gbh_';

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
