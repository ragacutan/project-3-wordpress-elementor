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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'project-3' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'yYMoIYqyqZ4YHISCNeQ8o4Nsh7RxbG3I0WfbXtWBXU2idV2kDErHKBLSbNEqTen3' );
define( 'SECURE_AUTH_KEY',  'PU6sso3E8gC9KuApVAu5HOxEEpZlRewKK3Zo3kxKrnbyyTfi0w0H78tKggzsbPEH' );
define( 'LOGGED_IN_KEY',    'nLxU3UgTzr9A6eVRGAqvCtJabzaP78F7PX4K2BH8SCnFjglv8RWNuimsHNdkGN4U' );
define( 'NONCE_KEY',        '6LHIBFIciTC1h5rqHB8OivRXyqecC295Zj9FZyP7kEbD0sNjLsXfqiGWmuY9Cmnf' );
define( 'AUTH_SALT',        'm06wAnmyh0B7HQGfpW5VTjLLAmnuM5gUnSlmqmgoJFGBaX1rh0U4BdnsA94TWPiO' );
define( 'SECURE_AUTH_SALT', 'J2uyM2wxqoMYpgCXsvF0XJq98HSuiKoUZTbC3Zg30LLiqJPVBpOiwd84y5Z2jsmf' );
define( 'LOGGED_IN_SALT',   'JuIZVByJCKNMx5e9wclLVDQD1MY6TsRpRC6byp97C2fp1ObOHDG2FtDJqFkWqxaf' );
define( 'NONCE_SALT',       'r3N3g5ZL4cQgnUdFXeKThDPOIZ21UQGAevGCbqrW0tIEbuGslpsGM51yWbU4jfRH' );

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
