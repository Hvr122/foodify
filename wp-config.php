<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'foodify_db' );

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
define( 'AUTH_KEY',         'z#-HI4(qL~a6{Zc.VjAB rE]fM1GfI)b_UMixl?sXz Ov6O.rX^>4^4GpCal;Io0' );
define( 'SECURE_AUTH_KEY',  'Q{I4i#:>_2IMMh,HqrY)U1){Jh?H^XOvtFKpHbB3.bntv3Z-;=Bf]X+IRnJ)6afF' );
define( 'LOGGED_IN_KEY',    'cbJ|S<tFqLr<fl^9C2`_$C7z,*[PDx3z&u2z,YtVQ/G5b6/7yr^]$b41/]>2i)A@' );
define( 'NONCE_KEY',        ' PT[wtZMZ>*30<zlA(Z;Ql!{Cu3%tGhV,owGft=q~#{9^.8xYbt*hmk15;1vz~uh' );
define( 'AUTH_SALT',        'Z7 K/(vEa:40f4r371>*D]:LCM*v~LFH/`lqn J1-KEm9jKAfV[S{;rC[]61pUNG' );
define( 'SECURE_AUTH_SALT', ',v8BL=v~|P$%/-TdI0j;`ZDscR(H(o(au{(k-wkFiL|4^Ye|-dRG]_:s7tSg^9~`' );
define( 'LOGGED_IN_SALT',   '.BhTrV/x|iV8*TmYf,~T12Q}.Y,E+L&PB+I8&S:~FJw?DuaTO]/MY:X1GOL86xb,' );
define( 'NONCE_SALT',       '&JY!/ONyBiGA3&7Xf9/pTk-O:u-!FsaL7qTW>=PeOS0xl-_i>5nw5a:Zgl*DCHSY' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
