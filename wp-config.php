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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'database' );

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
define( 'AUTH_KEY',         'FovFQw,n6:4%`m;!j%[2Qd(QB0[*_;!66vPe%}8^trPi;a+{0VP=l;:0?;.MhJw7' );
define( 'SECURE_AUTH_KEY',  'ynH*uCq<KbK>HK5)1&*L gYO&Tx+|CGA*,x_2V*Te6_K/38c?N,G5,Vz2[>=|Ysj' );
define( 'LOGGED_IN_KEY',    '!C[`0LmED23Hk/phEc7X>lfv@RV$%:a8?; <`YWc16wFj6Z,N2ah9j}@+-ogFtR5' );
define( 'NONCE_KEY',        'Z?1e#&5z~?W^DoR`/>X192hRsKxsO[IR8DRs~qqqiI(NWw-~lQeg&aAU<ML?$6As' );
define( 'AUTH_SALT',        '>WO5M1,R_8,zQApehX[_odsO! `kF/:x89km9[|M3g3_wD1Qw@4x>ueO?vp,8RyU' );
define( 'SECURE_AUTH_SALT', 'j2Q2F{C`1R2S5z$GX_2~G7Cl>)[S5Pqa/H:Aa4H:YzEY.w.#HLp8.q$)E>+pB:|+' );
define( 'LOGGED_IN_SALT',   '_#yn{?6zWT}h27[Z0G,kYhqx/<wi9!SC^/,.@C7t Lf&HuKGB0Dsc]EJUPUQ^rDg' );
define( 'NONCE_SALT',       '<MQDaj!PlG8Xl2[TDp6W`}CaVWKoDe`?Vhedd^F1AVpxr@>(d7PGY8U8B)RX4zES' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
