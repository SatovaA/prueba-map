Para ejecutar el proyecto se debe realizar lo siguientes pasos.

- copiar el .env
- Correr composer install
- Configurar en el .env los parametros de la base de datos
- Correr el siguiente comando para asi agregar la base de datos y los registros por defecto:
  - php artisan migrate --seed
