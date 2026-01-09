# PruebaTecnica-P1-Backend

Este proyecto es un backend desarrollado con **Laravel (PHP)**, usando **Eloquent ORM** para interactuar con una base de datos **PostgreSQL**.

## Requisitos
- PHP >= 8.2
- Composer
- PostgreSQL
- Node.js y npm (opcional, para assets front-end)

## Instalación y ejecución

1. Clonar el repositorio:
   ```bash
   git clone <URL_DEL_REPOSITORIO>
   cd PruebaTecnica-P1-Backend
   
2. Instalar las dependencias de PHP: composer install
3.  Instalar dependencias de JS: npm install
4.  Configurar el archivo .env según sus credenciales de base de datos
5.  Crear una base de datos vacia con el nombre asignado en el .env
6.  Generar la clave de la aplicación: php artisan key:generate
7.  Ejecutar migraciones: php artisan migrate
8.  Iniciar el servidor local: php artisan serve
