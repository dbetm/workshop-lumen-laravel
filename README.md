# Taller de introducción al microframework Laravel/Lumen de PHP.

## Requisitos:
+ Curiosidad por aprender sobre el framework web.
+ Tener instalado un proyecto de Laravel/Lumen 8.x.

## Recursos de ayuda para la instalación de un proyecto
Puedes contactarme sobre dudas por correo: davbetm@gmail.com o Telegram @dbetm
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
 1. [Instalar LAMP](https://www.sololinux.es/instalar-lamp-y-phpmyadmin-en-ubuntu-16-04-lts/):
    - Para instalar PHP, en lugar de instalar PHP 7.0 con el comando que proponen, usar el siguiente para instalar PHP7.4:
        + `$ sudo apt-get install php7.4 php7.4-mysql php7.4-curl php7.4-json php7.4-cgi libapache2-mod-php7.4 php-mbstring php7.4-mbstring php-gettext`
2. Descargar e instalar Composer:
    - `$ sudo apt update`
    - `$ sudo apt install curl php-cli git unzip`
    - `$ sudo php composer-setup.php --install-dir=/usr/local/bin --filename=composer`
    - Verfificar la instalación: `$ composer`
3. Crear proyecto:
    - Abrir Terminal donde gustes.
    - Escribir el siguiente comando: `$ composer create-project --prefer-dist laravel/lumen my-app`
    - Esperar a que termine la instalación...
4. Lanzar el servidor de la app:
    - En la Terminal moverse dentro de la carpeta del proyecto, `$ cd my-app`
    - Teclear el siguiente comando para lanzar el servidor: `$ php -S localhost:8000 -t public`
6. Ingresar en el navegador a: [http://localhost:8000/](http://localhost:8000/) para verificar que la aplicación corre sin problemas.
7. Crear una BD en MySQL o MariaDB con nombre `myapp_db`.
