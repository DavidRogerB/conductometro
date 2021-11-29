<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<x-app-layout>
    <x-slot name="header">

        <h2>
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div>
        <h2>Bem-vindo de volta administrador!</h2>
        <div class="container">
            <div class="row">

                <div>
                    <div class="row" data-aos="fade-up">

                        <div class="col-1 col-md-3">

                        </div>
                        <div class="col-10 col-md-10 mt-5 mb-4"
                            style="border: rgba(0, 0, 0, 0.089) dashed 4px; background-color:rgb(255, 145, 0);">
                            <i class="fas fa-envelope-open-text"></i>
                            <h2 class="display-3 text-light" style="">Criar Aulas</h2>
                            <div class="form-group" id="contactenos" data-aos="fade-down">
                                <form method="POST" enctype="application/x-www-form-urlencoded"
                                    action="/submit/aulaPorCriar">
                                    @csrf
                                    <label for="name" required>Nome da aula:</label>
                                    <input class="form-control text-center " type="text" name="name">

                                    <label for="capacidade_alunos" required>Capacidade de alunos:</label>
                                    <input class="form-control text-center" type="number" name="capacidade_alunos">

                                    <label for="tipo_aula" required>Tipo de aula:</label>
                                    <input class="form-control text-center form-control-sm" type="text"
                                        name="tipo_aula">

                                    <label for="momentoDaAula" required>Momento da Aula</label>
                                    <input type="date" name="diaDaAula">
                                    <input type="time" name="horas">
                            </div>


                            <button type="submit" class="btn btn-warning">Criar aula</button>
                        </div>
                    </div>
                    </form>
                </div>


                <!-- AQUI LOOP MOSTRANDO contact forms-->


                <div>
                    <div class="container-fluid">
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
                                            <td>{{ $form->telefone }}</td>
                                            <td>{{ $form->created_at }}</td>
                                            <td>{{ $form->mensagem }}
                                        </tr> @endforeach
                                    </table>
                                </div>
                            </div>




                    </div>
                </div>
            </div>

        </div>
</x-app-layout>
