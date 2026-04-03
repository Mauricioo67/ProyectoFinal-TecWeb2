# Reporte de Uso de Inteligencia Artificial (IA) en el Desarrollo

Este documento detalla cómo utilicé herramientas de Inteligencia Artificial (LLM) como mi asistente principal ("Pair-Programming") para superar desafíos técnicos, depurar código y acelerar el desarrollo de este proyecto final en **CakePHP 5**.

## 1. Integración y Migración de la Base de Datos
Uno de mis principales retos iniciales fue llevar el esqueleto del proyecto de un entorno MySQL estándar a uno **PostgreSQL** montado en contenedores. Utilicé a la IA de las siguientes formas:
*   **Adaptación de Esquemas SQL:** Le proporcioné a la IA mi archivo `db_postgres.sql`. La IA se encargó de leer el esquema, detectar las diferencias (como el cambio de `id_rol` a `rol` tipo int, y el nuevo campo `estado`) e indicarme exactamente qué archivos de CakePHP romperían si no se cambiaban.
*   **Refactorización Automática:** Le pedí a la IA que reescribiera las tablas y entidades afectadas. La IA generó directamente los cambios en `src/Model/Table/UsersTable.php` y `src/Model/Entity/User.php`, configurando reglas de validación precisas para que el ORM de CakePHP aceptara la nueva base de datos sin errores.
*   **Conexión en Redes de Docker:** La IA diagnosticó por qué mi contenedor no se conectaba inicialmente. Me indicó que debía modificar el `driver` en `config/app_local.php` a `Postgres`, asegurar la codificación a `utf8` (dado que `utf8mb4` arrojaba error), y me sugirió el uso del alias interno de la red del host para conectar los contenedores.

## 2. Desarrollo Lógico de los CRUDs (Usuarios y Monedas)
Para la implementación técnica del sistema y sus vistas, utilicé a la IA de la siguiente manera:
*   **Generación Base (Bake):** Le solicité a la IA que me guiara sobre la forma más rápida de obtener los ABM/CRUDs. La IA me instruyó cómo y en qué entorno ejecutar los comandos nativos `bin/cake bake all users` y `bin/cake bake all monedas` dentro del contenedor Docker para asegurar que los controladores, modelos y plantillas se construyesen correctamente según mi nueva base de datos PostgreSQL.
*   **Motor de Filtros Avanzado en Monedas:** Decidí que no quería un CRUD básico para el sistema de Monedas. Le solicité a la IA que creara un buscador y filtros (por estado y fecha). La IA escribió toda la lógica de filtrado dentro del método `index()` en `MonedasController.php`, generando consultas escalables usando el buscador nativo `ILIKE` para PostgreSQL para hacer búsquedas insensibles a mayúsculas/minúsculas.
*   **Inyección en la Interfaz:** La IA generó e inyectó código HTML/PHP pertinente en el archivo `templates/Monedas/index.php` para crear la barra de búsqueda responsiva que acompaña al controlador.

## 3. Implementación de los 2 Idiomas (Internacionalización - I18n)
La rúbrica exigía sistema bilingüe. Yo propuse la base y utilicé a la IA para ejecutar el trabajo repetitivo y lógico:
*   **Lógica de Cambio Manual a Automático:** Inicialmente, el sistema no recordaba el idioma del usuario. Le asigné a la IA el problema y ella programó una intercepción inteligente en `AppController::beforeFilter()`, donde el código lee la sesión del usuario logueado en la base de datos e invoca automáticamente a `I18n::setLocale()`.
*   **Auditoría de Textos Duros:** Le pedí a la IA que rastreara y modificara todos los formularios y vistas (Login, Registros, Listados) que estuviesen en código "duro" en español. La IA envolvió absolutamente todas las cadenas con la sintaxis de traducción de CakePHP `__()`.
*   **Catálogos GNU (Archivos .po):** Le encomendé a la IA escribir y llenar los diccionarios `default.po` tanto para Español (`es`) como para Inglés (`en`), mapeando más de 50 claves de traducción exactas sin perder la estructura original.

## 4. Diseño Adaptativo y Moderno (Aether UI)
*   **De Plantilla Aburrida a Premium:** Le di a la IA directrices para cambiar el antiguo visual de CakePHP a una estética moderna y oscura llamada "Glassmorphism". La IA escribió completamente el archivo `aether.css`.
*   **Menús Móviles Reales (Hamburguesa):** Recientemente vi un error al abrir la app desde mi celular. Notifiqué a la IA y ella detectó que faltaban Media Queries. La IA implementó el código CSS y un script en Javascript directamente en el `layout/default.php` para generar el menú desplegable tipo hamburguesa en resoluciones pequeñas, mejorando drásticamente el UX en móviles.

---
**Conclusión General:**
Utilicé la Inteligencia Artificial no para "hacer el proyecto por mí", sino como una herramienta de ejecución rápida y consulta técnica al momento de lidiar con migraciones base (PostgreSQL sobre Docker) y al manejar configuraciones masivas y tediosas requeridas por infraestructuras de nivel empresarial como lo son la Internacionalización (I18n) y arquitecturas MVC rígidas como CakePHP.
