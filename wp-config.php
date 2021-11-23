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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'zoyaluxurysuites' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'q~~j@pu@oHmT{-R1Y))cn0p}}i{EalM$6)Sj0kLzJA>l}M38-C)}snB,n&}D*;@w' );
define( 'SECURE_AUTH_KEY',  'DT7<5Jt8+)Gs.g>h9Jw/`#$(0Kq<r!H{xfPB. 7lX!_N3IUh)WXn)+GJz[1$T6yf' );
define( 'LOGGED_IN_KEY',    'Wi5m_1z?ILtZ1{{E)A hU) vc>SuTp#]kC8J64(<lyA%i(QYlAK`:;.rT!ZbgkBP' );
define( 'NONCE_KEY',        '`sty!NT0&/}6 sHUQaj&aBdE<R}0N,;q@{0egWj?J +~~Y!WXy(nP[Hqdt7A`{SS' );
define( 'AUTH_SALT',        'UF+nGOF9<Uk3$X!uk4!1@y@3.TIEDNNy8}jf=zd2b**5hKT18?.Dv<JE[EN&bVm@' );
define( 'SECURE_AUTH_SALT', 'fSP){8.ACfbm87}MB)%h(P&It/-x5JBvMS:@v_EN<xW*RF0(-Zv5vT$OBH-j#w/t' );
define( 'LOGGED_IN_SALT',   ' ,Q?|wF,:*2ei]=y_QilH#DQ&7yvkw?RZit1sM~gFI$*pbpzHQd.hr0]?G/Mt&V2' );
define( 'NONCE_SALT',       '$v90;A$%W@p@;NZZ2!,j!CbF[*/|>[96I1e3gCni=hDz PVQ_lnW_9`uwyc*[2kH' );

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
