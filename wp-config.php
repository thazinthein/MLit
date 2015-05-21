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
define('DB_NAME', 'mag-lit');

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
define('AUTH_KEY',         'k29:~H:.C%x}oD(O{REKp+th(Nk^e^3@?[V&5FT|Q.+=7&)a4^`V =h/=1Fs[UCj');
define('SECURE_AUTH_KEY',  '<N<|Kvxu2iEn2Vkpkt! a]N$uX^]3rr$^463=P ~>)sN-DUJ<r>%yHexI;RsCw -');
define('LOGGED_IN_KEY',    'uN9k8yg]rS+D*|=o-mTMQ=0qn6lNL3I|t-8mj8N|B[L|0-Z]cH2TkYSq-*o`ny@B');
define('NONCE_KEY',        '+a?v+AZ?~Z)qkW;T/4(Tmh+$;Fe8Sc8Q~Kr<uv8[,P+36d!O(V^drK8l x-8}|,.');
define('AUTH_SALT',        '-&;/_uTFZl~{V&+z,-}JE=a+n/{bR0~FAucj8{*>mE(tfVA),%bM?o`;Q`m:x9Qs');
define('SECURE_AUTH_SALT', '*|}4a&g[+MH;5K8-5iy}|oaJ1+w|%yH)gVO_3tqDs7j6VW*$+J,y0/DnWZg^I55m');
define('LOGGED_IN_SALT',   '#&pf/cg*HKV[R9Jmw^5kK@JwO,crxoL}AOCXKIue0lDo^IY+`1<|bO&x`{IzA#F8');
define('NONCE_SALT',       'r2?CU4-tsvEv34B$y?/|RVTQ<o&~t |--n;4&8#|ml(<WIoughN5262h<R-%V!%M');

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
