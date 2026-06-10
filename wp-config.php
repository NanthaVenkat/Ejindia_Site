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
define( 'DB_NAME', 'ejindia_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1:3307' );

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
define( 'AUTH_KEY',         'tesXfF(icu{2bkZXjqQV4|`(d.&(cMMw]Zpe~%/-01%>1/_g<qUSm%#.;Ncu{KL6' );
define( 'SECURE_AUTH_KEY',  'MQA<RzMxjr!D ^QzRk>Y%GjbFj c2vn.C%Jm>WrFzc}*Cq7N=.ML p^s u8mj_Eo' );
define( 'LOGGED_IN_KEY',    '^Nh-,ZC;OAetxH,Y0._ etp|=I MO?!Db::eJ[8svZ{z?058086b%$dy#NA^.eb_' );
define( 'NONCE_KEY',        'Ca]bwz,)oRDhrecQ(`#&i3XZ!(k[;2Cw+Y5N<;$cpP5-Tvv0tR>P=w5T{pAODCTY' );
define( 'AUTH_SALT',        'fD]K^L,j|)xG7+:D)a%;X]$%h%{^1Kxq3?hj9|9xV{%K[wY-0-e/=#aBWC!uCQ$g' );
define( 'SECURE_AUTH_SALT', '5Xf5eSK=71%{/;ddCn|jliZsh?p@IP{ Z? n2u+4b,Gy]R>I+>sVeO~lvVIh,q |' );
define( 'LOGGED_IN_SALT',   '9y^42sT|B<%`H@kOPYD/UGo#-XI^6,%U 9a6}(KSEL+[u[)45NE|iyd+6G#,`(Jx' );
define( 'NONCE_SALT',       'cLT`,O<chYXE0Bo.&>n !xt%_.NsMo_?+&LHmSpwC{M}!^muMU{YH$CQW%ym@ s3' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
