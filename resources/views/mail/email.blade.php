<x-mail::message>
# Registro de usuario

Se ha registro un usuario menor de edad.

El usuario registro es:

* Nombre: {{$notifiable->name}} {{$notifiable->apellido}}
* edad: {{$notifiable->edad}}
* correo: {{$notifiable->email}}

Gracias,<br>
</x-mail::message>
