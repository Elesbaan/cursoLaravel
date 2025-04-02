<!DOCTYPE html>
<html>
<head>
    <title>Lista de Posts</title>
</head>
<body>
    <h1>Posts Guardados</h1>

    @if(count($posts) > 0)
        <ul>
            @foreach($posts as $post)
                <li>
                    <strong>{{ $post['title'] }}</strong><br>
                    {{ $post['contenido'] }}
                </li>
            @endforeach
        </ul>
    @else
        <p>No hay posts aún.</p>
    @endif

    <a href="{{ route('posts.create') }}">Crear otro post</a>
</body>
</html>