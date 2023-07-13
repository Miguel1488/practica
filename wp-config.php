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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'practica' );

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
define( 'AUTH_KEY',         '6J7ONpE7~[LvX8v$F{+!pOBlbbd[jD89PnR/Dxv%U$*rjy<,v1WOWm6iz9ND {d?' );
define( 'SECURE_AUTH_KEY',  ']@1oRWvFm8!qZ/QqIXp80M[P]u.(^2PGt+=+l(|~O%},YQEnd`x%}*$i`x!YNleE' );
define( 'LOGGED_IN_KEY',    'i9yn@2LLP{{-3RfLDqk4ac o6+Zp/Rwj/cfSX!#Et?ph{l&KU)%}|>PY<~/-(86m' );
define( 'NONCE_KEY',        ':G$.Q0TR>Hd.(DEtS/XIJl7`R2<6ED6jLk8bFmb c$9p[- 1Uqq2|D8}Tp{RPF7q' );
define( 'AUTH_SALT',        '6)uS7u_>RdTIA+>wBL<e}l=%_Cl|WtJYtw2}tCzxkxXC,iqYF-=i{MBAG%nxReG)' );
define( 'SECURE_AUTH_SALT', '{)F@&+OudR(2#p3hI}.LG8[(xO;!(,c]c+O~bm_nqquw*yUI]q<VrBpx| [.9wA)' );
define( 'LOGGED_IN_SALT',   '~cnJ<rKm~j!(CYUqSBI/cT,u>]=Z.+F8`Ek[0UA#[0<V5b9|4(RdQFZB6OVEuoO ' );
define( 'NONCE_SALT',       '0(XR7r)e)am*A5U#LogYt)xqk,/aYg>7j5:Tfv/mPfgmNRGRNgUe`0, ko/tM<e4' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
