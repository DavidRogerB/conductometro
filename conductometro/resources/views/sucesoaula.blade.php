<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>


</head>

<body>
    <h1>SUCCESSO</h1>
    <p>Obrigado por registar a aula de nome :{{ $name }}  que se dara no dia ({{ $diaDaAula }})!</p>
    <p>Registou a aula com sucesso!</p>
    <a href="/dashboard">De volta </a>
</body>

</html>
