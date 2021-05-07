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
define( 'DB_USER', 'sainyi' );

/** MySQL database password */
define( 'DB_PASSWORD', 'sainyi' );

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
define( 'AUTH_KEY',         '%u^_bP?{BO$+V>WpR8Q(}=ItK*XuzlN0q*GMk=[(ggm.+wU8!=t%(UDx+&YTJ`%/' );
define( 'SECURE_AUTH_KEY',  'ijDHah_!t?Kp^@Xxrr71iAlY[eQ+8/#6e$/Si|Y)!6#nXoACTq<&:45wfd(9h|1,' );
define( 'LOGGED_IN_KEY',    ':=3]QMQssNvq+y&5&)3vyl}raEC,2E~Co]y@eQCg.F.x:d^&~(U~gTDCH(u6324d' );
define( 'NONCE_KEY',        ')1J!70`I:VC(KpdBh)zd/Nnvi+LGnF.Ae,OW@#(;SD}=-}b$,&m6k5+#;Ds)-rGB' );
define( 'AUTH_SALT',        'YQA~geczHFb{~ZuKXn!0.Ge,`lWUav)Vo5mU#SP[M.kS!BIIpbK0So!iKBlO5btb' );
define( 'SECURE_AUTH_SALT', 'qR!ws%<N$!>tpCQDV58AiQ{MY1VviL6Eh4iAbbeI7M=Ez.O>Yz(oM0&zs;v|`5Uy' );
define( 'LOGGED_IN_SALT',   'Zy2Ny(9*%4FR$zCf%qL6Op`7T#wq=4b4aeV||p;h(G4aB2a0z?[f;NMfdd55~fcg' );
define( 'NONCE_SALT',       'MZYYRsC [%7>k-[2Le,x :008)DVh-1Itrd{?_DcQ8>~KC9z+Z.Ix<?$9jVji^dN' );

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
