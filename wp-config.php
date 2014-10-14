<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'cygnet');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '^_>uJpm]8^swjrt4?61pX!zL|px[|LV,^i+e0qxHEw5ddM7g|uk@G+OTEy9aTafu');
define('SECURE_AUTH_KEY',  'Ou5`@5ke;#Au-xl8%<I^% >r`gVb{U+0LZjI#@UuTvZJ+ariSi^F$dTrJn:ym kM');
define('LOGGED_IN_KEY',    'ijBCI-uF-Ga?]gxF|=1AD9%}uC$w8R1Tb RaJBLDc7BQg@glt[3WHYb|*>?ojH(_');
define('NONCE_KEY',        '=8hMn`xPn-<} 6kOG0L8,M4mInjUfV2I|MKe/M;)bG+r+*bCk~*&ZUfK5}24(a%5');
define('AUTH_SALT',        'fdL;jLPWZc%>H9SdtsSTdge#fc5zMv~#xoe=L9ng+-1drC-Q~VH:EfeN|0Q5)#/V');
define('SECURE_AUTH_SALT', '! hr;2pPHW)}D#@Sc;!JZAMLlb75y4]Ek9neZ[@xB[EVe85of.ZJxKkH|XjrB[#.');
define('LOGGED_IN_SALT',   '.Z;78agP|T.{T$xQO2Wu]-M8D&J@[m(H|{Q^$3~mej2fx[_VE+(JK~t%.Q{W7GTP');
define('NONCE_SALT',       ',bT[G-A>0vyJ B|;<L-=?)y+?zG9[+%4Q2_Ht& a]SD>Zb6.-/wiiQ,8Gy0L/xtq');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
