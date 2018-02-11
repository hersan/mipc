## MiPC TEST

## Instalación
Clonar el repositorio

```shell
$ git clone https://github.com/hersan/mipc.git
```
Ejecutar composer install en el directorio del proyecto

```shell
$ composer install
```
Renombrar el archivo .env.example

```shell
$ cp .env.example .env
```

Cambiar los siguientes datos para conectar a la base de datos

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret
```
Crear key de la aplicación

```shell
$ php artisan key:generate
```

Crear migraciones

```shell
$ php artisan migrate --seed
```

## Acceso de administrador

```
emial:    admin@localhost
password: secret
```