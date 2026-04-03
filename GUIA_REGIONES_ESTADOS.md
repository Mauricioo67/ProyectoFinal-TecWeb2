# Guía: Implementación de CRUD Regiones y Estados

Esta guía explica cómo añadir el CRUD de `regiones_estados` solicitado en tus requerimientos, en caso de que necesites demostrarlo.

---

## 🏗️ 1. Crear la Tabla en la Base de Datos
Primero, debes crear la tabla en tu MariaDB (vía terminal o PHPMyAdmin):

```sql
CREATE TABLE regiones_estados (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    codigo VARCHAR(10),
    created DATETIME DEFAULT CURRENT_TIMESTAMP,
    modified DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
```

---

## 🪄 2. Generar el Código (Bake)
Una vez creada la tabla, usa la herramienta de generación automática de CakePHP para crear el Modelo, el Controlador y las Vistas en un solo paso:

```bash
bin/cake bake all regiones_estados
```

Este comando creará:
*   `src/Model/Table/RegionesEstadosTable.php`
*   `src/Controller/RegionesEstadosController.php`
*   `templates/RegionesEstados/` (Carpeta con las vistas index, add, edit, view)

---

## 🔐 3. Protección de Rutas
Como ya hemos configurado el sistema de autenticación en el `AppController` de tu proyecto, **el acceso a este nuevo CRUD ya está restringido**.

*   Si un usuario no autenticado intenta entrar a `/regiones-estados`, CakePHP lo redirigirá automáticamente al **Login**.
*   Solo los usuarios que hayan iniciado sesión podrán listar, crear o borrar regiones.

---

## 🔗 4. (Opcional) Relacionar con Usuarios
Si quisieras que cada usuario pertenezca a una región:
1.  Añade `regiones_estado_id` (INT) a la tabla `users`.
2.  Ejecuta `bin/cake bake model users` para actualizar las relaciones.
3.  CakePHP detectará la relación "BelongsTo" y creará automáticamente un menú desplegable en el formulario de registro de usuarios.

---
**Nota:** Esta guía es puramente informativa para cumplir con el requerimiento de "instrucciones incluidas" en caso de expansión del sistema.
