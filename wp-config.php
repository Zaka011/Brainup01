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
define( 'DB_NAME', 'brainup01_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'f?1waI&`b/<m*u8,BxC5Cn~Lj qZ81=oHwkZ->v;+I5tVYl<laXqK@d%0pRk;H+Z' );
define( 'SECURE_AUTH_KEY',  'n-Z).?#xF*u)kqE7ZVJZhDPj$1L>phuh1.jGIcC/B?e8Q5v?q%<dT<dz:#2_qmW4' );
define( 'LOGGED_IN_KEY',    'M!p|bxD4pPG!JxOs3{&Y$l0^Yf7F/i>Ah(^/ll:Vi#wW+Pw>-(2503sv=MM4o>d ' );
define( 'NONCE_KEY',        '8we7]eQ*l?*%/>:l*uZ bT/9MdQ$u}[5.Bz3#ltx#p[=**lv|dE)X|pO =nREUR+' );
define( 'AUTH_SALT',        '(!&OhJiK}}#`fnfro5I3Or(;j(7GMtwV<SAM.t@=CV.1Zu2GjxU6$Y3U.FytMK~^' );
define( 'SECURE_AUTH_SALT', '@RmKP=WL[W~PTPu3hkskqn+vZLV[6az6ZkmqRgMN$APsHt; 1+0fW-^4v]/Pa&^W' );
define( 'LOGGED_IN_SALT',   'MCl_uWmUZ3=skB;3mFM<g.++C$oPjVc?71(~]jI J;&eb69KFK,d$O5:9$G-qA!h' );
define( 'NONCE_SALT',       '#ADuKRLiuT}cs3QwxBP/zlugx5E&G`O%o319oA2jW>r?@jZ2$PqQM}[%n{<S&}Ic' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
