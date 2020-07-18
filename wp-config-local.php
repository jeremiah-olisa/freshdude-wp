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
define( 'DB_NAME', 'freshdude' );

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
define( 'AUTH_KEY',         'twO]7i63T7{|0&}{5(_7Vwr8g!PBwR^P}3nuTPL|b:9-nW9=+BtDF0riK>l,FK}B' );
define( 'SECURE_AUTH_KEY',  '`|@_kz9v4cmvOaRmp(J:EXbeC3h$]0@l(Q#f}wI3| k/kILvh@?P3nbDKLw=;<~x' );
define( 'LOGGED_IN_KEY',    'HfdV{FcJaslWly+dLY0v6Mv9[aLly@QW)15*9*DHW~&~59|YQuc9c!YaV7O 2w4S' );
define( 'NONCE_KEY',        'i!.-QqM2LQDhMu^{G19qm;e<CDR*O;A 38+qBhKO8LH<E<0*ZU[|v<*4|BP~8prz' );
define( 'AUTH_SALT',        'xp[gz=wx.c@/%PIVom<aS/cb~058KsN_+GK3p?us_h[$lq-FG,Mw(A)(hR]6}Acv' );
define( 'SECURE_AUTH_SALT', 'r)q1DOhn.pvP;%Jnf|R8rq[g~i)1(h-<}*W]hrA1 ;zvW_/+ax?3UoPCW%;,?z5%' );
define( 'LOGGED_IN_SALT',   '`hG@sf5MfFzIU_uWpd~RJD@UY*xuX{RUHaGMJgb#O|FudSQHoy@OD2&ilmYBUw_2' );
define( 'NONCE_SALT',       '_6J|*QYwNB_+jsSa<(WAnAH/=X.zT8<]~(H}-_;cPgB%LYGDblnD,^fRKXz_CTnH' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'fd_';

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
