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

define('RELOCATE',true);


// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'philippephilippe');

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
define('AUTH_KEY',         'j2bTa9(h_cF2P#w>wm%wBi)8Am=*_Xb*>3Tn__p}p-`Nu{TC)8~_DfWPG=z,;q4b');
define('SECURE_AUTH_KEY',  'S$M_0gY:$J1W0qw*LA/(NeNmG]*@W!OrV+krp^lXV<i d6V_x^q9Dc6rc)e?| O`');
define('LOGGED_IN_KEY',    'RfDe^h)g*zYrMj$.EWE=RVLxs&gL#IDk:nt(SV)Ft1?PWM`.ganH4MjU;quT}ub=');
define('NONCE_KEY',        'GwvitNK~2<8q_dn~76v$wLP?REJ$8AvU83~a:/-Qv.qcB~$nAYGE+e8f6);.U*v~');
define('AUTH_SALT',        'DvK#gNi~U#M:5Q#Pjbf!$h1wyC0KCIgDG|bHfXm9|&W&k(dqfDnxTnXK8hdZ:rk9');
define('SECURE_AUTH_SALT', 'c=:r-:C[wPnVX37Y,[Nxilax,qW0~c6zQ]i_ZVy12}wXLM2G*t<V{%yl`%o@w&|#');
define('LOGGED_IN_SALT',   'p`T_+N!6Q#i*^P&`Pud$#O;RZD.6%_K^F&H!iFMYiL9Wy/a2UD%$x:|W~gF`=j]%');
define('NONCE_SALT',       'JJF?WCe*SHk5@s?.kre{&d|Hj!FD%e]?UaBXk*JO&_qn4Ec3Ff5&|qJy7D{56h44');

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
