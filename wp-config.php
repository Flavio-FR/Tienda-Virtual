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
define( 'AUTH_KEY',          'tIf!2,u R|/iQE*9x_9D8w5q9F:BVV>u[T-e9K;V4=JWcF%uzJVOZNQ|HR9,Ud]}' );
define( 'SECURE_AUTH_KEY',   'vtj}#Ly;g_lN7pk_^ka!(6xQZ8(#&Q78V!T/,&J#,dw/p@ga+].<B[4vwaw2*(.:' );
define( 'LOGGED_IN_KEY',     '}Xp1zC| RK4CkR761ys-qjjf:%`?ae[? >;mf%kzg)/+vcmys4@$&4,ZzRiZ/i>I' );
define( 'NONCE_KEY',         'z;i{]fu?#fi6w4uG+gprwOoQ<dv~&[Q0z}rnDHa!HU@nv5*s}SwP<CWBcSr+s~Ui' );
define( 'AUTH_SALT',         'YuT%@,*7-hs!kZTC+%g!bx5MP|PQ5W:c#.KYSZ$tQ.{:y8W/@}N)md #0Hbp(SWw' );
define( 'SECURE_AUTH_SALT',  'ku:sbnT5D%AGPE~F4v|yYT/ydeGb,n;qNf F}WlMCo5{}->^F`$Om@Aa|`QlY6 z' );
define( 'LOGGED_IN_SALT',    '%53W75q;zcP8.*i9AnBvrr0F5G&lIsvnC6oQzmbhkzlF~GD&Ye7Mp 7kSZ3?$8/D' );
define( 'NONCE_SALT',        'KW5:~S OpCZ>O zS k-jH9=ABa$*jG}Xl<vo_%BFu;K}n){5?rxA:t!d8rMdeP1`' );
define( 'WP_CACHE_KEY_SALT', '2ksN[/o6M]xmJPEc2g$(LpeRS0x%:P!>`SjUCG.vgDL`$xP%y*{w[.%80Q4P/3xp' );


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
