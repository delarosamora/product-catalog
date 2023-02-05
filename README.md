# Catálogo de productos

![Catalogo de productos](https://raw.githubusercontent.com/delarosamora/product-catalog/master/storage/app/public/image-site.jpg "Catalogo de productos")

Este Catalogo de productos fue desarrollado para una clienta que que desea almacenar en una base de datos sus antigüedades y artilugios para tasar los precios.

## Tecnologías utilizadas

<figure>
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg"
         alt="Laravel" width="300" height="100">
    <figcaption>Laravel 8.0</figcaption>
</figure>

<figure>
    <img src="https://getbootstrap.com/docs/5.3/assets/brand/bootstrap-logo-shadow.png"
         alt="Boostrap 5.0" width="200" height="150">
    <figcaption>Boostrap 5.0</figcaption>
</figure>

<figure>
    <img src="https://upload.wikimedia.org/wikipedia/commons/f/fd/JQuery-Logo.svg"
         alt="Jquery"  width="300">
    <figcaption>Jquery</figcaption>
</figure>

## Instalación

### 1. Clonar el repositorio

`git glone https://github.com/delarosamora/product-catalog.git`

### 2. Ejecutar las migraciones

En tu motor de base de datos favorito (MySQL, PostreSQL, etc) debes crear una base de datos vacía, y si es necesario, indicar los datos de acceso en el fichero .env:
- Equipo de la base de datos
- Nombre de la base de datos
- Usuario de la base de datos
- Contraseña de la base de datos

En mi caso tengo las siguientes

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=product_catalog
DB_USERNAME=root
DB_PASSWORD=
```

Una vez se indiquen los datos de acceso, se debe ejecutar las migraciones para crear las tablas:

`php artisan migrate`

### 3. Rellenar datos en las tablas

Los datos que se rellenan serán usuarios y categorías de productos. Para ello, se debe ejecutar el siguiente comando:

`php artisan db:seed`

Este comando lee los siguientes ficheros
- database\seeders\UserSeeder.php
- database\seeders\CategorySeeder.php

Si se desea almacenar más categorías o más usuarios, simplemente se pueden modificar estos archivos.