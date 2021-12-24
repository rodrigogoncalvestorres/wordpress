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
define( 'DB_NAME', 'wordpressdb' );

/** MySQL database username */
define( 'DB_USER', 'rodrigogoncalvestorres' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Dr!go150499' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '/$H3|i0z%2{ *1-v!3__E~v$N<TD&0o0J$]Pp~:A$jVC?hz&e,k$.o]l`pK.p)dZ' );
define( 'SECURE_AUTH_KEY',  'eK(?`u)DOmX~y&N7`rE2#BdAZO:F:T@F;c-Q8vF]z3DMVhSsfqu/fTQvP*`c3hD}' );
define( 'LOGGED_IN_KEY',    '7?7RKNe(.uE4t^~Dw`(!!`qhTnhp`U_aPp;wN &jUdFg,g>0CAP5g<K.bDSM1rW6' );
define( 'NONCE_KEY',        'T}*}Mv~Z|y-U/J>eZ<L<o0=zs7@{+HIS0uI1|!$q[::HgGd?n$aUtT-9>mHZ%]vk' );
define( 'AUTH_SALT',        'o7|r1b).Y{OF!eUC[p#|Y~I.qDx=97G(SaZO_.,^feHLN@%O2<:7jyV>N=M7,TP~' );
define( 'SECURE_AUTH_SALT', '#1p{iU5>W3BG&%J%hLpj7?-23mM#-#w=knks^5{qm*FDSkx(+EDbafgXW;[C-2{%' );
define( 'LOGGED_IN_SALT',   '}eQ5hc~dk;ta{!OdW5Q*C]AQ8Mmn1meq_3hRg6m<*0l7+lb/7,>?d9b]Z)vohd_1' );
define( 'NONCE_SALT',       'Qt_h.)k]3Z_*WQ.`f{t az`j!gMhe WQz]Tj#agw2KKih43`dz.;SH1FZkr%f$5b' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
