<head> </head>
<x-app-layout>
    <x-slot name="header">

        <h2>
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div>
        <h2>Bem-vindo de volta admin!</h2>

        <!-- AQUI LOOP MOSTRANDO contact forms-->
        {{ $contactData }}
    </div>
</x-app-layout>
