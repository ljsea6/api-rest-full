@component('mail::message')
    # Hola {{$user->name}}

    Has cambiado tu correo electronico, por favor verificala la nueva direccion usando el siguiente boton:

    @component('mail::button', ['url' => route('verify', $user->verification_token)])
        Confirmar mi cuenta
    @endcomponent

    Gracias,<br>
    {{ config('app.name') }}
@endcomponent