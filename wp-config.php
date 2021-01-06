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
define( 'DB_NAME', 'test_test' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '$OY[8ULo94i2e#>76Ah!~(Bqr&-SJi<S)Wu/`fAIS [dtjYN@#W)gg3>6.2V^zx#' );
define( 'SECURE_AUTH_KEY',  ' ==},S8IJOxg$3U4w{&[tdFu<y)J7>hRFJRjEs/ZD 9d|`bg&>2V6to7wQA#r_Gk' );
define( 'LOGGED_IN_KEY',    'Ql<0 r-jO[h5^Xo:{]o9 pfCsr+ay-7C6q*D2iIsv+Z(HH5m$6yp?DT8ZJ= nF/+' );
define( 'NONCE_KEY',        'iFRaI+ >~3Nqe^bq/gbgYY;EsX`N+gV2ta|c]J fOxeXbz.n|5`,bbPtFo]$arjW' );
define( 'AUTH_SALT',        'CWPc:H5`bcI:b`u<$,ucl^;D5)MmIii&{kP+)(-:*icO,2[P.Xkaq+iAb_V6)RA[' );
define( 'SECURE_AUTH_SALT', ']cue]z@hyb?8HJMce.e,z,GpO,_{Bj=cIv{T9PLeSQ?YHcSp6nZ0hF(yO{ke5gX-' );
define( 'LOGGED_IN_SALT',   'U<1!aF?ZV[7WB@yu7F08z@n8&=WzlBGTNgX?q9^n}?KPRJ_-a(z=T&LC* FP6*++' );
define( 'NONCE_SALT',       '/26JDe $Z;Gl+J#<S|+^N!1W~x)xfyZ)ei$q.O=r5uCxzKdbB/yA/JL?UxY^gP=;' );

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
