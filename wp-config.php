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
define('DB_NAME', 'glasseye');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '1-&W<^`FH+1V|m_YnMW-N|-.jIfg;r(+vW +(lH|Db!+V%01-l.KKI<7.@`A^nEK');
define('SECURE_AUTH_KEY',  'V,N5ebnd@Uk~8FG(Psn|pq$SSjoUCYTOuuC}nMn=+xK3e(VvA 76Mm}{y1O?2w25');
define('LOGGED_IN_KEY',    '|Y ?0fvoHaC]h,(+T<{XS[9Us|>xRj>nsC3<NV4[p/S-i5R.cOpVDZFh@+FsuwHh');
define('NONCE_KEY',        'H$ {Mzn;?!k[-I3+oHzjh5M=5]+DP+J?KH0@BCP`7Raxh-b~Gg?}f3VV7mf!*=7=');
define('AUTH_SALT',        '9l BN`7l$g_2h`hDWRs5}x!YvP~,<Ag}un;@lsKy!yxDS>boK1y.G-ZC[ukZ~_AH');
define('SECURE_AUTH_SALT', 'hReLyjFc7zkc|/:Cd9?/?:6 *{1^@59Z;qh|F4[Ovr!f:ZRK><92P)Nf-&V!F-+K');
define('LOGGED_IN_SALT',   'O|O-|W+r{tu[}+$*GHM%d8I-=5S}ROaM<2/^*9q9mBDD3mNZP*CC[X*bSNneV$KO');
define('NONCE_SALT',       'L)/~u[HbG1zmkk6;+EM?$oh,T]mA/)P1}-dz<uK7ns}`>&I[He_o)qzOyG^3K+h ');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
