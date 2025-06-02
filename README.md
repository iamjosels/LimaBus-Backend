# LimaBus - Backend 🚍🛠️

Backend del proyecto **LimaBus**, una plataforma de transporte que permite registrar, listar, filtrar y eliminar rutas de buses dentro de Lima Metropolitana. Este servicio está desarrollado en **Laravel** y expone una API RESTful para ser consumida por el frontend desarrollado en React.

---

## ⚙️ Tecnologías Utilizadas

- **PHP 8.x**
- **Laravel 10**
- **MySQL / SQLite**
- **Postman** para pruebas
- **XAMPP** como entorno local

---

## 📌 Funcionalidades de la API

- 🔍 **GET /api/routes** → Listar todas las rutas (con filtros opcionales por duración y distancia)
- ➕ **POST /api/routes** → Registrar una nueva ruta
- ❌ **DELETE /api/routes/{id}** → Eliminar una ruta por su ID
- 🧪 Rutas adicionales para pruebas y datos dummy con seeders

---

## 🚀 Instalación y Ejecución Local

```bash
# Clona el repositorio
git clone https://github.com/iamjosels/LimaBus-Backend.git
cd LimaBus-Backend

# Instala dependencias de Composer
composer install

# Crea el archivo .env
cp .env.example .env

# Genera la clave de la aplicación
php artisan key:generate

# Configura la base de datos en el .env (MySQL o SQLite)
DB_CONNECTION=sqlite
DB_DATABASE=/ruta/completa/a/database.sqlite

# Ejecuta migraciones y seeders
php artisan migrate --seed

# Inicia el servidor local
php artisan serve

```

---

## 🗃️ Estructura del Proyecto (Resumen)

```bash
limabus_backend/
├── app/                      # Controladores, modelos, providers
│   ├── Http/Controllers/     # RouteController.php
│   ├── Models/               # BusRoute.php, Driver.php, etc.
│   └── Providers/            # AppServiceProvider.php, RouteServiceProvider.php
├── bootstrap/
├── config/
├── database/
│   ├── migrations/           # Archivos para crear tablas: users, jobs, buses, routes, etc.
│   ├── seeders/              # Seeders para poblar datos: BusSeeder, DriverSeeder
│   └── database.sqlite       # Base de datos local (opcional)
├── public/
├── resources/
├── routes/
│   └── api.php               # Define rutas de la API REST
├── storage/
├── tests/
├── .env                      # Configuración de entorno
├── artisan
└── composer.json
```

## 🧠 Lógica y Validaciones

Las rutas están gestionadas por `RouteController`, que contiene la lógica para:

- ✅ **Validar** los datos ingresados en una nueva ruta (`origen`, `destino`, `duración`, `distancia`) usando `Request`.
- 🔎 **Aplicar filtros condicionales** al obtener rutas (por ejemplo: `distance_min`, `duration_max`, etc.).
- ⚠️ **Manejar errores** y retornar respuestas claras y estructuradas en formato JSON.
- 🗃️ Usar una **base de datos relacional** con tablas conectadas y datos de ejemplo cargados mediante **seeders**.

---

## 📬 Ejemplo de Respuesta (GET /api/routes)

```bash
[
  {
    "id": 1,
    "origin": "Miraflores",
    "destination": "San Isidro",
    "distance_km": 3.2,
    "duration_min": 20
  },
  ...
]

```
---

## 🧑‍💻 Autor
- Desarrollado por José Giovanni Laura Silvera
- Estudiante de Ciencias de la Computación
