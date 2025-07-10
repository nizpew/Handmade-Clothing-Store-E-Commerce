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
define( 'DB_NAME', 'storedb' );

/** Database username */
define( 'DB_USER', 'wpuser' );

/** Database password */
define( 'DB_PASSWORD', 'wppass' );

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
define( 'AUTH_KEY',          '6/6ZriB9{^-nWyTh{wW75Vj:(hF<X.{}O2=,P+~f_2IQ]**EP3Lfa-2g22m/;]]B' );
define( 'SECURE_AUTH_KEY',   '|c?0)_kBa<;l+fYQn5>2/f@iqd(UQPvRp7RgD,8q!!Ies%$u`08Fs9v&VJ8$m*a<' );
define( 'LOGGED_IN_KEY',     '6!Q9w.(02T3BOmN`yvNOCmh~N|JC+j`=no}7nerm!2[5y{BvigHFk|&)PebN)~U)' );
define( 'NONCE_KEY',         'C9GeyA`.J@,M$$*J;f79]oU }48z{|^s/SwVO ]jJq|V*-+;8nMuaKh9wLaSbxf_' );
define( 'AUTH_SALT',         '0f?u4Fv*U7([FyIyR:5YpjS pXfzr5XY/HB,CAi F7:-J(`r]Xj[gio>u<6q^xBE' );
define( 'SECURE_AUTH_SALT',  'c^,&gc^5rMU#yhHp1$((kw`Ii1 lDqB:yx.B>>qc Qc~=r~0.Iv%N2C/XoxH([-G' );
define( 'LOGGED_IN_SALT',    '*+<ul=>x^E/zJd>f.FVc|${gY+ =2VZ[M EMX~I7T%s8l{&+Z;sjsQOu9xln[cfR' );
define( 'NONCE_SALT',        'I2=;ri @ezv}qv_@_dwb![nlc~WAORge1+xpK!Rw%g1+7C]8]x~sIF5I@7)[tP7B' );
define( 'WP_CACHE_KEY_SALT', '!U~MG4T}FS!1yV|rFV{N3F$9;^4xyBA>3f9HJXED1UK}1q98Wkb$vw]0o&h%waYw' );


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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
