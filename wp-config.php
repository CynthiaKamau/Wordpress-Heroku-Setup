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
define( 'DB_USER', 'wordpressuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin101' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define('FS_METHOD', 'direct');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'V~SX{66+H1_G:7/.~#(2,+SP+P^+Ek.E+?DfZ v+}c+^NNTN,!,?Te(xy!/w3=1E');
define('SECURE_AUTH_KEY',  'z:{d?{5m=Yv0EXxs[N-+RylxQd8eJH`,uB jh!FY19UC{-91z?sD)c.+9j.Dk:rs');
define('LOGGED_IN_KEY',    'G1f<+}U!hLK1#>.Ou:+xP|)hhKfmt37i#D|knjL -AF.q!{*Mr>zzE.L1Yy|daEg');
define('NONCE_KEY',        'rn6tR3+~}?&bl<^J[hI+B?jfg T|YuN_;^E{LfP-%,+I73@DW26T-kt46KZ$ZERX');
define('AUTH_SALT',        '|Ci%j3#hT?z6G A|5J.#yK!%-l3uw*fj%L{cv*#-9vd6Ta5`&;xIH=U.E+.e5N*<');
define('SECURE_AUTH_SALT', 'e,`-fQ(NnBhyAqdKh(QSBS-Og{S?tp+bs_Ea%e<|R547Z:2-ic%&yTQ)sB>Pt0v4');
define('LOGGED_IN_SALT',   'lj UD5gPz#{q 0Rp;^KKBnJljPky-xcjF/Aa}m1erX(d4/3_2R^`G)e~9kF-]40(');
define('NONCE_SALT',       'y<5ss[D(XjfwG4jslQT|Zj]|(jhuF|?X(<zfszD)od ]ib]60FGE)+eG2TsGg61w');

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
