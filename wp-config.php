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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '&7uE_)A?  R|coi?}*[w!5y]91h!.|> <;6?DP*>2Ot2md=M#IY&S|sV{omq^c_I' );
define( 'SECURE_AUTH_KEY',  'fXt v8|n}UVP@zAPPla6Z6r-szWXK@OuYN?M=:S_>z-|EfQn(ED2tPOo3WE6%z%w' );
define( 'LOGGED_IN_KEY',    '!b2 oA@^vXjr7npA0/r!CxEdFm3d65j_ GaWh:U q8^v%f5K0 }4^%@_yYJndkpb' );
define( 'NONCE_KEY',        's9$:+sJ;Q_TNh:>`~RqWK*2)yg6~ezFC^w|/&qK7@C[4ZS[$!on-.]1jq<!)Eiz(' );
define( 'AUTH_SALT',        'kgGu3>yDbLEV7}1:p^bA2BC|Sf:J/++R>khimZkln(<sPfPFL-jw3KI2DYipfF!/' );
define( 'SECURE_AUTH_SALT', 'T|y=FedKjmZzaeQoO<0xgm]Nzg=2n|S0SZt}=1W!va|9j)Rs)-a3!?g8GN@!G3[X' );
define( 'LOGGED_IN_SALT',   '}_mV0=*d[$T(ysr~9wF2XJCAzZlAB>CW0h+TY26$=q.25_xBgv{q07ERfKb=-IwP' );
define( 'NONCE_SALT',       'KYJd5%0Wx})(?K#_> InheCpVt*G3QO|hSj-DozwaD]>/9rI-gD<F}_qKp6q]$:L' );

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
