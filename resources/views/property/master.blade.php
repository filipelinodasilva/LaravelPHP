<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaraDev: CRUD imobi</title>
</head>
<body>

<p> <a href=" <?= url('/imoveis') ?> ">Listar todos os Imóveis</a> | <a href=" <?= url('/imoveis/novo') ?> ">Cadastrar Novo Imóvel</a></p>

@yield('content')

</body>
</html>