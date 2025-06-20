# 🗄️ BDD_SIGEEV

Este proyecto contiene la base de datos del sistema **SIGEEV**, diseñada para gestionar eficientemente los eventos realizados.

## 📌 Descripción

- La base de datos fue diseñada inicialmente con **CharDB**, permitiendo una visualización clara de las relaciones entre entidades.
- Posteriormente, se generaron las **migraciones de Laravel**, facilitando la integración con el backend del sistema.
- La base de datos fue implementada usando **PostgreSQL**, aprovechando su potencia y robustez.
- Se estableció una **conexión desde el entorno local al servidor remoto**, lo que permitió probar despliegues reales del sistema.

## ⚙️ Tecnologías utilizadas

- 🛠️ **Laravel** – Framework PHP para backend y manejo de migraciones.
- 🐘 **PostgreSQL** – Sistema de gestión de bases de datos.
- 🧩 **CharDB** – Herramienta de modelado ER para la estructura inicial.
- 💻 **Laragon** – Entorno de desarrollo local.

## 🚀 Estado del proyecto

✅ Migraciones generadas  
✅ Base de datos montada en PostgreSQL  
✅ Conexión establecida al servidor remoto  

---

## 📐 Lógica del Modelo de Datos

El sistema **SIGEEV** cuenta con una base de datos diseñada para gestionar usuarios, eventos, suscripciones y pagos, todo bajo una estructura que facilita la escalabilidad y el control de acceso mediante roles y permisos. A continuación, se describe brevemente la lógica implementada:

### 👥 Usuarios y Tipos

- Los usuarios se registran en la tabla `users`, que incluye información personal, tipo de usuario (`user_type_id`) y datos de autenticación.
- La tabla `user_types` permite definir categorías como estudiante, administrativo, invitado, etc.

### 🗓️ Eventos y Precios

- Cada evento se guarda en la tabla `events`, con detalles como nombre, tipo, descripción, imagen, capacidad y fecha.
- Los precios para asistir a los eventos varían según el tipo de usuario, lo cual se define en la tabla `event_pricing`.

### 🧾 Suscripciones y Pagos

- Los usuarios pueden inscribirse a eventos mediante la tabla `subscriptions`, que enlaza usuario y evento con estado y fecha.
- Los pagos realizados se registran en `payments`, asociados a la suscripción correspondiente.

### 🔐 Roles y Permisos

- Se implementa el sistema de roles y permisos mediante las tablas `roles`, `permissions`, `role_has_permissions`, `model_has_roles` y `model_has_permissions` mediante el paquete de laravel Spatie Roles y Permisos
- Esta estructura permite asignar permisos personalizados a cada tipo de usuario y controlar el acceso a funciones específicas del sistema.

### ⚙️ Migraciones y Seguridad

- Laravel gestiona las migraciones a través de la tabla `migrations`, permitiendo versionar la base de datos.
- La autenticación por tokens, recuperación de contraseñas y manejo de errores está soportada por las tablas `personal_access_tokens`, `password_reset_tokens` y `failed_jobs`.

