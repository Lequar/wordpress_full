# Documentacion Wordpress

Para el desarrollo de sitios de una forma mas rapida y organizada, se crea este repositorio donde se tendra todo lo necesario para empezar a codificar.
(Tener en cuenta el conocimiento de git como sistema de control de versiones)

## Requerimientos
- Servidor local
- Version mayor de PHP 5.6 
- Version mayor de PHP 5.6 
- El modulo de Apache "mod_rewrite"

## Instalacion

Realizar una clonacion del proyecto dentro de su localhost. Ejemplo:
```shell
git clone "git@github.com:Lequar/wordpress_full.git"
```
Te dejara una carpeta llamada "wordpress_full".
Ingresamos en la carpeta y encontraremos una lista de archivos.

- Lo primero que debemos hacer es ingresar en la carpeta BD
y encontraremos un SQL llamado "base_wordpress.sql", esta es nuestra base de datos asi que inmediatamente nos iremos a nuestro gestor de base de datos y crearemos una bd, con el nombre que deseamos, ejemplo "sitio.com" la base de datos se llamaria "sitio".
- Entramos e importamos la base de datos. (Ya tenemos la BD para conectarlo con nuestro Wordpress).
- Ahora configuramos el archivo "wp-config.php"
```shell
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
```
- Nuestro Wordpress esta listo para usar.

# Importante! Este Wordpress no contiene ningun tema, simplemente es la base, para integrar el tema sigue este enlace.

(https://github.com/Lequar/theme_wordpress "Theme for wordpress")
