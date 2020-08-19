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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //

if('localhost/uniportal'){
define( 'DB_NAME', 'wordpress' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', '' );
define( 'DB_HOST', 'localhost' );

}else{

define( 'DB_NAME', 'db27nfnpsrq9uq' );
define( 'DB_USER', 'ua3gubcsj297y' );
define( 'DB_PASSWORD', 'Prasad@1127' );
define( 'DB_HOST', '127.0.0.1' );


}




/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Rz[Vs.I78vndGW`L/La8n)ahag;=nWY5;]$eX$?.)ocI&iM1=_FrEf5]QuzsTj|`' );
define( 'SECURE_AUTH_KEY',  '-ja*l6n20_qcK=>[j3If%v5Fs8H:jA}MAag6% P}oE5US}vQi(W0CH,`9 JFc-4-' );
define( 'LOGGED_IN_KEY',    '%paM3-CKUt{*8dt2pb$W/;wd_Cmzb!Qoo@)AUE+Gg>rSXG$,RP1OB?>ilxG^xNul' );
define( 'NONCE_KEY',        '7pf}dw5+Sm3+a)~it;+}xxP&%E-1*v1ldg}?:|<}xaYTF$tJy3C~{yeUX<BeI^0@' );
define( 'AUTH_SALT',        'q Ghq3Q%l->FF|%DD>}MyZ`QR^)m~! SdD.^^rfO<`3!59>wqGj,SeYf&7379za8' );
define( 'SECURE_AUTH_SALT', 'j[9>z&|&2c/HF:/n1nN>Kj5{o/EbH$;/`$OVW%y<(dHIv.V 9n:+hFAM:!)($0Lj' );
define( 'LOGGED_IN_SALT',   'cw`A4ccw/V;FgeGhZxn MEsGr>DmZebHLyw$^FpW`#IK %zIxiRef(T Ne*E7diQ' );
define( 'NONCE_SALT',       '.I0d@;.(v#[:-D8ql9m bWC5yIJeQ8h^*1oA/Pv6vZrL35%@1,3;Ulm)xkyLt>c<' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
