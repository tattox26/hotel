** Pasos para instalacion ** 

1. Instalar composer => linea composer install
2. cp .env.example .env
3. php artisan key:generate
4. crear la base de datos y ccambiar la bd por la que se creo en .env
4. php artisan migrate (migracion tablas)
5. php artisan db:seed (migracion datos)
6. php artisan serve (ejecutar en el servidor)

** COMANDOS ** 
Si llega salir algun error lo mejor es utilizar este comando php artisan optimize
y despues php artisan optimize:clear

