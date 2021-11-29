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
        <div class="container">
            <div class="row">
                <div class="col">

                    <form method="POST" enctype="application/x-www-form-urlencoded"
                    action="/submit/consultarAula">
                    @csrf
              <h2>  Para quando quere agendar a sua aula?</h2>
              <input type="date" name="diaDaAula">
              <button type="submit" class="btn btn-warning">Ver aulas disponíveis no dia selecionado</button>
            </form>
                </div>
            </div>
        </div>
        <table class="table">
            <tr>
                <th>
                    Tipo de Aula
                </th>
                <th>
                    Data da Aula
                </th>
                <th>
                    Horas da Aula
                </th>
                <th>
                    Nome da Aula
                </th>
            </tr>
            @foreach ($aulas as $aulas)

            <tr>

                <td>{{ $aulas->tipo_aula }}</td>
                <td> {{ $aulas->diaDaAula }} </td>
                <td> {{ $aulas->horas }} </td>
                <td> {{ $aulas->name }} </td>
            </tr>
        @endforeach
        </table>


    </div>

</x-app-layout>