<!DOCTYPE html>
<html>
<head>
    <title>Categorias</title>
</head>
<body>
    <h1>Cadastro de Categorias</h1>

    @if(session('success'))
        <p style="color:green;">{{ session('success') }}</p>
    @endif

    <form action="/categorias" method="POST">
        @csrf
        <input type="text" name="nome" placeholder="Nome da categoria">
        <button type="submit">Cadastrar</button>
    </form>

    <h2>Lista de categorias</h2>
    <ul>
        @foreach($categorias as $categoria)
            <li>{{ $categoria->nome }}</li>
        @endforeach
    </ul>
</body>
</html>
