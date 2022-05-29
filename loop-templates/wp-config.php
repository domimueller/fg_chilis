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
define( 'DB_NAME', 'db_16498' );

/** MySQL database username */
define( 'DB_USER', 'db_16498' );

/** MySQL database password */
define( 'DB_PASSWORD', '5pRKNjBX' );

/** MySQL hostname */
define( 'DB_HOST', 'db03.senselan.ch' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'K`Haq2V.0*@vuSFt`8t^$Ev:j=kCWF!xh:LS0=+z9j/uO&j<aZ:NV0uu^9J!RT t' );
define( 'SECURE_AUTH_KEY',   '[dO{(77TS=^pLz@Mv*lueKC4b;5`<`=.!9B${EYO)OX+DFTbO?m`!4SZb.$0Br~g' );
define( 'LOGGED_IN_KEY',     'P:cje#t(=uDq.i%JI|*UfW+@5S>0ki+,6}w@7n>HHy:1@PAVb),g`:F(G_V4:vJ^' );
define( 'NONCE_KEY',         'FHgtMVtv,E&GVGdZAm<1E#amf_zI<J_G.UA$j.1T^]%Mt*<qHGJ9/f_q,NI#f,*7' );
define( 'AUTH_SALT',         ',7wfz,Tz]3vR<0bGdI=~}L;^d4]Xw1 /^5cYrX|i}vFUE(H(tKe=6SPh59[0?!|!' );
define( 'SECURE_AUTH_SALT',  'YKOo]lE&P:>dzpW;B6409/o}MqJ,Tx2#7|/_B3@adFow`VW~l0!3mwM;cgUl{>ee' );
define( 'LOGGED_IN_SALT',    'Uxr{?QHhCF<RrA[fXP!Jg)(|b]/0DmR[+V{i?/r:>pK([lrT`$}A=S,n5lCvmal2' );
define( 'NONCE_SALT',        'Ra2F]Oy$XuSUlph4RX$[*eB&kXq `zc>ot|[DDkWtI,8%/Cg<85<tWz]OZ/YNn+/' );
define( 'WP_CACHE_KEY_SALT', '3B-}O3&#%r@76H[u]#3na{:]1/cu@]iQ)2Y;F0S?64^Ay |Mp?.z/Qk~Fo3r}}[G' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


if(!isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] !== 'on'){
        if(isset($_SERVER['HTTP_HOST']) && isset($_SERVER['REQUEST_URI'])){
                header('Location: https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
                exit;
        }
}
define( 'WP_DEBUG', false );
define( 'WP_DEBUG_LOG', true );
define( 'DISABLE_WP_CRON', false );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
