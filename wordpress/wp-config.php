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
define('DB_NAME', 'Bmore-Unscene');

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
define('AUTH_KEY',         ']_2`SwhS]dz7=P|e;z<#T<9X8F$-Kj`g0B5|jIq&sy^2KylIhWN&oAZh+M`Af+42');
define('SECURE_AUTH_KEY',  '$V@m]WR|@H?ju4?ao+=vcbg2P2]L=vA:`3[Y;.m7mE$o]{.;/THB+h$r3|iN>&1+');
define('LOGGED_IN_KEY',    'HP[B&MFPNxp1b{kf*5I Z=!Ce-_qTXS]#Qg|zBfWL~4|znhe?m9ix(W[U#+:5|3E');
define('NONCE_KEY',        ' 6h_YuBg:;aQ|3g-Fm^TChKvat){!?Ma>Iw}kGu/q9<.lXc3ZIyUXq+tz|ic/g]W');
define('AUTH_SALT',        '}),I$OOTX<.cC@g7SsAJpR |@tqG#Tw? ^Pv=+82d53u|8g<q5lr+#+54$&,pydV');
define('SECURE_AUTH_SALT', 'd@DP@<1a8jBvsb(:I~(!1+*juxd7#9Z[:-%Z7rV?}:O}<|=|>>~MCRA?$]dTS9Ai');
define('LOGGED_IN_SALT',   'AT/olM-wBo(nytXuH-D&w0JHruq!BTc17bmQxVC6JEq8F+F&C-@Y.xGPAL:t_,]-');
define('NONCE_SALT',       'z+g^h]6_xA-XM/>%k6@fr3/jTPjc];sJ1(|Wwf4?yE|]cz?#wkz?#P~=8_H3)@m%');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
