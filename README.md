# Taller de introducción al microframework Laravel/Lumen de PHP.

## Requisitos:
+ Curiosidad por aprender sobre el framework web.
+ Tener instalado un proyecto de Laravel/Lumen 8.x.

## Recursos de ayuda para la instalación de un proyecto
### Windows 10

1. [Descargar e instalar XAMPP](https://www.apachefriends.org/es/index.html).
2. [Descargar e instalar Composer: ](https://getcomposer.org/Composer-Setup.exe)(Un administrador de dependencias para PHP).
    - Dejar la ruta de instalación por defecto.
    - Para comprobar que se ha instalado correctamente, teclear en el CMD: `composer`
3. En el explorador de archivos ir al directorio `httdocs/` del XAMPP:
    - Dentro crear una carpeta llamada `apis/`.
4. Desde el CMD posicionarse dentro de la carpeta `apis/` recién creada.
    - Poner el siguiente comando para crear el proyecto: `composer create-project --prefer-dist laravel/lumen my-app` donde 'my-app' es el nombre que le quieren dar al proyecto.
    - Esperar a que termine la instalación...
5. Lanzar el servidor de la app:
    - En el CMD moverse dentro de la carpeta de su proyecto, `cd my-app`
    - Teclear el siguiente comando para lanzar el servidor: `php -S localhost:8000 -t public`
6. Ingresar en el navegador a: [http://localhost:8000/](http://localhost:8000/) para verificar que la aplicación corre sin problemas.
7. Crear una BD en MySQL o MariaDB con nombre `myapp_db`.

### GNU/Linux Ubuntu
 1. 
