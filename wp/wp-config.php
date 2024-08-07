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
define( 'DB_NAME', 'armando' );

/** Database username */
define( 'DB_USER', 'homestead' );

/** Database password */
define( 'DB_PASSWORD', 'secret' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'N vHvdh0csmS;h=C#I$3zWt/[M]xo`^fNTUBT9.1+stjf<B^n{LBqY4Rr1yRgCwP' );
define( 'SECURE_AUTH_KEY',  '5FYn&.%cnEX/S4_f;.Nm)W.uHN_jr!*IFs3zR3fK,atnlK|zYlOOHYnwR48~hu6k' );
define( 'LOGGED_IN_KEY',    'ACiZwDo^{+lZ|&*+;biV*$y*?{BxTIgN{Uv7QA]3T=Ar>3r7A|]oht==&do`=;##' );
define( 'NONCE_KEY',        'V8y<6zEpDaF%=t*Mfs7`_# 6oDSO2gIw:V3p.,4#DSY}&7F>!3>d;}3A?mIw5IN3' );
define( 'AUTH_SALT',        '>) `o8u+*f2I8g*SNE|vl04ez$h,YwBJNdq<c@AWVQ@{xJo<]1xT1w80y&.t=MHX' );
define( 'SECURE_AUTH_SALT', 'mJM<0/ :vt* 700p?fysQtcYuPZ1H&*C/C:EB=}7[_uDwjpE*H[j1];W3(Y:b2/u' );
define( 'LOGGED_IN_SALT',   '_5*EO1)zmVn1MFNt*aG7N{0%@qDw^r0[M{WpLq5HI-q,x2C>w!rM(Gr0`17yx82_' );
define( 'NONCE_SALT',       'rYU}8&ZI3Mp0|pq9yF([f|XlE^x<@{ac+Svo=!/8DEQ,Ea<!V+hAjzc*O(;7y L7' );

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
