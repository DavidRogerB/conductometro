<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<x-app-layout>
    <x-slot name="header">

        <h2>
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div>
        <h2>Bem-vindo de volta administrador!</h2>


        <!-- AQUI LOOP MOSTRANDO contact forms-->
        <div>

            <div>
                <table class="table">
                    <div class="row">
                        <div class="col-12">
                    <tr>

                      <th class="table-warning">Nome</th>
                      <th class="table-warning">Email</th>
                      <th class="table-warning">Telefone</th>
                      <th class="table-warning">Recebido as:</th>
                      <th class="table-warning">Mensagem: </th>
                    </tr>
  @foreach ($contactForm as $form)
                    <tr>
                      <td>{{ $form->name }}</td>
                      <td> {{ $form->email }}</td>
                      <td>{{ $form->telefone}}</td>
                      <td>{{ $form->created_at}}</td>
                    <td>{{ $form->mensagem}}</tr></div>
                    </tr>
     @endforeach
                  </table>
            </div></div>

        </div>

    </div>
</x-app-layout>
