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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'cS6`hS!fs ott#EqWeC*WU8JKTrU@z@`sKr:%mSEFKq$/;SO %:x>cCQc9n+Mmor');
define('SECURE_AUTH_KEY',  ']ibz|c408g4x4nK{<NEYga}-Myi<%+|<i>Hz.rz=#:eAK7LgjH-Z.Rj>lhp-MTCc');
define('LOGGED_IN_KEY',    '.BtI4bNAYy+O:TL-_?t!1AccLr@AHB9-,ta-?2anP{ozsUm?UL6>$_|zE5GO}HkF');
define('NONCE_KEY',        '*{FnD;}q(n#<1G/#k++(MMmGV0H6HlM:^+O(S/!yKkUZ=uUiG^5ueR0>A,:QVoSs');
define('AUTH_SALT',        'Kl~:Q+[Bp`|gk-&0)aM!?eMn&iLfTMOd!yYMmB&k)wYG@XYfkD~L+[@|VIvyWx?+');
define('SECURE_AUTH_SALT', 'Y-5vs9Y(ekF&}5e^Dt(.!?yo!w@F%[gjf~]OX|d|fj+Ur4#j,k-]$E/71mJ.sqI`');
define('LOGGED_IN_SALT',   ']iIA6#p_=q>FG,LwgUnHfyyGq&fkk%?q-^^eAs7kNP4s0%7d:obVHi~{0{5n7M=_');
define('NONCE_SALT',       'd$k$n,!n?-6*ltN^veLb9o:JHyBs8F ),|M{-w}`+& *_kD^ 7^|&w/T?%-RinHZ');

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
