# Proyecto

## Instrucciones de Configuración

Sigue estos pasos para configurar el proyecto en tu entorno local.

### 1. Clonar el Repositorio

Primero, clona el repositorio a tu máquina local usando `git`:

```bash
git clone https://github.com/tu_usuario/tu_proyecto.git
cd tu_proyecto
```

### 2. Configurar las Variables de Entorno

Copia el archivo `.env.example` y renómbralo a `.env`:

```bash
cp .env.example .env
```

Abre el archivo `.env` y reemplaza los valores de las variables con tus propias credenciales.

### 3. Instalar Dependencias

Asegúrate de tener [Composer](https://getcomposer.org/) instalado en tu sistema. Luego, instala las dependencias del proyecto:

```bash
composer install
```

### 4. Configurar el Servidor Web

#### Usando XAMPP

1. Mueve el proyecto al directorio `htdocs` de XAMPP.
2. Asegúrate de que Apache y MySQL estén corriendo desde el panel de control de XAMPP.
3. Accede al proyecto desde tu navegador web en `http://localhost/tu_proyecto`.

#### Usando Laragon

1. Mueve el proyecto al directorio `www` de Laragon.
2. Asegúrate de que Apache/Nginx y MySQL estén corriendo desde el panel de control de Laragon.
3. Accede al proyecto desde tu navegador web en `http://localhost/tu_proyecto`.

### 5. Ejecutar el Proyecto

Una vez configurado el servidor web, ya puedes ejecutar el proyecto desde tu navegador. Asegúrate de que las migraciones y los seeders estén ejecutados si es necesario:

```bash
php artisan migrate --seed
```

¡Listo! Ahora puedes disfrutar de tu proyecto.

## Recursos Adicionales

- [Documentación de Composer](https://getcomposer.org/doc/)
- [Documentación de Laravel](https://laravel.com/docs/)
- [Descargar XAMPP](https://www.apachefriends.org/index.html)
- [Descargar Laragon](https://laragon.org/)

## Contribuir

Si deseas contribuir a este proyecto, por favor sigue estos pasos:

1. Haz un fork del repositorio.
2. Crea una nueva rama (`git checkout -b feature/nueva-feature`).
3. Realiza tus cambios y haz commit (`git commit -am 'Agrega nueva feature'`).
4. Haz push a la rama (`git push origin feature/nueva-feature`).
5. Abre un Pull Request.

