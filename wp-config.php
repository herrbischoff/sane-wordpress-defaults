<?php
// ===================================================
// Load database info and local development parameters
// ===================================================
if ( file_exists( dirname( __FILE__ ) . '/local-config.php' ) ) {
	define( 'WP_LOCAL_DEV', true );
	include( dirname( __FILE__ ) . '/local-config.php' );
} else {
	define( 'WP_LOCAL_DEV', false );
	define( 'DB_NAME', '%%DB_NAME%%' );
	define( 'DB_USER', '%%DB_USER%%' );
	define( 'DB_PASSWORD', '%%DB_PASSWORD%%' );
	define( 'DB_HOST', '%%DB_HOST%%' ); // Probably 'localhost'
}

// ========================
// Custom Content Directory
// ========================
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/content' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/content' );

// ================================================
// You almost certainly do not want to change these
// ================================================
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

// ==============================================================
// Salts, for security
// Grab these from: https://api.wordpress.org/secret-key/1.1/salt
// ==============================================================
define('AUTH_KEY',         't|lC}W&S]1FltX.qz[$#puz3Q(m)x06EhI8F&AKvV&0#--62+<;{#UhQ*B/^A` 3');
define('SECURE_AUTH_KEY',  '2u$}OR~FOYD-[8UX)!En_v-&CW%+,o,*3-l);u,6*UuWZ;gH!Y.F;FpSF,dQC#V6');
define('LOGGED_IN_KEY',    'NO+Pd=g&YgJzZ{;8)&d((HQnn>=GQmV3tmu83K3G-PW3`mQ!pGfJ6D}({2|p&HyC');
define('NONCE_KEY',        'B9NP&0]KK-{)PM3GgkTU|}lYGoug+`z23W|^oES17-Fh _fNz0ls|4 F9RiNANRS');
define('AUTH_SALT',        'zsOR|TMBD0Gxm`%>!Oc@uxR/>~!7&~(taJ?DBIR6o./)Xl6`W;dXT@.%dB.c*;Ut');
define('SECURE_AUTH_SALT', ',Cj&3K&kSaGgr`eSOBwU3VL}x9L/*9pz`}P$:LLK9XA3*u|g+3h-Amyzkj R_b@8');
define('LOGGED_IN_SALT',   'bP;pvv9m]U|[_J/RJ]Qeq=W!KiZ09Ym,yj>I`1Iu^{UKCu{xUP5Xl7v!9SDUthw]');
define('NONCE_SALT',       '`J]_2p(+EAry7mrsh4+>R3hOHouLXq#gl]WUh4s&5CSANYF|IqWrit33j^A-b{P-');

// ==============================================================
// Table prefix
// Change this if you have multiple installs in the same database
// ==============================================================
$table_prefix  = 'wp_';

// ================================
// Language
// Leave blank for American English
// ================================
define( 'WPLANG', 'en' );

// ===========
// Show/Hide errors
// ===========
ini_set( 'display_errors', 1 );
define( 'WP_DEBUG_DISPLAY', true );

// =================================================================
// Debug mode
// Debugging? Enable these. Can also enable them in local-config.php
// =================================================================
// define( 'SAVEQUERIES', true );
define( 'WP_DEBUG', true );

// ======================================
// Load a Memcached config if we have one
// ======================================
if ( file_exists( dirname( __FILE__ ) . '/memcached.php' ) )
	$memcached_servers = include( dirname( __FILE__ ) . '/memcached.php' );

// ===========================================================================================
// This can be used to programatically set the stage when deploying (e.g. production, staging)
// ===========================================================================================
define( 'WP_STAGE', '%%WP_STAGE%%' );
define( 'STAGING_DOMAIN', '%%WP_STAGING_DOMAIN%%' ); // Does magic in WP Stack to handle staging domain rewriting

// ===================
// Bootstrap WordPress
// ===================
if ( !defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/wp/' );
require_once( ABSPATH . 'wp-settings.php' );
