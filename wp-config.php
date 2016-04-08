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
define('DB_NAME', 'base_wordpress');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY', '7gzm)37i6WO&qF%zp7ot.ZCmiqWXnJh%m+kD9xe+;7?V+a`%G)DQ?[Vm3|)@iGyi');
define('SECURE_AUTH_KEY', '1hyEs9:#/b}4i=H7W`y7PN.ng93V]@P<APaY[20[1[^4SAR&+4X, ,sn +R.GLd^');
define('LOGGED_IN_KEY', 'a9nr=W?b 2J~31`[bXTn]$a.qNlY`cI<Ezb0exSI97m)%#;DqGYER2zYf.|f?=L3');
define('NONCE_KEY', 'iLGV+akPQlzI/fCrH|lk/ncDBTbctt=c7UVtmC`q *<l#]@.-(}cI|FdT2!503y]');
define('AUTH_SALT', '|5F6:w,J, `RZX!@;nW}UYKi4HpH.gKh4s?Pvs-0{IFNg2mH-;PD-Tut|0tk.BV-');
define('SECURE_AUTH_SALT', 'v=qg3kU9J?()C4xNd_p_y23PrWjPb$r H{B~*N{:=%uf]E&kgA46G^b0(#}*<,|Q');
define('LOGGED_IN_SALT', 'vF_KF9-c?uDTMa*){7M?[UqFwQ5XKM(0E,M>^}|-;2enL-fhnwz|=Nwp+182qX4i');
define('NONCE_SALT', 'qH=]9<gVn>MEqNB67|74<iWCEX57}Vxx->$]BG5t@|k#+r!*a58?vwg}kvJk}u=F');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'bw_';


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

