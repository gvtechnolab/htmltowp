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
define( 'DB_NAME', 'worldpress' );

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
define( 'AUTH_KEY',         '~5I#[V)md>Zvl&AgKDYM}}m!dCD|`s-}so-[SNI=Kh-=DrWbgvF@;AEK%T+Z)zzI' );
define( 'SECURE_AUTH_KEY',  'hzzNz=, w10g$8Nf6QH:Ni<}1(LPq4 S{(f(kGKR?Z.[Xj9kL4t$~~Ph%*tS-/U:' );
define( 'LOGGED_IN_KEY',    '0/L$a eV+iXeME>^ISJO@QQHr-@hc|bSD)TK`KHk.K/gLvba}Bj#QqJ=O/)+$#vs' );
define( 'NONCE_KEY',        'APhcETwZNbQ$Pur/R5Q&&).a84Yq0LK4zA$)?RWc=z<Qdi{2u=|v@/oiuUPf%1uO' );
define( 'AUTH_SALT',        'y2BbUB|{Uu1_&$S#:cPU!;pax*vhp} +:]H:PRJ]tL./FJ2V:,Qzqi<%o,/%&Z-!' );
define( 'SECURE_AUTH_SALT', '+w]eQKQ2>I%-&X~d}PTNSIG]GKH@5iY~D+e)E&!T6cYF%$o~5ds@Zh/)%ogB~aNK' );
define( 'LOGGED_IN_SALT',   'NjaI VT m{|DGTzb6(#jsGwkXjX9WGNq5+W;qwaN4Ym#Cy-T-IJ-8M!zTs6ec(8S' );
define( 'NONCE_SALT',       '3>XtWhgX_tP0uUnS=WIis_UN3:1tCOd=i*Ho|9uis*l8vCpqp{nH]p@cd]#*R1st' );

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
