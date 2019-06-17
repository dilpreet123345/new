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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'rvtech' );

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
define( 'AUTH_KEY',         '3H|M3E ck[l!h}VqSa6A4gBBgs63{Z#&cKL5Gic+(PezGZ:k_s=5:pY:^y9Wo<@]' );
define( 'SECURE_AUTH_KEY',  'AXP#]$UpO4d%rP6# Ds?9VjPNun&N^o#@Hr`g1[on@anTdUC{=1^|AVL1LoC29dH' );
define( 'LOGGED_IN_KEY',    'F6Ii,s|)J2sh*QlX)Y=1B@G#`,%*ntL}GNC_J!0JQ6JEZE3rKzp`@)@Gl|DfE&On' );
define( 'NONCE_KEY',        '}Wc|{Vw|3O*:sY{lJfKOWqF%b>1,,!/Y8RQ$`?4(-IBROJ6T xcxZ)kZ.KfW9iH_' );
define( 'AUTH_SALT',        '|46!vWBKrA,%HZK_3U-@};7*1::iPW[z@?#Qka$PoQL(?/MCOvmM2=e]V0u?F;0%' );
define( 'SECURE_AUTH_SALT', 'M*VJ!4;CW-^;=Pzyoyvw$+tZ6s;DJ5[nImF^5;usbmo6QE9ggR|tq+Q`4kh/>EV7' );
define( 'LOGGED_IN_SALT',   'm0rXC>3kewV.FO/9U__Q{~ui<R1`5#=+j&f1;je&EMd^UgD(z!rKqc2O<GRbu~fK' );
define( 'NONCE_SALT',       'pJxl6p8!>c@n?~x{O!d0}_0SZsVw<LC>nGs_]K!u.QeJEkn,zR((wVZ@|.YSPj^H' );

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
