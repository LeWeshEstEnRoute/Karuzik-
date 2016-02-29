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
define('DB_NAME', 'wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'D*uD<!9oT:FhC~Onms v4|gS Xv$F9> LW;-x2g$i}>gJ;tc6%;xMI Ye/.X,ytc');
define('SECURE_AUTH_KEY',  '% {U=<.|F9T+i6Po+4K.yV2bpjc-oCq4BY.G-G$s.vyPv/Hp|Ie(-@wU,G@uo)7:');
define('LOGGED_IN_KEY',    'me841uSlWI+X5!.A}9g<IxnAnz)Qtw,qRFO~#SK0l-Ynr.{ OQ.MMFbX2[0eB|**');
define('NONCE_KEY',        '|r31y7Cg|+EiJ|SVd_l4Xhv%+iF$QKaXhJSj{Fkc`Xa-&d+LSY|-{gvwr+KY;SX!');
define('AUTH_SALT',        ',4k|WdPyZtQX-jXuPx^8;(5=|b#Q>1.vmG-T+HWP7o~7znH<w[/H9Z+`)2qb5V&*');
define('SECURE_AUTH_SALT', '.y>#*N47MK4-GD}onX6/IoNJo4OWRo+[Gvh8;8Pvfe-:fH[[@Zi0=dVe@$(^VJK|');
define('LOGGED_IN_SALT',   '`Xg;ANDM^9URPQ,xM-._L3RsW*py@Tn$DkG#m;! z&[|UeP`%a+z+gf>09O{?N.8');
define('NONCE_SALT',       'Y8fw ,M-?}|60/$Ad|~p9%L3okQDwQU]+ i7ooq6U-c4U+_+A8rMm:ssVlCIL|Rw');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
