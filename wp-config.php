<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'freelo_conalprose');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'N1Buu2[;ACwl9:wMu74wUT-jx7F)|_(~L9S_eW*hi<4EiQ.)&r|T}!$frD}g]aFf'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_KEY', 'Oo1qT}62Z|jt2-[Qix EBvy^/=hw+.vbE(]#|GGO3@1|5j{R-4uolpB5s.ODLyR`'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_KEY', 'U[m19m|:A6uuL=@O>$0_L|$k(bzdt{mh?Kw(d|dfe&u:^3qKmL8!%O^M|k-L/g5`'); // Cambia esto por tu frase aleatoria.
define('NONCE_KEY', '%-xlBgPj-fC&nf:+8Mn(i>3xRRw01ZT&C3An{1+WR--|8SXQ/L?ai&[dPJ-|Tpf|'); // Cambia esto por tu frase aleatoria.
define('AUTH_SALT', '~I[Jdox),Z$X53zH1uGC{b}4+IxY|FDCFW69)(stnJn:e/ad<BMo#nQgh`zlO=s:'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_SALT', 'Q4W2qBv|MA;w{r=S-n++)pQ$YgwNR3t_+[-Ez-r-1}K>@RLJG)<q0(B]_s4P/-j/'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_SALT', '43*pG3P6U# T 8$G2Pmy_<]:iCzrAzuMBdC<IjN=F1)AzL-FiCcbgp3%LK4B^mV0'); // Cambia esto por tu frase aleatoria.
define('NONCE_SALT', 'UZ#U}qs,c:crcgLpk>p6L&<N@qN3Bf#;38a$;Pl.++MX|3?,9f{F:tetLfXksG1.'); // Cambia esto por tu frase aleatoria.

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

