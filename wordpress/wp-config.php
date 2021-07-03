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
// ======================================================================
//  Para que sirva en otros servidores se de be proveer los datos
// necesarios para que se conecte a una base de  datos. aquí configuración global
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');
// ======================================================================
/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '{LR<H9nGJ]P*Q<M.E5q>-<!AtKuHI#{@@a!*Xy%v]wy#F{X/Iq]:6L{I({D?-TC&');
define('SECURE_AUTH_KEY', '#J!8T?r JR0cbu|Wvh:usGC!Hk$)w>0O&nV*47IEdU+zBwJx.y0[tN6K_RB=OK/j');
define('LOGGED_IN_KEY', 'wS41lkRmdh Dc3@qLn_}nXV;|lyK#m|u&0fU0E~Qc~RxwoS`r)Qb31xl6ozTVQCQ');
define('NONCE_KEY', ':J`q3v|q%0yFW*_w!xt&n4]XO! JB^hE&l%FDU EZP=~<nuVLxn+6)oVAKt$CPJY');
define('AUTH_SALT', 'x[/+<_ v$;n$OIoW]jog+$&C+Z(cK>h[I8X}l>(-?7hU+NbvKm.&^*B<#2;6*! ~');
define('SECURE_AUTH_SALT', 'rW+Zzxsj5jFL|[R.pHK8/S$:F+$cJ{K/B(!!}EzUODu#,t)E$h;}3I7pEVW3!@>t');
define('LOGGED_IN_SALT', 'qMSWHJ>^==qeKkXJ?Y- @KLp7,5j_Jc!jQ3pp=nWR3iDL9xAvemDRdI_{T:pKS# ');
define('NONCE_SALT', 'A|y`U,VN*A3V7*r.2]MXE p+HS`Kevt[MAG5`=}p%oB!0cYmj0)h,9X taM-PEk(');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
   define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
