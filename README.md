<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Indicaciones de intslación
Requisitos:
Php Version 7.4 o superior
Composer
1. Clonar el repositorio del proyecto o Descargar en Formato ZIP
2. Instalar dependencias del proyecto
    Ingresa desde la terminal a la carpeta de tu proyecto y escribe:
     **composer install **
Este comando instalará todas las librerías que están declaradas el proyecto.
3. Generar archivo .env
Por seguridad el archivo .env está excluido del repositorio, para generar uno nuevo se toma como plantilla el archivo .env.example para copiar este archivo en una nuevo escribe en tu terminal:
cp .env.example .env
4. Generar Key
Para que tu proyecto en Laravel corra sin problemas es necesario generar una key de seguirdad, para ello en tu terminal corre el siguiente comando:
 **php artisan key:generate **
Esta key nueva se agregará al archivo .env
5. Crear base de datos MYSQL
6. Correr migraciones y seeds
    **php artisan migrate –seed **
7. Ejecutar el comando  **php artisan serve ** para inicar el proyecto.
7. Usuario: prueba@mail.com Clave: 12345


## Nota API

Consumo de la API https://apilayer.com/ la cual nos permite un maximo de 100 peticiones en la cuenta gratuita
