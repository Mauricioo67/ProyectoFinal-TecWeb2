# Informe IMRD: Proyecto Final Desarrollo Web

## 1. Introducción
El presente informe documenta el desarrollo y la implementación del proyecto final de la asignatura, el cual consiste en un sistema web robusto construido bajo el framework MVC **CakePHP 5**. El objetivo central del proyecto es demostrar la aplicación práctica de tecnologías actuales de desarrollo, abarcando desde la capa de persistencia de datos hasta el empaquetado de la aplicación en entornos aislados. 
El sistema exige el cumplimiento estricto de una rúbrica que contempla: la separación de servicios utilizando contenedores, integración con el motor de base de datos **PostgreSQL**, diseño responsivo con una estética de alta calidad, la ejecución de operaciones CRUD avanzadas y la internalización (I18n) completa del software para soportar dos idiomas. Este desarrollo no solo busca la funcionalidad técnica, sino alinearse a prácticas modernas de despliegue mediante el uso de Docker y de optimización metodológica usando inteligencia artificial como herramienta de soporte de desarrollo.

## 2. Metodología y Enfoque (Métodos)
Para alcanzar los requerimientos técnicos del proyecto, se estableció una arquitectura orientada a servicios (SOA) en su despliegue, y MVC en su código fuente. Las herramientas y pasos metodológicos fueron:
*   **Framework y Lenguaje:** Se utilizó PHP 8.2 en conjunto con CakePHP 5, aprovechando su ORM y sus utilidades automáticas de *Bake* para agilizar la creación inicial de Controladores y Modelos.
*   **Contenedores e Infraestructura:** El despliegue se estructuró a través de `Docker` mediante un archivo `docker-compose.yml`. Se creó un `Dockerfile` optimizado (basado en `php:apache-8.2`) que aprovisiona el entorno instalando extensiones vitales (`pdo_pgsql`, `intl`) y enlazando el servidor web de forma segura.
*   **Interoperabilidad de Bases de Datos:** La configuración se migró de entornos MySQL hacia *PostgreSQL*. Se gestionaron configuraciones en `app_local.php` para apuntar de manera dinámica a través de la red virtual de los contenedores Docker (`host.containers.internal`), asegurando también codificación segura en `UTF-8`.
*   **Internacionalización (I18n):** Se adoptó el sistema estándar GNU `gettext` (.po) administrado por el framework. Se diseñó un algoritmo dentro del hook `beforeFilter` de la aplicación donde el sistema inyecta en tiempo real el *Locale* (`es_ES` o `en_US`) basándose en la configuración persistente (`language`) guardada en el perfil del usuario activo en la sesión.
*   **Diseño Interfaz y Ux:** El desarrollo Front-End carece de dependencias CSS masivas, en su lugar, se desarrolló un sistema modular nativo basado en "Glassmorphism" con el uso de *Media Queries* fluidas y menús dinámicos (Hamburguesa) para proveer responsividad, integrando además *Bootstrap Icons*.
*   **Soporte IA:** Como soporte socioformativo y de depuración, el prototipado, el mapeo rápido de errores de compatibilidad del framework y el *refactoring* del código para la internacionalización se realizó con la asistencia de Inteligencia Artificial (LLMs), logrando abstraer el problema lógicamente a mayor velocidad.

## 3. Resultados
El proceso de desarrollo metodológico arrojó un producto de software 100% funcional y alineado a la consigna, lográndose hitos comprobables:
*   **Despliegue Funcional:** La aplicación es capaz de construirse a través del comando de docker-compose levantando exitosamente una abstracción del sistema operativo.
*   **Gestión Integral de Módulos (ABM/CRUD):** Se logró construir e inyectar de manera rápida los sistemas base CRUD (Crear, Leer, Editar, Eliminar) para las tablas de "Usuarios" y "Monedas" mediante la herramienta CLI de CakePHP (`bake`). Sobre esta base generada, se superó un CRUD ordinario programando lógica de validación avanzada, control de roles, y un formulario de filtrado en tiempo real en "Monedas", el cual ejecuta consultas directas sobre PostgreSQL usando operadores avanzados (`ILIKE` y fechas cruzadas).
*   **Traducción Bilíngue Transparente:** La interfaz cambia la totalidad de sus etiquetas (Labels), botones y utilidades de paginación automáticamente cuando el usuario cambia su selector de cuenta personal, dejando el código fuente libre de redundancias léxicas de manera transparente e impecable.
*   **Interfaces Adaptables:** El rediseño generó un producto altamente utilizable tanto en ordenadores de sobremesa como en resoluciones móviles, logrando consolidar tablas informativas y *side-navs* eficientes.

## 4. Discusión y Conclusiones
La abstracción del problema y empuje del proyecto a tecnologías como contenedores Linux demuestran que el nivel de madurez técnica exigida fomenta una curva de aprendizaje superior. Separar la base de datos de la aplicación y conectarlos en una red privada virtual obligó a un entendimiento riguroso de protocolos de capas (Networking, Puertos, Variables de Entorno y Permisos en el Kernel Unix/Linux).
Adicionalmente, se comprueba empíricamente que CakePHP 5 es capaz de orquestarse fácilmente dentro de contenedores siempre que su esquema de carpetas y dependencias de caché esté debidamente configurado.
La experiencia valida también el uso de Inteligencia Artificial como un "co-piloto" estratégico vital; lejos de reemplazar al desarrollador, la herramienta actuó como un guía para encontrar sintaxis depreciada u orientar comandos complejos, asegurando la calidad del entregable dentro del tiempo límite exigido por la rúbrica formacional.

---
**Elaborado para Evaluación Académica**
