### Instalación

composer install

cp .env.example .env

php artisan key:generate

Registrar las credenciales de la base de datos, reconpilar, y luego ejecuar las migraciones

php artisan cache:clear

php artisan config:cache

php artisan migrate:fresh --seed

Ejecutar la aplicación web

php artisan serv
