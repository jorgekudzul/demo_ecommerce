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
define( 'DB_NAME', 'dbwp' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'gJUNKde762' );

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
define( 'AUTH_KEY',         'WF-7-5}Dj8Y$(#Mk{Hi$^N_@5}h&MkKxv_?6{UZC3vCP|v#@ouu+[Tqa&f^..|~?' );
define( 'SECURE_AUTH_KEY',  '=m5|rvBi~}K&C?8u]b7F%tB;G:YVFA*7.hk8)5YeD#V9*M6nr$^<)@tEg%[hANs.' );
define( 'LOGGED_IN_KEY',    'u+=uS&g@AUt0ekTWVb0N8^~7tK3VwPo4j<KFe8|nP^ph~s-*]jhPYvCd)mAIVoFa' );
define( 'NONCE_KEY',        'd-|D)=nPVJLCZhnOjS]]ML%a_G1Y(Qcv!Y}kjU16-W~MZ{GX |MbVpe!en[]aK>Z' );
define( 'AUTH_SALT',        'JNLV-P(izh=y Kz {3n$z%~hkn?bP0 DV1WRX<]s3{~Qv{(nhi?zVd*]I}tV4>wy' );
define( 'SECURE_AUTH_SALT', '.IS.2di+H8/M+5Kz;.EGA_HldsyDHLi$-Qf{Nzv(H^=DdDyJgR I.g!I~$Rq L|;' );
define( 'LOGGED_IN_SALT',   '_!DD,1_?zY(?H$|@o~N[AXLg=b/iAHm&_+V!Xf@9tg-tA3}i>{[M%hv{)9l2$ll)' );
define( 'NONCE_SALT',       'O@v@{;o !)}+B:/m,l}s8kte_wJC,%@mW3>1+mO:IC=~u)]1V+j_/gH 8>6<5=rv' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpgu_';

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
