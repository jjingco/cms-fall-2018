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
define('DB_NAME', 'assignment2');

/** MySQL database username */
define('DB_USER', 'assign2user');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         'jr^~cJ@Zx  p4.(-7D,V|3|Mml{=Y; Ctm0L1AHzdvU`{HG@&]4 t-od;ynp}tVt');
define('SECURE_AUTH_KEY',  'Pm;%FJ:rP=-P]/C&Y=}S_[pzSJWWD v6gj:t@}ft0[(vl1f-TB!Fb<Qn}tb[;0!-');
define('LOGGED_IN_KEY',    'oyA){Y60? ]hHV.u)e~Zx*}+AKgA%dtTRW,dnA6s!=N,/.R;1@p>rDa)v[JUAZ8<');
define('NONCE_KEY',        '-[Z+h(%xGi]Xoit5z[gMy.Z/=cB`K1g(|A->zY]gu:gdyba>t.)8 !TP {V`P,MD');
define('AUTH_SALT',        '7jK!>08:zg,}CdI2!aWN}%0M/2Dr%~fo=$HU$:j!D.%C~[XPe4/?)KLD9@qEP@_y');
define('SECURE_AUTH_SALT', '~O44P1<Q9,biXG*E~<a>8vj1R0|C5Bpw@,n6_xmh_9NZ)Mylc$3p>()P>MSQ ?,1');
define('LOGGED_IN_SALT',   'mH>`lR@n,R=dWY_P:dy/|P1bV(LRG8E0?#p)(vgkx d>?5`AOu@v&*2M=@g0GDVl');
define('NONCE_SALT',       '4yFO7[2p#[~+gKkB6>C{r7%@6}DQ{ow=9y@e`w+^Zx23tUz2C/-_c6nUe/#/$/s~');

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
