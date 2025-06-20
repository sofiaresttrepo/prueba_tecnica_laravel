### 🧩 Backend - Laravel

## 🧾 Descripción General

El backend consiste en una API REST construida con Laravel. Proporciona los endpoints necesarios para gestionar entidades y contactos. Los datos se devuelven en formato JSON.

## 🛠️ Tecnologías
Laravel 10+

Eloquent ORM

Laravel Resource Controllers

CORS Middleware

Base de datos: MySQL / SQLite

##🔌 Endpoints

## 📁 Entidades
Método	Endpoint	Descripción
GET	/api/entidades	Listar entidades
POST	/api/entidades	Crear nueva entidad
PUT	/api/entidades/{id}	Actualizar entidad
DELETE	/api/entidades/{id}	Eliminar entidad

## 📁 Contactos
Método	Endpoint	Descripción
GET	/api/contactos	Listar contactos
POST	/api/contactos	Crear nuevo contacto
PUT	/api/contactos/{id}	Actualizar contacto
DELETE	/api/contactos/{id}	Eliminar contacto

---

## 🚀 Pasos para levantar el proyecto

## 🔁 Requisitos previos
Backend (Laravel)
PHP >= 8.1

Composer

MySQL

Laravel CLI (composer global require laravel/installer)

Frontend (Angular)
Node.js >= 18

Angular CLI (npm install -g @angular/cli)

## 🧩 Instalación y ejecución

Clonar el repositorio

git clone https://github.com/sofiaresttrepo/prueba_tecnica_laravel
cd tu-repo

🖥️ Backend - Laravel

cd backend    # o la carpeta donde está el Laravel
cp .env.example .env
composer install
php artisan key:generate

⚙️ Configurar base de datos
Edita el archivo .env y asegúrate de tener estos valores:

DB_DATABASE=nombre_de_tu_db
DB_USERNAME=tu_usuario
DB_PASSWORD=tu_contraseña

🧱 Ejecutar migraciones
php artisan migrate

▶️ Levantar el servidor

php artisan serve
Esto iniciará el backend en http://127.0.0.1:8000.