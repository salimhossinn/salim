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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'woocommerce-01' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '-wJ_E0[(d1k(t_&O uHNXPAAEhuQUEePDG/}$%PW;AqhybbSnH.ZsebBFx/H,ICn' );
define( 'SECURE_AUTH_KEY',  'Hy&v?~+XX%aDI=zP(3%_^ZjuxmRlY1Rk[I.9@a+$SmU<5gtL$cE[Z>fh_Po?FINs' );
define( 'LOGGED_IN_KEY',    'Uap+DI$w8dX], x-Zc.]d@OD2$^DVTR lK_u!J.-+V-6^-7w2XU^9ciZpO51.n?d' );
define( 'NONCE_KEY',        'NF9[*~P5?Mt!fb{FcHNN^E2q;FsSd@Fzks +Vnco,Eg&gz;uMZ;<,>E^elB_Z!3;' );
define( 'AUTH_SALT',        ',GM6g< O>Z3#Fve$WSn2Ye>u$xreJAFpAOA+N? SbkX/3GTdB%~xQs%m,&hK$AB{' );
define( 'SECURE_AUTH_SALT', '%G`y>X|[d0:!0~7G2]6UaE]rpvb$yQBroWbZA2{r/PpcXn sr;@q!avW]K5_P)nE' );
define( 'LOGGED_IN_SALT',   'f4L:e:3@y.[@/]?~icQl/r6Sn&a>ZwYD-,TSma6[i Om+,,Yw19n]wB%sr2?u$l>' );
define( 'NONCE_SALT',       ';^dXxwe(7gKPYDw:n~NjYr)v?xzvW8Gl}?EjEjnD?g$;b#:~(y_vnM%}(qfefup:' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
