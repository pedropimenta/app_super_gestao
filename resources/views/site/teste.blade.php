<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teste</title>
</head>
<body>
    <h1>View Teste</h1>

    <ul class="menu">
        <li><a href="{{ route('site.index') }}">Principal</a></li>
        <li><a href="{{ route('site.sobrenos') }}">Sobre Nós</a></li>
        <li><a href="{{ route('site.contato') }}">Contato</a></li>
    </ul>

    <div>P1 = {{ $p1 }}</div>
    <div>P2 = {{ $p2 }}</div>
    <div>Total = {{ $total }}</div>

</body>
</html>
