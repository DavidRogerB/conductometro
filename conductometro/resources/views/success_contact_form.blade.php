<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>


</head>

<body>
    <h1>SUCCESSO</h1>
    <p>Obrigado {{ $nome }} ({{ $email }})!</p>
    <p>O formulario de contact foi recebido com sucesso, entraremos em breve em contacto!</p>
    <a href="/">BACK TO LANDING</a>
</body>

</html>
