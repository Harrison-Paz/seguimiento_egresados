### Instalación

composer install

cp .env.example .env

php artisan key:generate

Crear la base de datos en mysql y Registrar las credenciales de la base de datos en el archivo .env

php artisan cache:clear

php artisan config:cache

php artisan migrate:fresh --seed

Ejecutar la aplicación web

php artisan serv
