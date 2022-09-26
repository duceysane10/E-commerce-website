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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'banadir' );

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
define( 'AUTH_KEY',         'GX0Po]*R^qZZi-jJz1/sO9o/uzFvAx9}G#h6KMT%MEki(&9bQ#{.PF2>p!+?y5ko' );
define( 'SECURE_AUTH_KEY',  'mhs}:@hRKUYZIC!>K7F/B}&}iTvvqw]s{}gxK6T]<^q~y#4J#4m|E(A8M|Q(62$}' );
define( 'LOGGED_IN_KEY',    'Ss>H*Ov+:Sllvlc%9W&(& xC;92#_9DX>f!bfqIIBdQc@i$xa%iR/s.9Mm:yB4EK' );
define( 'NONCE_KEY',        'rVO[+Fc $d Y(g3#^=Vzpg>gqv@z@Gl-5KHkND{{eS@Ung`iG$%h`*-E~]&0aGs|' );
define( 'AUTH_SALT',        'D!F%UR(M_(NT54Ql2f-Ym)*Tj?Xp16Iw`_ccX2Ud&`3XN/&ZH9q84)HNr<[vBYS=' );
define( 'SECURE_AUTH_SALT', ':e#$<}|* C]CcF#-6L4yvl7oeXPM_ki6:ydU>ztZKI%r0+*FXu zG9x{8t9?X7/2' );
define( 'LOGGED_IN_SALT',   'a=S:sx`L)I(u0f!,t51cFypA;^J^^oEmnWb$?8#1=$?K@YBzIw-ax)D$DI3dc<Vf' );
define( 'NONCE_SALT',       'ADbvRaf3,7z^oRxRQ-;$Yr>3R7 yGuT0{DMF$g7Ww#OR**$4{<:Py#33jXg5E{}O' );

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
