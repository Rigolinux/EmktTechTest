## Instalación

1. Clonar el repositorio

2. Instalar las dependencias de composer.

```bash
   composer install
```

3. Asignar las variables de entorno en el archivo .env y ejecutar las migraciones

```bash
   php artisan migrate
```
4. Iniciar el servidor de php 
```bash
   php artisan serve 
```
5. ejecutar las semillas para datos de la tabla de habilidades
```bash
 php artisan db:seed 
```

6. Instalar las dependencias de node
```bash
 npm install
```

7. Compilar los archivos de js
```bash
 npm run dev
```

8. Acceder a la url del servidor de php por defecto 
```bash
http://127.0.0.1:8000
```
Las rutas disponibles son:
```bash
http://127.0.0.1:8000/menu

http://127.0.0.1:8000/somos-emkt

```




