<head> </head>
<x-app-layout>
    <x-slot name="header">

        <h2>
            {{ __('Dashboard') }}
        </h2>
    </x-slot>




    <div>
        <h2>Bem-vindo de volta!</h2>
        <h4>VEJA O SEU PROGRESSO</h4>
        <h4>Reserve as suas aulas já!</h4>
        <!-- AQUI LOOP MOSTRANDO AULAS-->
        @foreach ($aulasData as $aula)
            <div>
                <p>Tipo Aula {{ $aula->tipo_aula }}</p>
                <p>Momento Aula {{ $aula->momento_aula }}</p>
            </div>
        @endforeach
    </div>

</x-app-layout>
