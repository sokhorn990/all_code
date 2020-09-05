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
define( 'DB_NAME', 'wordpress' );
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
define( 'AUTH_KEY',         '*X!b`Nber>7Mz^A [-F.V=)ng*Z%wyBuB^wGxP[r]V4N2ZrxO07Xno.ttiNip)O3' );
define( 'SECURE_AUTH_KEY',  '#1iw9La)A5EovA qBxv|!EVu~,y!rkrI7u7H3Q}p<[elw?}>xz.^L; /-1[9n-A-' );
define( 'LOGGED_IN_KEY',    '7D,QMH:t#-jC 6./X8sXd!y-`Jfi;M|_H;ma/4c;9 99)Xz:T!s>Z_Q$|R-Q7;4o' );
define( 'NONCE_KEY',        '=ABBS;wA?N`~5JP#H?)dmW<2mn%$WN;qFH}59AGRCOPub2_n_qRUJ(#;XgaJ*+|U' );
define( 'AUTH_SALT',        'vnvGy@j9G+O6@uVNKskxp1TmJ+39YRyQfmLTR`5FGaPY;r:%smUwmdN:kZ7{-BXq' );
define( 'SECURE_AUTH_SALT', '/^Gpvh0Y`z 6weFE{?Ha?AALfjb,#C_BD8`F<l6;n|)woYPuWGl9tGtdK)#-wW}V' );
define( 'LOGGED_IN_SALT',   ':Cc_%Ty#K-U.X^2sa,=;P=mK,{9u8nXbp:VVr3p)Y|ZDtzLg!9e.5LG/:([~&@-m' );
define( 'NONCE_SALT',       'H_.d&A%0!OTlH%nTq] ^)N{(J2NV=p,&b akp(%.oX(._!:H9*vWsB}.F}:A9byc' );

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
