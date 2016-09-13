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
define('DB_NAME', 'inaninstant');

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
define('AUTH_KEY',         ':A6(h#r.6xLmObJq~r4Q;>GRyk(txGAp7~a)OxA}:;ddv_$7eLgnk.uANoASb[w|');
define('SECURE_AUTH_KEY',  '1aag}/FC>MAAJN4T/uz$6eZ$bS9B0`{rL5ir&7S6$Xl(<!OE#g9P?Q3D9A~So22_');
define('LOGGED_IN_KEY',    '] 6:QC:U HP)-fQ|6=PhZiAK)f)5lBJAj3EOUVy*k7iEw;X 7Jc3Hk~#x~07IYNg');
define('NONCE_KEY',        'Vg8M7s-P^,pw`?Dh,t0{g]]7,LC=<V`#jmVeC*|a31zpl{AkHo^<>mGSFutfBm5H');
define('AUTH_SALT',        ':[Zqe<m_~F,Z8FRzj5~BWL+&:7Ja>LBbJR,8N2F 2@2q<t[@O00F@v-8mCVHhxf:');
define('SECURE_AUTH_SALT', '8Z*}2sAf4;{VdagToD@-SJbj1v<;sd9zgAo@/Nhfg{zR2(^%4-R+ndtsM1bK=aS@');
define('LOGGED_IN_SALT',   'DnRH pycX$Gqcq?QSRE_)Drrv=aB`FdE!/Rn$ 35_xb)HeQ2;jw+Yqd=h^4:9sZJ');
define('NONCE_SALT',       '=)yPK_]m$@:,*{MeT&1>k.2PBY`i#j!iIX~JojE9?P^nmZG@, c*1>D^di7D!}1i');

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
