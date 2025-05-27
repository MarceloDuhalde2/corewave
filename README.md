# CoreWave

¡Bienvenido a **CoreWave**! Una aplicación web moderna construida con el framework Laravel, diseñada para ofrecer una experiencia de usuario fluida y atractiva. Este proyecto combina un backend robusto en PHP y Laravel con un frontend dinámico basado en Tailwind CSS, Alpine.js y Vite para una interfaz rápida y responsiva. Visita el sitio en producción en [corewave.com.ar](https://www.corewave.com.ar).

---

## Características

- **Formulario de Contacto**: Formulario funcional con respuestas automáticas por correo usando Laravel Mail.
- **Diseño Responsivo**: Construido con Tailwind CSS y Alpine.js para una experiencia adaptada a dispositivos móviles.
- **Rendimiento Optimizado**: Utiliza Vite para una compilación rápida de recursos y una experiencia frontend ligera.
- **Backend Escalable**: Desarrollado con Laravel 12 y SQLite para una gestión de base de datos ligera.
- **Amigable para Desarrolladores**: Incluye herramientas como Laravel Pint para estilo de código, PHPUnit para pruebas y Laravel Pail para monitoreo de logs.

---

## Tecnologías Utilizadas

- **Backend**:
  - PHP 8.2.12
  - Laravel 12
  - Composer 2.8.8
  - MySQL como base de datos
  - Laravel Breeze para autenticación
  - Laravel Mail para funcionalidad de correo
  - Laravel Tinker para depuración interactiva
- **Frontend**:
  - Tailwind CSS para estilos
  - Alpine.js para componentes reactivos
  - Vite para compilación de recursos
  - Node.js 22.14.0
- **Herramientas de Desarrollo**:
  - Laravel Sail para desarrollo basado en Docker
  - Laravel Pint para mantener un estilo de código consistente
  - PHPUnit 11.5.3 para pruebas
  - Mockery para simulaciones en pruebas
  - Faker para generar datos de prueba
  - Laravel Pail para monitoreo de logs en tiempo real

---

## Estructura del Proyecto

El proyecto sigue la estructura estándar de Laravel, con un código organizado y modular:
```
corewave/
├── app/
│   ├── Http/
│   │   ├── Controllers/ (Maneja rutas para Inicio, Acerca de, Contacto, etc.)
│   │   ├── Requests/ (Validación de formularios)
│   │   └── Middleware/
│   ├── Mail/ (Plantillas de correo para el formulario de contacto)
│   ├── Models/ (Modelos Eloquent como User)
│   └── Providers/
├── bootstrap/ (Arranque de la aplicación)
├── config/ (Archivos de configuración para app, auth, base de datos, etc.)
├── database/ (Migraciones, seeders y base de datos SQLite)
├── public/ (Recursos públicos y punto de entrada)
├── resources/ (Vistas, CSS y JS)
├── routes/ (Rutas web y API)
├── tests/ (Pruebas unitarias y funcionales)
├── node_modules/ (Dependencias frontend)
├── artisan (CLI de Laravel)
├── composer.json (Dependencias PHP)
├── package.json (Dependencias Node.js)
├── tailwind.config.js (Configuración de Tailwind CSS)
├── vite.config.js (Configuración de Vite)
└── README.md
```
## Instalación

Sigue estos pasos para configurar CoreWave localmente:

### Requisitos Previos
- PHP 8.2.12 o superior
- Composer 2.8.8
- Node.js 22.14.0
- SQLite (u otra base de datos soportada)

### Pasos
1. **Clonar el repositorio**:
    ```bash
    git clone https://github.com/tuusuario/corewave.git
    cd corewave
    ```
2. **Instalar dependencias PHP**:
    ```bash
    composer install
    ```

3. **Instalar dependencias Node.js**:
    ```bash
    npm install
    ```

4. **Configurar el entorno**:
    Copiar .env.example a .env:
    ```bash
    cp .env.example .env
    ```

5. **Generar la clave de la aplicación**:
    ```bash
    php artisan key:generate
    ```

6. **Configurar la base de datos**:
    Ejecutar migraciones:
    ```bash
    php artisan migrate
    ```

7. **Iniciar el servidor de desarrollo**:
    Inicia el servidor de Laravel, el trabajador de colas, el monitor de logs y el servidor de Vite:
    ```bash
    composer run dev
    ```
8. **Acceder a la aplicación**:
    Abre http://localhost:8000 en tu navegador.

## Despliegue
La aplicación está en producción en corewave.com.ar. Para desplegar tu propia instancia:
- Configura tu servidor web (Apache/Nginx) para apuntar al directorio public/.

- Configura las variables de entorno en .env para producción (por ejemplo, APP_ENV=production).

- Ejecuta composer install --optimize-autoloader --no-dev para dependencias de producción.

- Compila los recursos con npm run build.

- Asegúrate de que la base de datos esté migrada: php artisan migrate --force.

## Contribuir
¡Las contribuciones son bienvenidas! Sigue estos pasos:
- Haz un fork del repositorio.

- Crea una rama para tu funcionalidad (git checkout -b feature/TuFuncionalidad).

- Realiza tus cambios (git commit -m "Agregar TuFuncionalidad").

- Sube la rama (git push origin feature/TuFuncionalidad).

- Abre un pull request.

## ¿Por qué CoreWave?
CoreWave demuestra un conjunto completo de habilidades de desarrollo full-stack, combinando experiencia en backend (Laravel, PHP, SQLite) con tecnologías frontend modernas (Tailwind CSS, Alpine.js, Vite). Es un reflejo de código limpio y mejores prácticas, incluyendo:
- Arquitectura MVC: Controladores, modelos y vistas organizados.

- Autenticación Segura: Gestión robusta de usuarios con Laravel Breeze.

- Pruebas Automatizadas: Conjunto completo de pruebas para fiabilidad.

- Rendimiento: Optimizado con Vite y Tailwind CSS para tiempos de carga rápidos.

- Escalabilidad: Diseño modular preparado para mejoras futuras.

## Licencia
CoreWave es un software de código abierto licenciado bajo la Licencia MIT (LICENSE).

## Contacto
Para consultas o comentarios, utiliza el formulario de contacto en corewave.com.ar o abre un issue en este repositorio.
¡Feliz codificación! 

