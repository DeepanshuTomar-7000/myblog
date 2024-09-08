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
define( 'DB_NAME', 'blog' );

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
define( 'AUTH_KEY',         ']-/x6VHD%0Vdlrl#H`zF0OAuu#E([T8:}UK;|drK}7eg&[O|FbK`Y+f9k@9RIqBe' );
define( 'SECURE_AUTH_KEY',  'QEq=b7U!yBrq&4-j-(6KT>mZ$udb[gh;`S8!&pu{OJz%6k 5vvOWFH:k?[/A`VnP' );
define( 'LOGGED_IN_KEY',    '-*:_D,<iAmv0i-o@:Z}sppM^X#IF|4ebi+=Dlv9P76YwA[8o{)U$/2AO^8GC>(}p' );
define( 'NONCE_KEY',        'D}^hZNOZAwbyrXcRb?.H(-4) #1D5{u3%G?:Fox$sRX6x+ 0bq*;<Bbq%xTS(CWU' );
define( 'AUTH_SALT',        'BhWbuh0K_ZHp}b_CBo~JNDfkdFR@39+h|J>`<<B+(pQ~:Q!`-*fe-#,od)n0y1C3' );
define( 'SECURE_AUTH_SALT', '8>|Cw[}CrCgE!K*<HJ}&Ks!0Ta@aB y[:ngRq0?WF4`9Y~L2W&P}Nx=uY[8~ n?=' );
define( 'LOGGED_IN_SALT',   '=F1!IMPBATAL~UlW6<q[/L DfxH.N[$BsCP{.t.1}-F)[|a !TCB`&)@B$ Sp_T0' );
define( 'NONCE_SALT',       'a{m+]sId^EwrLrxx~xEjJbAy{-a&Q2S3;_X+H,plrpY?e*fzbqa*W?j3)+el=QUL' );

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
