## Prueba técnica - Instrucciones

Usando las siguientes tecnologías, completa los siguientes puntos:

- Laravel 9+
- MySQL 8
- Vue 3

1. Integrar los datos del excel compartido en una base de datos usando migraciones y seeders.
2. Utilizando rutas/modelos/controladores, realizar un CRUD con los datos anteriores.
3. La vista debe de ser mostrada en el framework de JS que más sepas usar. Sólo debe de mostrar los datos, ya sea en tabla o listados.

### Puntos extra

- +2 La vista es mostrada en Vue JS.
- +2 Saber usar Composition API de Vue JS.
- +1 Buenas prácticas a la hora de codificar y declarar variables.
- +1 Usar Tailwindcss en la vista.
- +1 Crear rutas API para el CRUD.
- +1 Uso de conventional commits.

---

## Resultados

El resultado fue un proyecto con Laravel y Vue que muestra un listado de hoteles de la base de datos, esto usando CSS Grid. Pero no se limita en sólo eso, si no cumple con lo necesario para ser un CRUD completo y funcional de la entidad Hotels:

- Cuenta con un botón "Add hotel" en la parte superior de la página Index que redirige al usuario a un formulario para crear una nueva entrada de hotel.
- Cada una de las entradas de hoteles son en si mismas enlaces que llevan a la página View, la cual es una página que muestra de mejor forma la imágen e información del hotel seleccionado.
- Además de su imágen e información, en cada una de las vistas individuales de los hoteles se encuentra una botonera en la parte inferior derecha, la cual da acceso a las siguientes acciones:
  - Edit: este botón redirige al usuario a una página con un formulario que le permite modificar los valores de la entrada del hotel que estaba viendo.
  - Delete: este botón elimina la entrada del hotel que el usuario estaba visitando y lo redirige a la página de inicio con el listado de hoteles restantes.

### Características adicionales

- Tanto el método store() como update() del HotelController cuentan con una verificación de datos hecha por un archivo de tipo Request llamado SaveHotelRequest.php.
- Aunado al punto anterior, tanto el formulario de creación como el de edición de entradas de hoteles cuentan con manejadores de errores y los muestran al usuario cuando este introduce un valor no válido o nulo.
- Normalicé la tabla de datos que me compartieron y la dividí en dos entidades: Hotels y Cities. Estandaricé la información y corregí algunos typos e inconsistencias que había dentro de ella, para posteriormente convertir ambas entidades en archivos .csv. La información es obtenida por un seeder para cada entidad, pero se lee directamente de los .csv que creé, esto pensando en la escalabilidad y porque no es buena práctica (ni eficiente) tener que escribir cada entrada directamente en el seeder.
- Logré implementar tando Inertia como Ziggy en el proyecto, tanto para crear enlaces a rutas que renderizan vistas como para aquellas que ejecutan peticiones con parámetros.
- Todas las vistas son responsivas y esto lo hice con Flex, Grid y breakpoints, todo con Tailwindcss.
- Seguí la convención BEM para crear consistencia en los nombres de las clases de los componentes.
- Sé que es parte principal del ejercició en sí, pero me gustaría mencionar que apliqué la convención de conventional commits y publiqué commits lo más atómicos posible.

### Oportunidades de mejora

- Convertir a componentes ciertos elementos que se repiten, especialmente los relacionados a formularios.
- Crear clases utilitarias generales para los componentes que comparten características, para evitar la duplicación de código CSS/Tailwindcss.

---

## Instalación

A continuación, muestro el procedimiento y comandos necesarios para instalar dependencias y configurar el proyecto.

#### .env

Copiar el archivo `.env.example` y renombrarlo a `.env`.

#### Base de datos

Por defecto, la base de datos que utiliza el proyecto se llama `"tech_test_db"`, por lo que es necesario crearla en MySQL dentro de su sistema.

#### Servidor

Instalar dependencias de Laravel:
`λ composer install`

Correr migraciones y seeders:
`λ php artisan migrate --seed`

Crear un key para la aplicación:
`λ php artisan key:generate`

#### Cliente

Instalar dependencias de Node:
`λ npm run install`

## Ejecución

Para ejecutar el proyecto, se deben de realizar los siguientes comandos y pasos.

#### Servidor

Inicializar el servidor de backend:
`λ php artisan serve`

#### Cliente

Inicializar servidor de desarrollo:
`λ npm run dev`
