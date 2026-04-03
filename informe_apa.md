# Desarrollo e Implementación de un Sistema Web Bilingüe bajo Arquitectura de Contenedores y MVC

**[Coloca aquí tu Nombre Completo]**  
**[Coloca aquí el Nombre de tu Universidad / Institución]**  
**[Coloca aquí el Nombre de la Materia]**  
**[Coloca aquí el Nombre del Docente]**  
**[Coloca aquí la Fecha de Entrega]**  

---

## Resumen
El presente informe detalla el desarrollo de una aplicación web para la gestión de usuarios y divisas, construida bajo el framework CakePHP 5 y desplegada mediante contenedores Docker. El objetivo principal fue cumplir con requerimientos técnicos avanzados, incluyendo migraciones estructuradas a bases de datos PostgreSQL, desarrollo de operaciones CRUD con lógica de negocio superior, diseño adaptativo y la internacionalización completa de la interfaz de usuario. Al utilizar metodologías ágiles asistidas por Inteligencia Artificial como soporte técnico, se logró abstraer la lógica de la aplicación de su infraestructura, obteniendo un producto responsivo, bilingüe y escalable. Los resultados validan que la adopción conjunta de patrones arquitectónicos MVC y despliegues contenerizados optimizan significativamente los tiempos de desarrollo y mantenimiento.
**Palabras clave:** CakePHP, Docker, PostgreSQL, Internacionalización, MVC, Inteligencia Artificial.

---

## Introducción
En la actualidad, las aplicaciones web orientadas a la producción requieren cumplir con altos estándares técnicos de seguridad e infraestructura aislada (Sommerville, 2011). Este proyecto socioformativo describe la elaboración de un sistema escalable basado en CakePHP 5, cuyo propósito es facilitar tanto la gestión autenticada de usuarios como un soporte completo ("CRUD") de registros denominados Monedas. A diferencia de las metodologías tradicionales, la complejidad técnica radica en la orquestación distribuida, al separar el código de la aplicación de un motor estricto de bases de datos PostgreSQL utilizando entornos de desarrollo sobre Docker.

Sumado a la arquitectura de sistemas, la interfaz de usuario ("UI") debe proveer accesibilidad multi-dispositivo y ser capaz de alternar de forma nativa entre los lenguajes español e inglés, interceptando las preferencias de la configuración individual en la base de datos de cada sesión. Este documento, que responde a un formato formal IMRD, explora la elección e instrumentación de las herramientas usadas (método), resalta los logros empíricos del despliegue (resultados), evalúa la colaboración iterativa brindada por tecnologías modernas como los modelos de lenguaje (Inteligencia Artificial) como soporte, y concluye valorando el aprendizaje adquirido.

## Método
El núcleo de la lógica aplica la arquitectura del Patrón Modelo-Vista-Controlador (MVC) en el lenguaje PHP 8.2 mediante el framework CakePHP 5. Desde el ámbito de infraestructura o dependencias de red, se implementó el despliegue con contenedores usando Docker (Merkel, 2014).

*Construcción de Contenedores:* Se generó de modo manual un archivo `Dockerfile`. Este hereda desde una imagen oficial Apache-PHP e inyecta en el servidor interno compilaciones imprescindibles para la comunicación transaccional a bases de datos y utilidades lingüísticas (`pdo_pgsql`, `intl`). 
*Lógica Estructural e Interfaz:* Se ejecutaron rutinas automatizadas mediante la Interfaz de Línea de Comandos local de CakePHP (`bake`), levantando modelos base para los requerimientos de la tabla `usuarios` y `monedas`. En la vista o aspecto del usuario (Front-End), se diseñó de cero una estética responsiva autodenominada "Aether", implementada con instrucciones nativas de *CSS Media Queries* para colapsamiento fluido de menús en dispositivos móviles portátiles, evitando dependencias web ajenas lentas.
*Traducción Interactiva:* Se consolidó un algoritmo de captura en `AppController` el cual localiza e impone un *Locale* en tiempo real gestionando las etiquetas idiomáticas de código abierto GNU `.po`.
Este proceso contó de manera reiterativa con la ayuda de un motor de Inteligencia Artificial que asumió el rol de revisor de sintaxis, analista de esquemas e inyector rápido de variables de entorno para agilizar la producción técnica del código base.

## Resultados
Se ha desplegado un software alineado rigurosamente al requerimiento normativo del proyecto. El lanzamiento a través del contenedor de red (ejecutado por la instrucción de máquina simple `docker-compose up -d`) levanta transparentemente el servidor HTTP conectado directamente hacia el motor PostgreSQL designado para albergar la *data*, suprimiendo la instalación exhaustiva de utilidades localizadas en una computadora particular.

A nivel funcional, las páginas resuelven exigencias transaccionales profundas; el requerimiento del CRUD "Monedas" logra no solo permitir adición o manipulación sino que interrelaciona operaciones del motor de consultas (`ILIKE` de PostgreSQL) para crear barras de búsquedas elásticas, no distinguibles en mayúsculas, adjuntando filtrados directos por línea de estado activo temporal. Las capacidades multilingües permiten, hoy en día, interactuar enteramente con menús y validaciones traducidas desde sus núcleos ingleses hacia modismos hispanos basando las permutaciones únicamente en los datos seleccionados del acceso al *Login*. En conjunto, las vistas de tarjetas de cristal y la reorganización hacia modelos *Full-Mobile Hamburger* certifican el éxito en una usabilidad gráfica superior.

## Discusión
Las implementaciones efectuadas corroboran que la virtualización ligera, o diseño dentro de contenedores orquestados con bases de datos como PostgreSQL, descarta activamente los bloqueos paradigmáticos originados por conflictos de instalación entre distintas máquinas físicas de desarrolladores (Turnbull, 2014). Aunque su implementación para lenguajes del lado de servidor orientados a frameworks demanda una alta estipulación inicial en redes (puertos, variables compartidas o esquemas de permisos hostilizados), el saldo general final repercute en despliegues sumamente veloces.

Por otra parte, se debe subrayar la injerencia altamente formativa de la Inteligencia Artificial. Durante el desarrollo del *script* o migración de la base de SQL, la herramienta no limitó ni automatizó las ideas de negocio globales, sino que posibilitó, de un modo iterativo e instructivo, rastrear cuellos de botella semánticos propios del ecosistema de la librería CakePHP, proveyendo al desarrollador en todo instante de comandos orientados, corrección rápida de *labels* (traducciones en formatos gettext) y diagnósticos avanzados de redes para enrutar el contenedor Apache. Se asume que este paradigma dual eleva notoriamente la calidad académica de los entregables prácticos.

---

## Referencias
Cake Software Foundation. (2024). *CakePHP 5.x Documentation: Internationalization & Localization*. Recuperado de https://book.cakephp.org/5/en/core-libraries/internationalization-and-localization.html
Merkel, D. (2014). Docker: lightweight linux containers for consistent development and deployment. *Linux Journal*, 2014(239), 2.
Sommerville, I. (2011). *Ingeniería del software* (9a ed.). Pearson Educación.
Turnbull, J. (2014). *The Docker Book: Containerization is the new virtualization*. Turnbull Press.
