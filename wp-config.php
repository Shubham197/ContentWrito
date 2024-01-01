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
define( 'DB_NAME', 'contentwrito' );

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
define( 'AUTH_KEY',         '(b$_;VR^3LP2&UJinu5{**-<%>im{$mv^9i{7YF/&ms^:XmHv!wM8*mN.17,eJi:' );
define( 'SECURE_AUTH_KEY',  'qSiI~KcZx[@T+(])hB%{-%OaW0Pb7D2G[W/HVuDEb|c-sOel6NXPSZ<1z|e{j>H/' );
define( 'LOGGED_IN_KEY',    'C(nr~N{*&J&;&uT)s#&ODdwl@6~,q^@64ehsh M0:MAlXF-NK!zyYiBX06fFz<WI' );
define( 'NONCE_KEY',        'Pu]-t+og_?uJ&i=oYn70zBu3<c?ZD@2KQ+0ey_Ar|<3a!kYYeNeCm0?A8yPoNj#R' );
define( 'AUTH_SALT',        'l:~u4uc9wFd@knnADqo>7AdUJ7%vO$m=m)QC6,!gQ9qqABJv:uk!!2]Q0HHiy=MT' );
define( 'SECURE_AUTH_SALT', 'Z;WW9k0dx uuO(R6 !)*0(ZQ--0M0!gR@#Y.?EGRQ1K/k(o0k4WW+1LU0O5e6;tB' );
define( 'LOGGED_IN_SALT',   '}};.0^LWPEtEYS(iE7_yll~Sn{4AjGWEGG)AD3zTtGD$+#7S.9JH=V*vERz=>Av<' );
define( 'NONCE_SALT',       '_b4A3Er|*O-r:o08e%?RxcIQK*aDvBz}<`KyCa;G[p&nVJpJac87~8|Nq]n_]hAj' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ctw_';

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
