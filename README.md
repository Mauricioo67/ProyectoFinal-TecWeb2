# 🌌 Proyecto Final: Aether UI - Gestión de Usuarios y Monedas

Este es el proyecto final de la materia, una aplicación web de alto nivel construida sobre **CakePHP 5.x** que cumple rigurosamente con los requerimientos técnicos y funcionales solicitados. 

El proyecto destaca por su arquitectura orientada a la mantenibilidad, uso de contenedores Docker, conexión robusta a **PostgreSQL**, internalización completa bilingüe y un diseño estético premium responsivo (Aether UI - Glassmorphism).

---

## 🥇 Cumplimiento de la Rúbrica y Requerimientos

### 1. Aplicación Corriendo en Contenedores & Dockerfile (40 pts)
* **Arquitectura Dockerizada:** El proyecto incluye un `docker-compose.yml` y un `Dockerfile` optimizados para montar un servidor Apache con PHP 8.2 y todas las extensiones requeridas por CakePHP (intl, pdo_pgsql).
* **Integración:** Diseñado para facilitar su clonación y despliegue inmediato interactuando con un servidor de PostgreSQL.

### 2. Base de Datos PostgreSQL y Migración (20 pts)
* **Motor:** Se migró exitosamente de MariaDB a **PostgreSQL**.
* **Estructura Estricta:** La base de datos se genera a partir del script de volcado `db_postgres.sql` que incluye las tablas `users` y `monedas`.
* **Personalización del Modelo:** La tabla `users` contiene adaptaciones requeridas (ej. `rol` como INT, `estado` y `language`).

### 3. Módulos Funcionales (CRUD)
* **Módulo de Usuarios:** Gestión completa con roles (Administrador y Usuario). Incluye seguridad con hashes de contraseña en `bcrypt` (Autenticación nativa de CakePHP).
* **Módulo de Monedas:** CRUD avanzado de divisas de curso legal que incluye:
  * Motor de **búsqueda** integral (por Nombre, Código o País utilizando sentencias `ILIKE` en PostgreSQL).
  * Panel de **Filtros** combinados (por Estado Activo/Inactivo y Fecha de creación).

### 4. Internacionalización a 2 Lenguajes (20 pts)
* **I18n Automático:** Implementación profunda de internalización en **Español** e **Inglés**.
* **Gestión por Perfiles:** El sistema detecta automáticamente el campo `language` del usuario autenticado e inyecta la configuración en todo el entorno, cambiando las vistas, botones, mensajes flash y placeholders de los formularios.

### 5. Diseño Premium UI/UX
* **Aether UI:** Hoja de estilos original (`aether.css`) orientada a interfaces "Dark Mode" de baja fatiga visual.
* **Componentes Móviles:** El diseño es un 100% **responsivo**. Incluye un menú interactivo tipo "Hamburguesa" para móviles, rediseño de layouts para tablets y unificación de acciones a través de iconografía clara usando *Bootstrap Icons*.

---

## 🚀 Guía Rápida de Puesta en Marcha

### 1. Requisitos Previos
* Git instalado en su sistema.
* **Docker** y **Docker Compose** (Opcional: Podman).
* Una instancia en ejecución de **PostgreSQL**.

### 2. Despliegue Rápido
**Paso 1: Clonar e inicializar**
```bash
# Clonar el proyecto
git clone [URL_DEL_REPOSITORIO]
cd ProyectoFinal-TecWeb2
```

**Paso 2: Configuración de Directorios y Docker Compose (¡Importante!)**
El proyecto se encuentra subido en la raíz del repositorio de GitHub (estructura plana). Puedes trabajar con él de dos maneras:
- **Estructura Plana (Recomendado):** El código fuente de CakePHP se encuentra en la raíz del proyecto junto con el `docker-compose.yml`. Para trabajar así, asegúrate que en tu `docker-compose.yml` el volumen apunte a `.`:
  ```yaml
  volumes:
    - .:/var/www/html:Z
  ```
  Otorga permisos a las carpetas temporales:
  `chmod -R 777 tmp logs`

- **Trabajando desde una Subcarpeta (app_ef):** Si prefieres colocar el código fuente dentro de una subcarpeta llamada `app_ef` (como se trabajó originalmente):
  1. Crea la carpeta `app_ef` y mueve todas las carpetas del código (src, config, vendor, etc.) dentro de ella (excepto el Dockerfile y docker-compose.yml).
  2. Modifica tu `docker-compose.yml` para apuntar el volumen a la subcarpeta:
  ```yaml
  volumes:
    - ./app_ef:/var/www/html:Z
  ```
  3. Otorga permisos a las carpetas temporales:
  `chmod -R 777 app_ef/tmp app_ef/logs`

**Paso 3: Restaurar Base de Datos**
Asegúrese de volcar el archivo `db_postgres.sql` en su servidor de PostgreSQL dentro de una base de datos nombrada `db_ef1`.

**Paso 4: Variables y Configuración**
Configure la IP o el host correcto en `config/app_local.php` (o `app_ef/config/app_local.php` si usa subcarpeta) para apuntar a su PostgreSQL.

**Paso 5: Levantar la Arquitectura Dockerizada**
Levante la imagen Apache-PHP desde el archivo raíz del repositorio:
```bash
docker-compose up -d --build
```
> El servicio estará disponible en **http://localhost:8765** o mediante la IP local en red.

### 3. Credenciales de Acceso
Puede crear un nuevo usuario registrándose directamente en la pantalla pública de inicio de sesión o utilizando cualquier registro volcado en la base de datos SQL provista. Los administradores (Rol `1`) tendrán acceso de escritura, edición y eliminación de datos.

---
**Entregable Final TecWeb - 2026**
