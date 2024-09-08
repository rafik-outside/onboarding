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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'D-Ydr^+{@ziUPuzaqQO 79BjrZ_Q@[0cg7BVe9D@Yu>wjqv!;j8K}Hg}AH}Xi*z=' );
define( 'SECURE_AUTH_KEY',   ')5u /XsO5T,55p*@M os#C$z*F!CHNPP&8Nzy+K0wJ]11.9wr:!NLZ2.@8j%smL;' );
define( 'LOGGED_IN_KEY',     ':Z7C%)EEl|2{je+JP$kB` vq)A?@O|YW9>s`pl A[ sI^SqQrU-VnRn*-kc,tigw' );
define( 'NONCE_KEY',         '{g7j./%B0Y|c*XH`cnI&e1}x*zbVR3{+-Pt3~R@%PiE t~?`cgfyu}{5@kz#`>s_' );
define( 'AUTH_SALT',         'cC$kIB!xeCuWg1t=L.q$JR~+xn+4K{YGN_CN% YNt6>C2tC74z@A::C8)d]8ew:=' );
define( 'SECURE_AUTH_SALT',  ']vVw#{X%kPMGp3a{1>Ca=[.,!-,$Z:dVD&(yN4r#keK|?^pN&LBwgB~DfC)_({>|' );
define( 'LOGGED_IN_SALT',    'hcM}LwnbVtWyGJ9pq5Q+|S-qK1_Ti|?dcFu3@<I@eB3|Tq~7U%u)ah,q~1:TatXI' );
define( 'NONCE_SALT',        ';F4IX4Xz+u>3((gkUk>p77?40]#1wT/Tcv>x_ll}3xynWRZR/](b0?9]h!r(vo-7' );
define( 'WP_CACHE_KEY_SALT', 'G:;DC^Q:KdP]>8S1QUQoov@j+p`_Z|8Lb_$: X=$_wzL9p^8^BmOVO@Ue9;a/Vw$' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
