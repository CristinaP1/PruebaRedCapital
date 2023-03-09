# Pasos para ejecutar el sistema

  Al clonas el repositorio se debe modificar el nombre del archivo .env.example a .env
  
  - Para la configuración de la base de datos agregar el nombre de la base de datos y las credenciales en el caso de ser necesario, ejm:
  
        ![image](https://user-images.githubusercontent.com/123708866/224116776-6749bf6d-5fb8-41ba-8d24-c90fc7a0c6b8.png)
  
  - Para la configuración del email se utilizó el servidor de email Mailtrap, donde se deberan generar un cuenta y obtener los datos para ingresar en el archivo .env. Por ejemplo:

    `MAIL_MAILER=smtp`

        `MAIL_HOST=sandbox.smtp.mailtrap.io`

        `MAIL_PORT=2525`

        `MAIL_USERNAME=0f94d17a578022`

        `MAIL_PASSWORD=447017d8fcc67b`

        `MAIL_ENCRYPTION=tls`

        `MAIL_FROM_ADDRESS="admin@gmail.com"`

        `MAIL_FROM_NAME="${APP_NAME}"`
  
  En la mensajeria de Mailtrap se podrán ver los correos de restablecer contraseña y la del registro de usuario menor a 18 años
  
  Luego en para generar la key en el archivo .env se debe realizar lo siquiente:
  - Generar la key en el archivo .env con el comando `php artisan key:generate`
   
   Luego para los sigueintes comandos: 
  - Realizar los comando `composer install` y `npm install`
  - Correr las miggraciones con `php artisan migrate`
  - Correr los seeders con `php artisan db:seed`
  - Para limpiar hacer el comando `php artisan optimize:clear`
  
  Para que el sistema funcione se debe realizar en una terminal el comando `php artisan serve` y en otra terminar `npm run dev`

# Requerimientos Realizados

- Generales
    - [x] Ingreso de usuario por correo y contraseña
    - [x] Olvidar contraseña, este llena por correo al usuario para que puede restablecer su contraseña
    - [x] Home con el nombre del usuairo al ingresar
    - [x] Sección de perfil del usuario, para que el usuario pueda cambiar su nombre, contraseña y correo

- CRUD
    - [x] Ver y crear cotización
    - [x] Registrar, ver, editar y eliminar usuarios. También se realizó la notificación si se registra un usuario menores a 18 años


Para el reporte en Excel cabe mencionar que no lo pude terminar a tiempo, ya que tuve un problema con las extensiones de php, encontrando la solución muy tarde.
