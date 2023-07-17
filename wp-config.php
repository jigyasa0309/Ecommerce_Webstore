<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Ecommerce' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'AZq`:SB[m|fA~&?v5EBaw61-hss;)uY),n1frjgfkda1EckB>0AxjhrC&yy]Cor9' );
define( 'SECURE_AUTH_KEY',  's.`yTX5yCCG[RBxaa(^eYDdMOabK,8}vL)!l*n+%TF{u-I;sodx4<&9dbv-#={Zn' );
define( 'LOGGED_IN_KEY',    'u{9x,I4Fi@8PO,4G0=W:%>+Y[5Kh*D,gvC|w*|%X`DT87-tUHzjEvhp(PTfEX_%D' );
define( 'NONCE_KEY',        'nya61:$wg#&o3~|KwI,QnIP~~UDZ~)M!Q~_ .<imZt=x+iOGp }sa0L/`BPOA;jt' );
define( 'AUTH_SALT',        ';ZAPDco8JNA4w|=x?6C*oj4-jz!{gDU *l$6Yk49:2mV9i51],P!/g*NG-cn4@-d' );
define( 'SECURE_AUTH_SALT', 'NWqZJo:-FhoZXPlQ@Kp/|2M`<$reuz?H+sb`jxNK#egq4]kor#(&Hv4U6*vbyWxu' );
define( 'LOGGED_IN_SALT',   'es|3/JfV18zUWpc._XC7<7F~$1s+XNg_(-B[f$thY{m(gV~J(FbG[CNg3DrP{4Hl' );
define( 'NONCE_SALT',       '~yrR1)%*-g~,[`Nn$*v@r5^JJZvDLD=p?;P[dw=};TKCwp4s_h6{zymdu8T$NuE+' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
