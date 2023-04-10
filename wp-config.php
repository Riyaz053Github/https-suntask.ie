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
define('DB_NAME', 'swdemo_suntask');

/** MySQL database username */
define('DB_USER', 'swdemo_default');

/** MySQL database password */
define('DB_PASSWORD', 'default@123');

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
define('AUTH_KEY',         ']U#cp+{RwO&ukSTVEqlIDOCLL#Yw(g71.4jg]UTs,F r{c+-WJ4HwYu[@*UERgCt');
define('SECURE_AUTH_KEY',  'e}J%[~3[kd@T:*yc&T bKhZ%EJ${cJH(pL9`h@J?):c15LX7bf_J*VKuUv+Q>}]R');
define('LOGGED_IN_KEY',    '|9N`*Id@TOLF5}n[  MU4nb:,!$[X rE]*e(a|J?C %c&t5J]>DL-|lFDUfO&42p');
define('NONCE_KEY',        'r&1)rzRJSDkQK5Bn%(hLSIg}hz}i^cZYN_q>@amp{J:h!!3O,RagkJps=TA#Rr.V');
define('AUTH_SALT',        '[Z|/eL6<KL-dH.7Sn47,2L1MsOh<fxzn|RL+lBa}VPG<m r4FO7e*`m^zFZhRef<');
define('SECURE_AUTH_SALT', 'Kbwa_o,W/rZ1V[%!:Fv=8(Y<1`G<>4*i(|Q_Q6|Clt)|#,>i_tj, aE$5pH2)ITo');
define('LOGGED_IN_SALT',   'CW:R@F~1Akv+>csR1v_2-q`[t,QcRhL)2s-zs(VNeu0LsS3IH40ylhn[pBIG<+/@');
define('NONCE_SALT',       '5`pYlJdV[-a%@-JBO}FCZ.?$Puy~I?{vkfijQ1+OqnfatoyIYJ;eB&PU7iz@|xSF');

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
