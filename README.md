# Sistema de Ventas y Facturación
<br>
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>
<br>
<br>

## Comenzando 💪🚀

Estas instrucciones te permitirán obtener una copia del proyecto en funcionamiento en tu máquina local para propósitos de desarrollo y pruebas.

### Pre-requisitos 📋

_Que cosas necesitas para poner en marcha el proyecto y como instalarlos_

* GIT [Link](https://git-scm.com/downloads)
* Entorno de servidor local [XAMPP](https://www.apachefriends.org/es/index.html) en su versión 8.2.0 (Incluye php y BD)
* Manejador de dependencias de PHP [Composer](https://getcomposer.org/download/).

### Instalación 🔧

Paso a paso de lo que debes ejecutar para tener el proyecto ejecutandose

 1. clona el repositorio dentro de la carpeta de tu servidor con el siguiente comando:
```bash
  git clone https://github.com/Ldav05/venta-facturacion-app.git
```

 2. Ingresa a la carpeta del repositorio.
 3. Actualizamos nuestro composer:
```bash
composer update
```
 4.  Instalamos las dependencias del proyecto:
 ```bash
composer install
```

 5.  Generar archivo .env:
	 * Comando en Linux:

 ```bash
cp .env.example .env
```
*Comando en Windows:
 ```bash
copy .env.example .env
```
6.  Generar Key de seguridad:
```bash
php artisan key:generate
```

 7.  Generar Token JWT:
```bash
php artisan jwt:secret

```

 8.  Creamos nuestra base de datos en phpmyadmin.
 9.  Agregamos la base de datos creada a nuestro archivo .env así:
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=TuBaseDeDatos
DB_USERNAME=root
DB_PASSWORD=
```
 10.  Ejecutamos la migración:
```bash
php artisan migrate
```
11. Ahora migramos los datos hehcos por el seeder
```bash
php artisan migrate:fresh --seed
```
 12.  Por ultimo ejecutamos nuestro proyecto:
 ```bash
php artisan serve
```


## Recomendaciones   😁

* Para la prueba con Postman se debe primero realizar el registro del usuario en [http://localhost:8000/api/auth/register] poniendo en el body Json:

Ejemplo:
```json
{
  "name": "Jhon",
  "email":"john@example.com",
  "password": 12345
}
```

* Ahora se puede ejecutar la prueba de login a [http://localhost:8000/api/auth/login]

Ejemplo:
```json
{
  "email":"john@example.com",
  "password": 12345
}
```
* Adicionalmente se puede realizar un logout en  [http://localhost:8000/api/auth/logout], con el token generado en el login.

*Si no deseamos cerrar sesión si no agregar un Usuario, Rol, Productos, Permisos, Clientes. Se pueden crear de la siguiente forma en postman.
```json
{
 USUARIO
   RUTA= [http://localhost:8000/api/Usuarios]
  {
    "nombre":"Kenneth",
    "email":"Kenneth@gmail.com",
    "pasword":12345,
    "cargo":"Cajero",
    "rolid":1,
    "cedula":102444
  }
   
  ROL
  RUTA= [http://localhost:8000/api/Rol]
  {
  "nombre":"Admin"
  }
  
  PRODUCTOS
  Tener en cuenta: "Disponibilidad puede tener el valor de 0 o 1 Siendo 1 Disponible y 0 no disponible"
  RUTA= [http://localhost:8000/api/Productos]
  {
    "precio":"40000",
    "nombre":"Fabuloso",
    "Disponibilidad":"1"
  }
  
  PERMISOS
  RUTA= [http://localhost:8000/api/Permiso]
  {
   "nombre":"Kenneth",
   "Descripcion":"Trabajador"
  }
  
  CLIENTES
   RUTA= [http://localhost:8000/api/Clientes]
  {
    "nombre":"Kanneth",
    "email":"Kanneth@gmail",
    "telefono":"302410",
    "apellido":"Merino"
   }
}
```


*Disponibilidad de productos RUTA= [http://localhost:8000/api/ProductosDisponibles], nota:productos disponibles:1 y no disponibles:0
```json
{
   "Disponibilidad":1
}
```
------------


|  Nota |
| ------------ |
|**Errores de php intelephense**: Dado que salga este error en visual estudio code, se deberá dirigir a configuración y escribir php intelephense procediendo a desactivar `intelephense.diagnostics.undefinedMethods` y `intelephense.diagnostics.undefinedType`.   |


------------










## Construido con 🛠️

Las herramientas que utilice para crear este proyecto

* Framework de PHP [Laravel](https://laravel.com/docs/8.x).


## Autores ✒️

* **Luis Gordon** -  GitHub: [ Ldav05](https://github.com/Ldav05)

* **Cristian Hernandez** -  GitHub: [cristian1263](https://github.com/cristian1263)
* **Kenneth Mendoza** - GitHub: [ Kenth12](https://github.com/Kenth12)


## Expresiones de Gratitud 🎁

* Comenta a otros sobre este proyecto 📢
* Regalame una estrella ⭐
* Copia el proyecto en tu cuenta dando clic en Fork 😊
