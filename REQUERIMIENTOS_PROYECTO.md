# Requerimientos del Proyecto Final - Producto Final (Actualizado)

Este documento detalla la rúbrica oficial y los requerimientos técnicos necesarios para asegurar la máxima calificación (100%).

## 🎯 Rúbrica de Evaluación (100 puntos)

| # | Criterio | Pts | Requisito para el 100% (Cumplido) |
| :--- | :--- | :---: | :--- |
| 1 | **Informe IMRD** | 20 | Entrega puntual; formato completo, bien estructurado, redactado con claridad y coherencia, con referencias adecuadas y reflexión socioformativa. |
| 2 | **Sistema en Git** | 10 | Repositorio remoto completo, commits claros, tags/ramas, README detallado y organizado. |
| 3 | **Contenedores Separados** | 20 | Arquitectura en contenedores bien documentada; separación clara de servicios (Web y BD), configuración limpia y fácil de levantar. |
| 4 | **Dockerfile e Imagen** | 20 | Dockerfile optimizado; la imagen se construye directamente desde Git y la aplicación corre de forma consistente. |
| 5 | **Traducción (2 Lenguajes)** | 20 | Implementación sólida de 2 idiomas; selección clara por perfil, textos coherentes en toda la interfaz (mensajes, etiquetas, filtros). |
| 6 | **Cumplimiento Integral** | 10 | Cumple todos los requerimientos técnicos (autenticación, CRUD, filtros, bitácora de IA) con buena calidad. |
| | **TOTAL** | **100** | |

---

## 🛠️ Listado de Tareas Pendientes para el 100%

### 🐳 Docker & Contenedores (40 pts)
- [ ] **Dockerfile**: Crear un Dockerfile optimizado para CakePHP.
- [ ] **Docker Compose**: Configurar servicios separados para la aplicación web y la base de datos.
- [ ] **Variables de Entorno**: Configurar `.env` para que la conexión a la BD sea dinámica entre contenedores.

### 🌎 Internacionalización (20 pts)
- [ ] **Soporte de Idiomas**: Configurar al menos 2 idiomas (Español e Inglés).
- [ ] **Traducciones**: Asegurar que mensajes de éxito/error, etiquetas y menús estén traducidos.
- [ ] **Perfil de Usuario**: El idioma debe persistir en la configuración del usuario.

### 📋 Funcionalidad & CRUD (10 pts)
- [ ] **CRUD Monedas/Tareas**: Implementar la funcionalidad completa con filtros.
- [ ] **Filtros/Búsqueda**: Implementar búsquedas por texto, estado o fecha.
- [ ] **Bitácora de IA**: Documentar los prompts usados en la construcción del proyecto.

### 📄 Documentación (30 pts)
- [ ] **Informe IMRD**: Redacción del documento final.
- [ ] **README.md**: Documentación del repositorio con instrucciones de despliegue Docker.

---

> [!IMPORTANT]
> **Enfoque Actual:** Estamos trabajando en la tabla `monedas`. Para cumplir con la rúbrica, integraremos este módulo con el sistema de traducción y lo incluiremos en el despliegue de Docker.

---

## 📜 Rúbrica Detallada (Referencia Completa)

### 1. Informe IMRD entregado a tiempo (20 pts)
*   **0 pts**: No entrega el informe o lo entrega fuera de plazo; formato IMRD ausente o muy incompleto.
*   **10 pts**: Entrega el informe en IMRD con secciones mínimas pero incompletas o poco claras; pequeños retrasos justificados.
*   **15 pts**: Entrega dentro del plazo; IMRD completo con redacción clara y referencias básicas; cumple la mayoría de lineamientos solicitados.
*   **20 pts**: Entrega puntual; IMRD completo, bien estructurado, redactado con claridad y coherencia, con referencias adecuadas y reflexión alineada al proyecto socioformativo.

### 2. Sistema en servidor Git (10 pts)
*   **0 pts**: No existe repositorio remoto o está vacío/inaccesible.
*   **5 pts**: Repositorio remoto creado pero con pocos commits o sin organización clara; falta README o está muy incompleto.
*   **7 pts**: Repositorio remoto con historial de commits que evidencia el desarrollo; incluye README con instrucciones básicas.
*   **10 pts**: Repositorio remoto completo, con commits claros, tags o ramas cuando corresponde; README detallado y organizado para facilitar la reproducción del proyecto.

### 3. Aplicación corriendo en contenedores separados (20 pts)
*   **0 pts**: No se ejecuta en contenedores o solo funciona en entorno local sin contenedores.
*   **10 pts**: Usa contenedores pero no separa claramente servidor web y base de datos, o la configuración es inestable.
*   **15 pts**: La aplicación corre en dos contenedores diferenciados (web y BD), con configuración funcional y reproducible.
*   **20 pts**: Arquitectura en contenedores bien documentada; separación clara de servicios, configuración limpia y fácil de levantar en otro entorno (uso correcto de redes y variables de entorno).

### 4. Dockerfile e imagen funcional desde Git (20 pts)
*   **0 pts**: No presenta Dockerfile o la imagen generada no ejecuta la aplicación.
*   **10 pts**: Dockerfile presente pero requiere ajustes manuales importantes para funcionar; el flujo desde Git no está claro.
*   **15 pts**: Dockerfile funcional: genera una imagen desde el código del repositorio y permite correr la aplicación con pocos pasos adicionales.
*   **20 pts**: Dockerfile bien estructurado y optimizado; la imagen se construye directamente desde el repositorio Git y la aplicación corre de forma consistente.

### 5. Traducción a 2 lenguajes (20 pts)
*   **0 pts**: La aplicación solo funciona en un idioma o los intentos de traducción no son operativos.
*   **10 pts**: Implementa parcialmente un segundo idioma (textos mezclados, secciones sin traducir, selección poco clara).
*   **15 pts**: La aplicación ofrece al menos 2 idiomas seleccionables; la mayoría de la interfaz y mensajes está correctamente traducida.
*   **20 pts**: Implementación sólida de 2 idiomas; selección clara por perfil/usuario, textos coherentes y consistentes en toda la interfaz, incluyendo mensajes de error/éxito y etiquetas de filtros/búsqueda.

### 6. Cumplimiento integral de requerimientos (10 pts)
*   **0 pts**: Omite varios requerimientos clave (autenticación, CRUD completo, filtros, bitácora de IA) sin justificación.
*   **5 pts**: Cumple parcialmente los requerimientos; se observan 2 o más elementos importantes incompletos o ausentes.
*   **7 pts**: Cumple la mayoría de requerimientos (autenticación, CRUD, perfiles, filtros, uso básico de IA), con pocos detalles menores faltantes.
*   **10 pts**: Cumple todos los requerimientos funcionales y técnicos definidos en la consigna (incluyendo uso de IA como apoyo y evidencias), con buena calidad y coherencia global.
