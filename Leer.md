# 🚀 Guía Completa: Ejecutar Proyecto CakePHP en Podman Compose

## 📌 Objetivo

Levantar un proyecto CakePHP dentro de un contenedor usando **Podman Compose**, resolviendo errores comunes y organizando correctamente la estructura del proyecto.

---

# 🧱 1. Estructura Final del Proyecto

```bash
cakephp/
├── app_ef/                # Proyecto CakePHP
│   ├── bin/
│   ├── config/
│   ├── logs/
│   ├── src/
│   ├── templates/
│   ├── tmp/
│   ├── vendor/
│   ├── webroot/
│   ├── composer.json
│   └── ...
├── docker-compose.yml
├── Dockerfile
```

---

# ⚙️ 2. Dockerfile

```dockerfile
FROM php:8.2-apache

RUN apt-get update && apt-get install -y \
    libicu-dev \
    libonig-dev \
    libzip-dev \
    zip \
    unzip \
    && docker-php-ext-install intl mbstring pdo_mysql zip \
    && a2enmod rewrite

# Ajustar DocumentRoot a CakePHP
RUN sed -i 's#/var/www/html#/var/www/html/webroot#g' /etc/apache2/sites-available/000-default.conf

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

EXPOSE 80
```

---

# 🐳 3. docker-compose.yml

```yaml
services:
  web:
    build: .
    container_name: final_project_web
    ports:
      - "8765:80"
    volumes:
      - ./app_ef:/var/www/html:Z
    environment:
      - DATABASE_URL=mysql://mauricio:Mauricio123@192.168.56.250/db_ef
```

---

# 🧠 4. Problemas Encontrados y Soluciones

## ❌ Error: Contenedor ya existe

```
container name is already in use
```

### ✅ Solución

```bash
podman rm -f final_project_web
```

---

## ❌ Error: DocumentRoot no existe

```
DocumentRoot [/var/www/html/webroot] does not exist
```

### ✅ Solución

* Crear correctamente el proyecto CakePHP
* Asegurar que exista `webroot/`

---

## ❌ Error: 404 / 403

```
No matching DirectoryIndex
```

### ✅ Solución

* Configurar Apache a `webroot`
* Verificar estructura del proyecto

---

## ❌ Error: permisos (logs/tmp)

```
Permission denied
tmp/cache not writable
```

### ✅ Solución

```bash
chmod -R 777 app_ef/tmp app_ef/logs
```

---

## ❌ Error: SQLite readonly

```
attempt to write a readonly database
```

### ✅ Solución

* Cambiar a MySQL
* O corregir permisos del archivo SQLite

---

## ❌ Error: conexión a base de datos

```
getaddrinfo for db_mariadb failed
```

### ✅ Causa

El contenedor no encuentra ese hostname.

### ✅ Solución

Usar IP real:

```yaml
DATABASE_URL=mysql://mauricio:Mauricio123@192.168.56.250/db_ef
```

---

# 🔁 5. Comandos Usados

## Construcción y ejecución

```bash
podman compose up --build
```

## Reinicio limpio

```bash
podman compose down
podman rm -f final_project_web
podman compose up --build
```

## Detener contenedor

```bash
podman stop final_project_web
```

---

# 📦 6. Migración de Proyecto Existente

Para mover un proyecto ya hecho:

```bash
mkdir app_ef
mv !(docker-compose.yml|Dockerfile|app_ef) app_ef/
```

---

# 🔐 7. Configuración de Base de Datos (CakePHP)

Archivo:

```
config/app_local.php
```

Ejemplo:

```php
'default' => [
    'host' => '192.168.56.250',
    'username' => 'mauricio',
    'password' => 'Mauricio123',
    'database' => 'db_ef',
    'url' => env('DATABASE_URL', null),
],
```

---

# 🎯 8. Resultado Final

✔ Proyecto funcional en contenedor
✔ CakePHP sirviendo desde `webroot`
✔ Conexión a base de datos funcionando
✔ Estructura ordenada y profesional
✔ Listo para entrega

---

# 💡 9. Buenas Prácticas

* Separar código (`app_ef/`) de Docker
* No usar nombres de contenedor como host DB (usar IP o red)
* Siempre revisar permisos (`tmp/`, `logs/`)
* Usar `--build` cuando cambies Dockerfile

---

# 🚀 10. Acceso

Abrir en navegador:

```
http://localhost:8765
```

---

# ✅ Conclusión

Se logró:

* Contenerizar CakePHP con Podman
* Resolver errores de permisos, rutas y DB
* Organizar correctamente el proyecto
* Dejar listo para despliegue o entrega

---

🔥 Proyecto listo y funcionando correctamente.
